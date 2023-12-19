<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class MentionslegalesController extends AbstractController
{
    /**
     * @Route("/mentionslegales", name="app_mentionslegales")
     */
    public function index(VisitService $visitService,PageService $pageService, ArticleService $articleService): Response
    {
        $pageData = $pageService->findOnePage(11);
        $articleData = $articleService->findOneArticleByFkPageActive(11);
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('mentionslegales/index.html.twig', [
            'controller_name' => 'Mentions légales',
            'pageData' => $pageData,
            'articleData'=>$articleData,
        ]);
    }
}
