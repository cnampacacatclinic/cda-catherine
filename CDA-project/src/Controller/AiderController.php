<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AiderController extends AbstractController
{
    /**
     * @Route("/aider", name="app_aider")
     */
    public function index(): Response
    {
        return $this->render('aider/index.html.twig', [
            'controller_name' => 'AiderController',
        ]);
    }
}
