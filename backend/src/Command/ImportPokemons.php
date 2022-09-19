<?php

namespace App\Command;

use App\Entity\Pokemon;
use App\Service\PokeClient;
use Doctrine\Persistence\ManagerRegistry;
use Sarhan\Flatten\Flatten;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;

#[AsCommand(name: 'app:import-pokemons')]
class ImportPokemons extends Command
{
    protected static $defaultName = 'app:import-pokemons';

    private $database;

    public function __construct(private PokeClient $client, ManagerRegistry $database)
    {
        $this->database = $database->getManager();

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $results = $this->client->getPokemons();

        foreach($results as $result) $this->storePokemon($result);

        $this->database->flush();

        return Command::SUCCESS;
    }

    private function normalize(string $key, array $items = []): array {
        $results = [];

        foreach($items as $item) {
            $results[] = $item[$key]['name'];
        }

        return $results;
    }

    private function storePokemon(array $result): void {
        $result = $this->client->getPokemon($result['name']);

        $pokemon = new Pokemon;
        $pokemon->setName($result['name']);
        $pokemon->setExperience($result['base_experience']);
        $pokemon->setAbilities($this->normalize('ability', $result['abilities']));
        $pokemon->setTypes($this->normalize('type', $result['types']));

        $this->database->persist($pokemon);

        $this->storePokemonSprite($result['name'], $result['sprites']);
    }

    private function storePokemonSprite(string $name, array $sprites): void {
        $sprites = array_filter((new Flatten)->flattenToArray($sprites));
        $sprites = preg_grep('/^(.*)\.gif$/', $sprites);
        shuffle($sprites);

        if(count($sprites)) {
            $filesystem = new Filesystem();

            if(!$filesystem->exists('storage/pokemons/' . $name . '.gif')) {
                $sprite = file_get_contents($sprites[0]);

                $filesystem->dumpFile('storage/pokemons/' . $name . '.gif', $sprite);
            }
        }
    }
}
