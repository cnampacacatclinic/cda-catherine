<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UserService;

class SuperadminController extends AbstractController
{
    /**
     * @Route("/superadmin", name="app_superadmin")
     */
    public function index(UserService $userService): Response
    {
        $userData = $userService->findAllUsers();
        
        return $this->render('superadmin/index.html.twig', [
            'controller_name' => 'SuperadminController',
            'userData'=>$userData,
        ]);
    }
}
