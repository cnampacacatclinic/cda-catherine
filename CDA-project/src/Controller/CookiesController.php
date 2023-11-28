<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;

class CookiesController extends AbstractController
{
    /**
     * @Route("/cookies", name="app_cookies")
     */
    public function index(PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(9);
        $articleData = $articleService->findOneArticleByFkPage(9);

        return $this->render('cookies/index.html.twig', [
            'controller_name' => 'CookiesController',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
