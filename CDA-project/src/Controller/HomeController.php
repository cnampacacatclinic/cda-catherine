<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class HomeController extends AbstractController
{
        

        /**
         * @Route("/", name="app_home")
         */
        public function index(VisitService $visitService, PageService $pageService, ArticleService $articleService): Response
        {
            $visitService->visitCookie(); /* Pour les stat et le cookie */
            
            $pageData = $pageService->findOnePage(1);/* en parametre l'id de la page */
            $articleData = $articleService->findOneArticleByFkPageActive(1);/* en parametre l'id de la page */
            $lastNews = $articleService->findLastNews(3,5);/* en parametre : le nombre d'articles souhaités et l'id des articles de la page News*/
            $livreDOr = $articleService->findOneArticleByFkPageActive(8);/*on recherche les articles du livre d'or */
        
        
            {
            return $this->render('home/index.html.twig', [
                'controller_name' => 'Asso Animal',
                'pageData' => $pageData,
                'articleData'=>$articleData,
                'lastNews'=>$lastNews,
                'livreDOr'=>$livreDOr,
            ]);
        }
    }
}