<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Path;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/pokemon')]
class PokemonController extends AbstractController
{
    #[Route('/{pokemon}/image', methods: ['GET'])]
    public function image(Pokemon $pokemon): BinaryFileResponse
    {
        return $this->file(
            __DIR__ . '/../../storage/pokemons/' . $pokemon->getName() . '.gif',
            null,
            ResponseHeaderBag::DISPOSITION_INLINE
        );
    }
}
