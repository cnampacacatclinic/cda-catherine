<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionCentreController extends AbstractController
{
    /**
     * @Route("/gestion-centre", name="app_gestion_centre")
     */
    public function index(): Response
    {
        return $this->render('gestion_centre/index.html.twig', [
            'controller_name' => 'GestionCentreController',
        ]);
    }
}
