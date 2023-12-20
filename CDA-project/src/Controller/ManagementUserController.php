<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Service\UserService;
use App\Service\VisitService;
use Symfony\Component\HttpFoundation\Request;//à ajouter pour les fomulaires
use Doctrine\Persistence\ManagerRegistry;
use App\Form\ManagementUserType;

class ManagementUserController extends AbstractController
{
    private $doctrine;
    private $userService;
    private $visitService;

    public function __construct(ManagerRegistry $doctrine,UserService $userService,VisitService $visitService) {
        $this->doctrine = $doctrine;
        $this->userService = $userService;
        $this->visitService = $visitService;

    }
    
    /**
     * @Route("/management-user", name="app_management_user")
     */
    public function managmentUser(Request $request): Response
    {
        $user = new User();
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
        $form = $this->createForm(ManagementUserType::class, $user);

        if (!empty($_GET['modif'])) {
            // Assuming you have a UserRepository, adjust this line accordingly
            $userRepository = $this->getDoctrine()->getRepository(User::class);
            $user = $userRepository->find($_GET['modif']);

            // Check if the user is found
            if ($user) {
                $form = $this->createForm(ManagementUserType::class, $user);
                $form->handleRequest($request);
            }
        } else {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page 404',
            ]);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_management_user', ['modif' => $_GET['modif']]);
        
        }

        return $this->render('management_user/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
