<?php

namespace App\Entity;

use App\Repository\FeuilleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FeuilleRepository::class)
 */
class Feuille
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_elearning;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $precedent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUrlElearning(): ?string
    {
        return $this->url_elearning;
    }

    public function setUrlElearning(?string $url_elearning): self
    {
        $this->url_elearning = $url_elearning;

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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
