<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $dateComment;

    /**
     * @ORM\Column(type="text")
     */
    private $textComment;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkArticle;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $fkUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    public function __construct()
    {
        $this->active = false; /*par défaut le tinyint sera égale à zéro en BDD*/
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateComment(): ?\DateTimeInterface
    {
        return $this->dateComment;
    }

    public function setDateComment(\DateTimeInterface $dateComment): self
    {
        $this->dateComment = $dateComment;

        return $this;
    }

    public function getTextComment(): ?string
    {
        return $this->textComment;
    }

    public function setTextComment(string $textComment): self
    {
        $this->textComment = $textComment;

        return $this;
    }

    public function getFkArticle(): ?Article
    {
        return $this->fkArticle;
    }

    public function setFkArticle(?Article $fkArticle): self
    {
        $this->fkArticle = $fkArticle;

        return $this;
    }

    public function getFkUser(): ?User
    {
        return $this->fkUser;
    }

    public function setFkUser(?User $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {

        $this->active = $active;
        // Retourne l'instance de l'entité
        return $this;
    }
}
