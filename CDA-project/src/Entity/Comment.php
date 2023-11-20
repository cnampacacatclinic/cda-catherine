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
     * @ORM\Column(type="datetime")
     */
    private $dateComment;

    /**
     * @ORM\Column(type="text")
     */
    private $textComment;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="fkComment")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkArticle;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $fkUser;

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

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

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
}
