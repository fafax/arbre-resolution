<?php

namespace App\Entity;

use App\Repository\BrancheRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BrancheRepository::class)
 */
class Branche
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $precedent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $suivant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getPrecedent(): ?string
    {
        return $this->precedent;
    }

    public function setPrecedent(?string $precedent): self
    {
        $this->precedent = $precedent;

        return $this;
    }

    public function getSuivant(): ?string
    {
        return $this->suivant;
    }

    public function setSuivant(?string $suivant): self
    {
        $this->suivant = $suivant;

        return $this;
    }
}
