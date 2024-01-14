<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class AiderController extends AbstractController
{
    /**
     * @Route("/aider", name="app_aider")
     */
    public function index(VisitService $visitService,PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(6);
        $articleData = $articleService->findOneArticleByFkPageActive(6);
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('aider/index.html.twig', [
            'controller_name' => 'Aider',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
