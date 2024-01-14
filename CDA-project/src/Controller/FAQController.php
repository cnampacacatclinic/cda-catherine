<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class FAQController extends AbstractController
{
    /**
     * @Route("/faq", name="app_faq")
     */
    public function index(VisitService $visitService,PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(4);
        $articleData = $articleService->findOneArticleByFkPageActive(4);
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('faq/index.html.twig', [
            'controller_name' => 'FAQ',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
