<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\Page;
use Symfony\Component\Security\Core\Security;//pour obtenir l'id de l'utilisateur connecté
use App\Service\PageService;
use App\Service\ArticleService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class ManagementPageController extends AbstractController
{
    /**
     * @Route("/management-page", name="app_management_page")
     */
    public function index(VisitService $visitService,PageService $pageService,ArticleService $articleService): Response
    {
        $pageData = $pageService->findAllPages();
        $articleData = $articleService->findAllArticles();

        $visitService->visitCookie(); /* Pour les stat et le cookie */

        return $this->render('management_page/index.html.twig', [
            'controller_name' => 'GestionPages',
            'pageData'=>$pageData,
            'articleData'=>$articleData,
        ]);
    }
}
