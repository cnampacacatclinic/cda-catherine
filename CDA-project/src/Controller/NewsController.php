<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="app_news")
     */
    public function index(PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(5);
        $articleData = $articleService->findOneArticleByFkPage(5);
        
        return $this->render('news/index.html.twig', [
            'controller_name' => 'News',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
