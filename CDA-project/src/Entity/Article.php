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
    private $dateArticle;

    /**
     * @ORM\Column(type="text")
     */
    private $textArticle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleArticle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity=Page::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkPage;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkCategorie;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="article")
     */
    private $fkComment;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkUser;

    /**
     * @ORM\ManyToMany(targetEntity=Img::class)
     */
    private $fkImg;

 

    public function __construct()
    {
        $this->fkComment = new ArrayCollection();
        $this->fkImg = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArticle(): ?\DateTimeInterface
    {
        return $this->dateArticle;
    }

    public function setDateArticle(\DateTimeInterface $dateArticle): self
    {
        $this->dateArticle = $dateArticle;

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

    public function getTitleArticle(): ?string
    {
        return $this->titleArticle;
    }

    public function setTitleArticle(string $titleArticle): self
    {
        $this->titleArticle = $titleArticle;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getFkPage(): ?Page
    {
        return $this->fkPage;
    }

    public function setFkPage(?Page $fkPage): self
    {
        $this->fkPage = $fkPage;

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

    /**
     * @return Collection<int, Comment>
     */
    public function getFkComment(): Collection
    {
        return $this->fkComment;
    }

    public function addFkComment(Comment $fkComment): self
    {
        if (!$this->fkComment->contains($fkComment)) {
            $this->fkComment[] = $fkComment;
            $fkComment->setArticle($this);
        }

        return $this;
    }

    public function removeFkComment(Comment $fkComment): self
    {
        if ($this->fkComment->removeElement($fkComment)) {
            // set the owning side to null (unless already changed)
            if ($fkComment->getArticle() === $this) {
                $fkComment->setArticle(null);
            }
        }

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

    /**
     * @return Collection<int, Img>
     */
    public function getFkImg(): Collection
    {
        return $this->fkImg;
    }

    public function addFkImg(Img $fkImg): self
    {
        if (!$this->fkImg->contains($fkImg)) {
            $this->fkImg[] = $fkImg;
        }

        return $this;
    }

    public function removeFkImg(Img $fkImg): self
    {
        $this->fkImg->removeElement($fkImg);

        return $this;
    }
 
}
