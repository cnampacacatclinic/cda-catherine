<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleEvent;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="FK_event")
     */
    private $usersList;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionEvent;

    public function __construct()
    {
        $this->usersList = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getstartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setstartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getTitleEvent(): ?string
    {
        return $this->titleEvent;
    }

    public function setTitleEvent(string $titleEvent): self
    {
        $this->titleEvent = $titleEvent;

        return $this;
    }

    public function isBoolean(): ?bool
    {
        return $this->active;
    }

    public function setBoolean(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

   
    /**
     * @return Collection<int, User>
     */
    public function getUsersList(): Collection
    {
        return $this->usersList;
    }

    public function addUsersList(User $usersList): self
    {
        if (!$this->usersList->contains($usersList)) {
            $this->usersList[] = $usersList;
            $usersList->addFKEvent($this);
        }

        return $this;
    }

    public function removeUsersList(User $usersList): self
    {
        if ($this->usersList->removeElement($usersList)) {
            $usersList->removeFKEvent($this);
        }

        return $this;
    }

    public function getDescriptionEvent(): ?string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): self
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }
}