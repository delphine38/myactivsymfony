<?php

namespace App\Entity;

use App\Repository\CrochetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrochetRepository::class)
 */
class Crochet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numbercrochet;

    /**
     * @ORM\Column(type="integer")
     */
    private $pelottenumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pelotteimage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $crochetimage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageprojetfini;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumbercrochet(): ?int
    {
        return $this->numbercrochet;
    }

    public function setNumbercrochet(int $numbercrochet): self
    {
        $this->numbercrochet = $numbercrochet;

        return $this;
    }

    public function getPelottenumber(): ?int
    {
        return $this->pelottenumber;
    }

    public function setPelottenumber(int $pelottenumber): self
    {
        $this->pelottenumber = $pelottenumber;

        return $this;
    }

    public function getPelotteimage(): ?string
    {
        return $this->pelotteimage;
    }

    public function setPelotteimage(string $pelotteimage): self
    {
        $this->pelotteimage = $pelotteimage;

        return $this;
    }

    public function getCrochetimage(): ?string
    {
        return $this->crochetimage;
    }

    public function setCrochetimage(string $crochetimage): self
    {
        $this->crochetimage = $crochetimage;

        return $this;
    }

    public function getImageprojetfini(): ?string
    {
        return $this->imageprojetfini;
    }

    public function setImageprojetfini(string $imageprojetfini): self
    {
        $this->imageprojetfini = $imageprojetfini;

        return $this;
    }
}
