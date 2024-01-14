<?php

namespace App\Entity;

use App\Repository\PhoneTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhoneTypeRepository::class)
 */
class PhoneType
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
    private $nameType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameType(): ?string
    {
        return $this->nameType;
    }

    public function setNameType(string $nameType): self
    {
        $this->nameType = $nameType;

        return $this;
    }
}//fin de la classe PhoneType