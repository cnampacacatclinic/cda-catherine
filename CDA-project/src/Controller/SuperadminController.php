<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UserService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class SuperadminController extends AbstractController
{
    /**
     * @Route("/superadmin", name="app_superadmin")
     */
    public function index(UserService $userService,VisitService $visitService): Response
    {
        $userData = $userService->findAllUsers();
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        return $this->render('superadmin/index.html.twig', [
            'controller_name' => 'SuperadminController',
            'userData'=>$userData,
        ]);
    }
}
