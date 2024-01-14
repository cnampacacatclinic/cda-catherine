<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CommentService;
use App\Service\UserService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class GestionCommentController extends AbstractController
{
    /**
     * @Route("/gestioncomment", name="app_gestion_comment")
     */
    public function index(VisitService $visitService,CommentService $commentService,UserService $userService): Response
    {
        $comments= $commentService->findAllComments();
        $users= $userService->findAllUsers();
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        if (!empty($_GET['active'])) {
            $commentService->toggleActive($_GET['active']);
        }
        if(!empty($_GET['supp'])){
            $commentService->deleteById($_GET['supp']);
        }
        return $this->render('gestion_comment/index.html.twig', [
            'controller_name' => 'GestionCommentController',
            'comments' => $comments,
            'users' => $users,
        ]);
    }
}
