<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Service\VisitService;/* Pour les stat et le cookie */

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function index(VisitService $visitService): Response
    {
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        
        return $this->render('user/index.html.twig', [
            'controller_name' => 'User',
        ]);
    }
}
