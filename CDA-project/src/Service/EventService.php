<?php

namespace App\Service;

use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Entity\Event;

class EventService
{
    private $eventRepository;
    private $entityManager;

    private $id;
    private $userId;
    private $word;
    private $user;

    public function __construct(EventRepository $eventRepository, EntityManagerInterface $entityManager)
    {
        $this->eventRepository = $eventRepository;
        $this->entityManager = $entityManager;
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

    public function registrationUserEvent($userId, $id)
{
    $user = $this->entityManager->getRepository(User::class)->find($userId);
    $event = $this->entityManager->getRepository(Event::class)->find($id);

    if ($user && $event) {
        // Assuming you have appropriate methods like `addFkEvent` and `addUsersList` in your User and Event entities.

        // Add the event to the user's list
        $user->addFkEvent($event);

        // Add the user to the event's user list
        $event->addUsersList($user);

        // You don't need to persist $userId and $id, you need to persist the entities (User and Event).
        // Assuming $user and $event are instances of your User and Event entities.

        $this->entityManager->persist($user);
        $this->entityManager->persist($event);
        $this->entityManager->flush();
    }
}

}