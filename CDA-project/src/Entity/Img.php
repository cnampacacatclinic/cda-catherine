<?php

namespace App\Entity;

use App\Repository\ImgRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImgRepository::class)
 */
class Img
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
    private $pathImg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionImg;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPathImg(): ?string
    {
        return $this->pathImg;
    }

    public function setPathImg(string $pathImg): self
    {
        $this->pathImg = $pathImg;

        return $this;
    }

    public function getDescriptionImg(): ?string
    {
        return $this->descriptionImg;
    }

    public function setDescriptionImg(?string $descriptionImg): self
    {
        $this->descriptionImg = $descriptionImg;

        return $this;
    }

}
