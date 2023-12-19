<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EventService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="app_search")
     */
    public function index(EventService $eventService, ArticleService $articleService): Response
    {
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
        
        // si on a pas de valeur en get
        if (empty($_GET['word'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page 404',
            ]);
        }
        else{
            $articleSearch = $articleService->findWordA($_GET['word']);
            $eventSearch = $eventService->findWordE($_GET['word']);
            
            return $this->render('search/index.html.twig', [
                'controller_name' => 'Recherche',
                'eventSearch' => $eventSearch,
                'articleSearch'=>$articleSearch,
            ]);
        }
    }
}
