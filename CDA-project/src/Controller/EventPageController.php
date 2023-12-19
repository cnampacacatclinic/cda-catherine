<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;
use Symfony\Component\Security\Core\Security;
use App\Service\VisitService;/* Pour les stat et le cookie */

class EventPageController extends AbstractController
{
    private $security;
    private $visitService;

    public function __construct(Security $security,VisitService $visitService)
    {
        $this->security = $security;
        $this->visitService = $visitService;
    }

    /**
     * @Route("/event", name="app_event_page")
     */
    public function index(EventService $eventService): Response
    {
        $user = $this->security->getUser();
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
        if (empty($_GET['e'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page 404',
            ]);
        }
        else{
            $eventId = $_GET['e'];

            $event = $eventService->findOneEvent($eventId);

            if (!empty($_GET['x'])) {
                //on cherche l'id de l'utilisateur
                $userId = $user->getId();
                // on enregistre la donnée dans la BDD pour inscrire l'utilisateur
                $eventService->registrationUserEvent($userId, $eventId);
            }

            return $this->render('event_page/index.html.twig', [
                'controller_name' => 'Événement',
                'eventData' => $event,
            ]);
        }
    }
}
