<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;

class MentionslegalesController extends AbstractController
{
    /**
     * @Route("/mentionslegales", name="app_mentionslegales")
     */
    public function index(PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(11);
        $articleData = $articleService->findOneArticleByFkPage(11);
        
        return $this->render('mentionslegales/index.html.twig', [
            'controller_name' => 'Legales',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
