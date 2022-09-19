<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokeClient
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client->withOptions([
            'base_uri' => 'https://pokeapi.co'
        ]);
    }

    public function getPokemons(): array
    {
        return $this->client->request('GET', '/api/v2/pokemon')->toArray()['results'];
    }

    public function getPokemon(string $name): array
    {
        return $this->client->request('GET', '/api/v2/pokemon/' . $name)->toArray();
    }
}
