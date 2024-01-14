<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class EventsController extends AbstractController
{
    /**
     * @Route("/events", name="app_events")
     */
    public function index(VisitService $visitService,EventService $eventService, PageService $pageService, ArticleService $articleService): Response
    {
        
        $pageData = $pageService->findOnePage(7);
        $articleData = $articleService->findOneArticleByFkPageActive(7);
        $eventData = $eventService->findActiveEvents();
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('events/index.html.twig', [
            'controller_name' => 'Les événements',
            'pageData' => $pageData,
            'articleData'=>$articleData,
            'eventData'=>$eventData,
        ]);

    }

}