<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class CookiesController extends AbstractController
{
    /**
     * @Route("/cookies", name="app_cookies")
     */
    public function index(VisitService $visitService,PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(9);
        $articleData = $articleService->findOneArticleByFkPageActive(9);
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('cookies/index.html.twig', [
            'controller_name' => 'Cookies',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
