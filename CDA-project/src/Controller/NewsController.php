<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="app_news")
     */
    public function index(VisitService $visitService,PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(5);
        $articleData = $articleService->findOneArticleByFkPageActive(5);
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('news/index.html.twig', [
            'controller_name' => 'News',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
