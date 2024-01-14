<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class AboutController extends AbstractController
{

    /**
     * @Route("/about", name="app_about")
     */
    public function index(VisitService $visitService,PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(2);
        $articleData = $articleService->findOneArticleByFkPageActive(2);

        $visitService->visitCookie(); /* Pour les stat et le cookie */
        
        return $this->render('about/index.html.twig', [
            'controller_name' => 'About',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
