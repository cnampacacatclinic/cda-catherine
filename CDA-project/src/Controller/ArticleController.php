<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ArticleService;
use App\Service\UserService;
use App\Service\PageService;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="app_article")
     */
    public function index(ArticleService $articleService, UserService $userService): Response
    {
        
        // si on a pas de valeur en get
        if (empty($_GET['a'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page404Controller',
            ]);
        }
        else{
        
            $articleData = $articleService->findOneArticle($_GET['a']);/* en parametre l'id de l'article' */
            $authors = $userService->findAllUsers();

            return $this->render('article/index.html.twig', [
                'controller_name' => 'Article',
                'articleData'=>$articleData,
                'authors'=>$authors,
                
            ]);
        }
    }
}
