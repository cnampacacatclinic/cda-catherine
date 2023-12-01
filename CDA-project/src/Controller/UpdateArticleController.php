<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateArticleController extends AbstractController
{
    /**
     * @Route("/update/article", name="app_update_article")
     */
    public function index(): Response
    {
        return $this->render('update_article/index.html.twig', [
            'controller_name' => 'UpdateArticleController',
        ]);
    }
}
