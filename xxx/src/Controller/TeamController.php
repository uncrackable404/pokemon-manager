<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Entity\Team;
use App\Request\TeamRequest;
use App\Transformer\TeamTransformer;
use Doctrine\Persistence\ManagerRegistry;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/api/team')]
class TeamController extends AbstractController
{
    public function __construct(private ManagerRegistry $database) {}

    #[Route(methods: ['POST'])]
    public function store(TeamRequest $request): Response
    {
        $team = new Team;
        $team->setName($request->getRequest()->get('name'));

        $this->database->getManager()->persist($team);
        $this->database->getManager()->flush();

        return new JsonResponse(
            $this->transformEntity($team, TeamTransformer::class)
        );
    }

    #[Route(methods: ['GET'])]
    public function list(): Response
    {
        $collection = $this->database->getRepository(Team::class)->findAll();

        return new JsonResponse(
            $this->transformCollection($collection, TeamTransformer::class)
        );
    }

    #[Route('/{team}', methods: ['GET'])]
    public function get(Team $team): Response
    {
        return new JsonResponse(
            $this->transformEntity($team, TeamTransformer::class)
        );
    }

    #[Route('/{team}/pokemon', methods: ['POST'])]
    public function addPokemon(Team $team): Response
    {
        $pokemon = $this->database->getRepository(Pokemon::class)->random();

        if($pokemon) {
            $team->addPokemon($pokemon);
        }

        $this->database->getManager()->persist($team);
        $this->database->getManager()->flush();

        return new JsonResponse(
            $this->transformEntity($team, TeamTransformer::class)
        );
    }

    #[Route('/{team}/pokemon/{pokemon}', methods: ['DELETE'])]
    public function removePokemon(Team $team, Pokemon $pokemon): Response
    {
        $team->removePokemon($pokemon);

        $this->database->getManager()->persist($team);
        $this->database->getManager()->flush();

        return new JsonResponse(
            $this->transformEntity($team, TeamTransformer::class)
        );
    }

    private function transformCollection(iterable $collection, string $transformer): array {
        $results = new Collection(
            $collection,
            new $transformer($this->container->get('router'))
        );

        return (new Manager)->createData($results)->toArray();
    }

    private function transformEntity(object $entity, string $transformer): array {
        $results = new Item(
            $entity,
            new $transformer($this->container->get('router'))
        );

        return (new Manager)->createData($results)->toArray();
    }
}
