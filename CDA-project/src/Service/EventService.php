<?php

namespace App\Service;

use App\Repository\EventRepository;

class EventService
{
    private $eventRepository;
    private $id;
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

    public function findOneEvent($id)
    {
        return $this->eventRepository->findBy(['id' => $id]);
    }

    public function toggleActive($id)
    {
        $event = $this->eventRepository->find($id);

        if ($event) {
            // Mise à jour la valeur de 'active' en fonction de sa valeur actuelle
            $event->setActive($event->getActive() == 0 ? 1 : 0);

            // On enregistre les modif
            $this->eventRepository->save($event);

            return $event;
        }

        return null; //Null si l'evenement n'a pas été trouvé
    }

    public function deleteById($id)
    {    
        return $this->eventRepository->delete($id);
    }

}