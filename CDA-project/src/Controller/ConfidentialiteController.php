<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;

class ConfidentialiteController extends AbstractController
{
    /**
     * @Route("/confidentialite", name="app_confidentialite")
     */
    public function index(PageService $pageService, ArticleService $articleService): Response
    {
        
        $pageData = $pageService->findOnePage(10);
        $articleData = $articleService->findOneArticleByFkPageActive(10);
        
        return $this->render('confidentialite/index.html.twig', [
            'controller_name' => 'Confidentialite',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
