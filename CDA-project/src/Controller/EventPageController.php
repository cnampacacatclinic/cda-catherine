<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;
use App\Service\PageService;
use App\Service\ArticleService;

class EventPageController extends AbstractController
{
    /**
     * @Route("/events", name="app_event_page")
     */
    public function index(EventService $eventService, PageService $pageService, ArticleService $articleService): Response
    {
        
        $pageData = $pageService->findOnePage(2);
        $articleData = $articleService->findOneArticleByFkPage(2);
        $eventData = $eventService->findActiveEvents();

        return $this->render('event_page/index.html.twig', [
            'pageData' => $pageData,
            'articleData'=>$articleData,
            'enventData'=>$eventData,
        ]);

    }

}