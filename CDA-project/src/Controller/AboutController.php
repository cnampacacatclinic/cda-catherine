<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="app_about")
     */
    public function index(PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(2);
        $articleData = $articleService->findOneArticleByFkPage(2);
        
        return $this->render('about/index.html.twig', [
            'controller_name' => 'About',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
