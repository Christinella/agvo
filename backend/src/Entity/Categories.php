<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Destinations>
     */
    #[ORM\ManyToMany(targetEntity: Destinations::class, inversedBy: 'categories')]
    private Collection $Destinations;

    public function __construct()
    {
        $this->Destinations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Destinations>
     */
    public function getDestinations(): Collection
    {
        return $this->Destinations;
    }

    public function addDestination(Destinations $destination): static
    {
        if (!$this->Destinations->contains($destination)) {
            $this->Destinations->add($destination);
        }

        return $this;
    }

    public function removeDestination(Destinations $destination): static
    {
        $this->Destinations->removeElement($destination);

        return $this;
    }
}
