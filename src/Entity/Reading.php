<?php

namespace App\Entity;

use App\Repository\ReadingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReadingRepository::class)
 */
class Reading
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberpage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resumer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getNumberpage(): ?int
    {
        return $this->numberpage;
    }

    public function setNumberpage(int $numberpage): self
    {
        $this->numberpage = $numberpage;

        return $this;
    }

    public function getResumer(): ?string
    {
        return $this->resumer;
    }

    public function setResumer(string $resumer): self
    {
        $this->resumer = $resumer;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
