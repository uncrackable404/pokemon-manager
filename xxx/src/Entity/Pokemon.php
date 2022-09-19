<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Team::class, inversedBy: 'pokemon')]
    private Collection $Team;

    #[ORM\Column]
    private ?int $experience = null;

    #[ORM\Column]
    private array $abilities = [];

    #[ORM\Column]
    private array $types = [];

    public function __construct()
    {
        $this->Team = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Team>
     */
    public function getTeam(): Collection
    {
        return $this->Team;
    }

    public function addTeam(Team $team): self
    {
        if (!$this->Team->contains($team)) {
            $this->Team->add($team);
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        $this->Team->removeElement($team);

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getAbilities(): array
    {
        return $this->abilities;
    }

    public function setAbilities(array $abilities): self
    {
        $this->abilities = $abilities;

        return $this;
    }

    public function getTypes(): array
    {
        return $this->types;
    }

    public function setTypes(array $types): self
    {
        $this->types = $types;

        return $this;
    }
}
