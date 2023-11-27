<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;

class FAQController extends AbstractController
{
    /**
     * @Route("/faq", name="app_faq")
     */
    public function index(PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(4);
        $articleData = $articleService->findOneArticleByFkPage(4);
        
        return $this->render('faq/index.html.twig', [
            'controller_name' => 'FAQController',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
