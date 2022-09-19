<?php

namespace App\Transformer;

use App\Entity\Team;
use League\Fractal\TransformerAbstract;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TeamTransformer extends TransformerAbstract
{
    public function __construct(private UrlGeneratorInterface $router) {}

    public function transform(Team $team)
    {
        $pokemons = [];
        $experiences = [];
        $types = [];

        foreach($team->getPokemon() as $pokemon) {
            $pokemons[] = [
                'id' => $pokemon->getId(),
                'name' => $pokemon->getName(),
                'experience' => $pokemon->getExperience(),
                'abilities' => $pokemon->getAbilities(),
                'types' => $pokemon->getTypes(),
                'sprite' => $this->router->generate(
                    'app_pokemon_image',
                    ['pokemon' => $pokemon->getId()],
                    UrlGeneratorInterface::ABSOLUTE_URL
                )
            ];

            $experiences[] = $pokemon->getExperience();

            foreach($pokemon->getTypes() as $type) {
                $types[] = $type;
            }
        }

        return [
            'id' => $team->getId(),
            'name' => $team->getName(),
            'experience' => array_sum($experiences),
            'types' => array_values(array_unique($types)),
            'pokemons' => $pokemons
        ];
    }
}
