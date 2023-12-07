<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RegistrationEventType;
use App\Entity\Event;
use App\Service\EventService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;//pour obtenir l'id de l'utilisateur connecté

class RegistrationEventController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    
    /**
     * @Route("/registration-event", name="app_registration_event")
     */
    public function index(EventService $eventService): Response
    {
        // On récupére l'utilisateur connecté
        $user = $this->security->getUser();
        //On cherche son identitiant
        $userId= $user->getId();
        //On trasmet au service l'id
        $eventData = $eventService->findAllEvents();

        return $this->render('registration_event/index.html.twig', [
            'controller_name' => 'RegistrationEventController',
            'eventData' => $eventData,
        ]);
    }
}
