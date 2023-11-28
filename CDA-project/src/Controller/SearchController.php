<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;
use App\Service\ArticleService;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="app_search")
     */
    public function index(EventService $eventService, ArticleService $articleService): Response
    {
        
        $articleSearch = $articleService->findWordA($_GET['word']);
        $eventSearch = $eventService->findWordE($_GET['word']);
        
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
            'eventSearch' => $eventSearch,
            'articleSearch'=>$articleSearch,
        ]);
    }
}
