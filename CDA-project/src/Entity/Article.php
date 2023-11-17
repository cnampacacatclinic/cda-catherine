<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleArticle;

    /**
     * @ORM\Column(type="text")
     */
    private $textArticle;

    /**
     * @ORM\Column(type="smallint")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function gettitleArticle(): ?string
    {
        return $this->titleArticle;
    }

    public function settitleArticle(string $titleArticle): self
    {
        $this->titleArticle = $titleArticle;

        return $this;
    }

    public function getTextArticle(): ?string
    {
        return $this->textArticle;
    }

    public function setTextArticle(string $textArticle): self
    {
        $this->textArticle = $textArticle;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getFkCategorie(): ?Categorie
    {
        return $this->fkCategorie;
    }

    public function setFkCategorie(?Categorie $fkCategorie): self
    {
        $this->fkCategorie = $fkCategorie;

        return $this;
    }

}
