<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ArticleService;
use App\Service\UserService;
use App\Service\PageService;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(PageService $pageService, ArticleService $articleService, UserService $userService): Response
    {
        $authors = $userService->findAllUsers();
        $pageData = $pageService->findOnePage(5);
        $articleData = $articleService->findOneArticleByFkPage(5);
        $articleSupp ='';
        if(!empty($_GET['supp'])){
            $articleService->deleteById($_GET['supp']);
        }
        //Si GET 'active'
        if (!empty($_GET['active'])) {

            //On change la valeur de active
            $articleService->toggleActive($_GET['active']);
        }

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'articleData'=>$articleData,
            'authors'=>$authors,
            /*'pageData' => $pageData,*/
        ]);
    }
}
