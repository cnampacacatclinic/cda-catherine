<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ArticleService;
use App\Service\UserService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class ManagementOtherPeopleContentController extends AbstractController
{
    /**
     * @Route("/management-other-people-content", name="app_management_other_people_content")
     */
    public function index(VisitService $visitService,ArticleService $articleService, UserService $userService): Response
    {
        $articleSupp ='';
        $authors = $userService->findAllUsers();
        $articleData = $articleService->findOneArticleByFkPage(5);

        $visitService->visitCookie(); /* Pour les stat et le cookie */

        if(!empty($_GET['supp'])){
           $articleService->deleteById($_GET['supp']);
        }
        if (!empty($_GET['active'])) {
            $articleService->toggleActive($_GET['active']);
        }

        return $this->render('management_other_people_content/index.html.twig', [
            'controller_name' => 'Gestion des autres articles',
            'articleData'=>$articleData,
            'authors'=>$authors,
        ]);
    }
}
