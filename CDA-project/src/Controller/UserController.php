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
use App\Form\UserInfoType;
use Symfony\Component\Security\Core\Security;//pour obtenir l'id de l'utilisateur connecté

class UserController extends AbstractController
{
    private $doctrine;
    private $userService;
    private $visitService;
    private $bibiConnexionService;

    public function __construct(Security $security,BibiConnexionService $bibiConnexionService, ManagerRegistry $doctrine, UserService $userService, VisitService $visitService)
    {
        $this->doctrine = $doctrine;
        $this->userService = $userService;
        $this->visitService = $visitService;
        $this->bibiConnexionService = $bibiConnexionService;
        $this->security = $security;
    }
    
    
    /**
     * @Route("/user", name="app_user")
     */
    public function index(Request $request): Response
    {
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
        $user = new User();
        // On récupére l'utilisateur connecté
        $moi = $this->security->getUser();
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->find($moi);


        $form = $this->createForm(UserInfoType::class, $user);
        $form->handleRequest($request);

         /* TODO encrypter dans la class ManagementUserType */
                // Utilise la méthode crypterMotDePasse ici
                //$plainPassword = $form->get('password')->getData();
                //$encryptedPassword = $this->bibiConnexionService->crypterMotDePasse($user, $plainPassword);
            
                // Enregistre le mot de passe crypté dans votre entité User
                //$user->setPassword($encryptedPassword);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user');
        }
        
        return $this->render('user/index.html.twig', [
            'controller_name' => 'User',
            'form' => $form->createView(),
        ]);
    }
}