<?php

namespace App\Service;

use App\Repository\EventRepository;

class EventService
{
    private $eventRepository;
    private $idEvent;
    private $word;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function findAllEvents()
    {
        return $this->eventRepository->findAll();
    }

    public function findActiveEvents()
    {
        return $this->eventRepository->findBy(['active' => 1]);
    }

    public function findNotActiveEvents()
    {
        return $this->eventRepository->findBy(['active' => 0]);
    }

    public function findWordE($word)
    {
        return $this->eventRepository->findByActiveAndLikeWord($word);
    }

    public function findOneEvent($idEvent)
    {
        return $this->eventRepository->findBy(['id' => $idEvent]);
    }

}