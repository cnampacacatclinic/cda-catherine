<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;
use App\Service\PageService;
use App\Service\ArticleService;

class EventsController extends AbstractController
{
    /**
     * @Route("/events", name="app_events")
     */
    public function index(EventService $eventService, PageService $pageService, ArticleService $articleService): Response
    {
        
        $pageData = $pageService->findOnePage(2);
        $articleData = $articleService->findOneArticleByFkPage(2);
        $eventData = $eventService->findActiveEvents();

        return $this->render('events/index.html.twig', [
            'pageData' => $pageData,
            'articleData'=>$articleData,
            'eventData'=>$eventData,
        ]);

    }

}