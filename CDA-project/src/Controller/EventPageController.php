<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;

class EventPageController extends AbstractController
{
    /**
     * @Route("/event", name="app_event_page")
     */
    public function index(EventService $eventService): Response
    {
         // si on a pas de valeur en get
         if (empty($_GET['e'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page404Controller',
            ]);
        }
        else{
            $eventData = $eventService->findOneEvent($_GET['e']);/* en parametre l'id de l'event' */

            return $this->render('event_page/index.html.twig', [
                'eventData'=>$eventData,
            ]);

        }
    }

}