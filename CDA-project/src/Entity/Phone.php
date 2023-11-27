<?php

namespace App\Entity;

use App\Repository\PhoneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhoneRepository::class)
 */
class Phone
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
    private $phoneNumber;

    /**
     * @ORM\ManyToOne(targetEntity=Center::class, inversedBy="fkPhone")
     * @ORM\JoinColumn(nullable=false)
     */
    private $center;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMobile;

    /**
     * @ORM\ManyToOne(targetEntity=PhoneType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCenter(): ?Center
    {
        return $this->center;
    }

    public function setCenter(?Center $center): self
    {
        $this->center = $center;

        return $this;
    }

    public function isIsMobile(): ?bool
    {
        return $this->isMobile;
    }

    public function setIsMobile(bool $isMobile): self
    {
        $this->isMobile = $isMobile;

        return $this;
    }

    public function getFkType(): ?PhoneType
    {
        return $this->fkType;
    }

    public function setFkType(?PhoneType $fkType): self
    {
        $this->fkType = $fkType;

        return $this;
    }
}