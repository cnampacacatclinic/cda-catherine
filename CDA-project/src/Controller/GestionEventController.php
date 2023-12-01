<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;
use App\Service\PageService;

class GestionEventController extends AbstractController
{
    /**
     * @Route("/gestionevent", name="app_gestion_event")
     */
    public function index(EventService $eventService, PageService $pageService): Response
    {
        $pageData = $pageService->findOnePage(7);
        $eventData = $eventService->findAllEvents();
        
        return $this->render('gestion_event/index.html.twig', [
            'controller_name' => 'GestionEventController',
            'eventData'=>$eventData,
            'pageData' => $pageData,
        ]);
    }
}
