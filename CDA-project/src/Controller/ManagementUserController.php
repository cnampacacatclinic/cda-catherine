<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Service\UserService;
use App\Service\VisitService;
use App\Service\BibiConnexionService;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\ManagementUserType;

class ManagementUserController extends AbstractController
{
    private $doctrine;
    private $userService;
    private $visitService;
    private $bibiConnexionService;

    public function __construct(BibiConnexionService $bibiConnexionService, ManagerRegistry $doctrine, UserService $userService, VisitService $visitService)
    {
        $this->doctrine = $doctrine;
        $this->userService = $userService;
        $this->visitService = $visitService;
        $this->bibiConnexionService = $bibiConnexionService;
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
            $userRepository = $this->getDoctrine()->getRepository(User::class);
            $user = $userRepository->find($_GET['modif']);

            if ($user) {
                $form = $this->createForm(ManagementUserType::class, $user);
                $form->handleRequest($request);
            
             /*   // Utiliser la méthode crypterMotDePasse ici
                $plainPassword = $form->get('password')->getData();
                $encryptedPassword = $this->bibiConnexionService->crypterMotDePasse($user, $plainPassword);
            
                // Enregistrez le mot de passe crypté dans votre entité User
                $user->setPassword($encryptedPassword);*/
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
