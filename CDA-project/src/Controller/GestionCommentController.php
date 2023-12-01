<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionCommentController extends AbstractController
{
    /**
     * @Route("/gestioncomment", name="app_gestion_comment")
     */
    public function index(): Response
    {
        return $this->render('gestion_comment/index.html.twig', [
            'controller_name' => 'GestionCommentController',
        ]);
    }
}
