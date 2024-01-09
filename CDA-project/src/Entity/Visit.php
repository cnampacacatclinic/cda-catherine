<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisiteRepository")
 */
class Visit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origine;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateVisit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $currentPage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cookie;


    public function __construct()
    {
        $this->dateVisit = new DateTime(); /*Par défaut c'est la date actuelle */
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setOrigine(string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setDateVisit(\DateTimeInterface $dateVisit): self
    {
        $this->dateVisit = $dateVisit;

        return $this;
    }

    public function getDateVisit(): ?\DateTimeInterface
    {
        return $this->dateVisit;
    }

    public function setCurrentPage(string $currentPage): self
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    public function getCurrentPage(): ?string
    {
        return $this->currentPage;
    }

    public function setCookie(string $cookie): self
    {
        $this->cookie = $cookie;

        return $this;
    }

    public function getCookie(): ?string
    {
        return $this->cookie;
    }
}