<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class ConfidentialiteController extends AbstractController
{
    /**
     * @Route("/confidentialite", name="app_confidentialite")
     */
    public function index(VisitService $visitService,PageService $pageService, ArticleService $articleService): Response
    {
        
        $pageData = $pageService->findOnePage(10);
        $articleData = $articleService->findOneArticleByFkPageActive(10);
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('confidentialite/index.html.twig', [
            'controller_name' => 'Confidentialite',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
