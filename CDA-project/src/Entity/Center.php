<?php

namespace App\Entity;

use App\Repository\CenterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CenterRepository::class)
 */
class Center
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
    private $nameCenter;

    /**
     * @ORM\Column(type="integer")
     */
    private $numWay;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeWay;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameWay;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\OneToMany(targetEntity=Phone::class, mappedBy="center")
     */
    private $fkPhone;

    public function __construct()
    {
        $this->fkPhone = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCenter(): ?string
    {
        return $this->nameCenter;
    }

    public function setNameCenter(string $nameCenter): self
    {
        $this->nameCenter = $nameCenter;

        return $this;
    }

    public function getNumWay(): ?int
    {
        return $this->numWay;
    }

    public function setNumWay(int $numWay): self
    {
        $this->numWay = $numWay;

        return $this;
    }

    public function getTypeWay(): ?string
    {
        return $this->typeWay;
    }

    public function setTypeWay(string $typeWay): self
    {
        $this->typeWay = $typeWay;

        return $this;
    }

    public function getNameWay(): ?string
    {
        return $this->nameWay;
    }

    public function setNameWay(string $nameWay): self
    {
        $this->nameWay = $nameWay;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zipCode;
    }

    public function setZipCode(int $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Collection<int, Phone>
     */
    public function getFkPhone(): Collection
    {
        return $this->fkPhone;
    }

    public function addFkPhone(Phone $fkPhone): self
    {
        if (!$this->fkPhone->contains($fkPhone)) {
            $this->fkPhone[] = $fkPhone;
            $fkPhone->setCenter($this);
        }

        return $this;
    }

    public function removeFkPhone(Phone $fkPhone): self
    {
        if ($this->fkPhone->removeElement($fkPhone)) {
            // set the owning side to null (unless already changed)
            if ($fkPhone->getCenter() === $this) {
                $fkPhone->setCenter(null);
            }
        }

        return $this;
    }
}
