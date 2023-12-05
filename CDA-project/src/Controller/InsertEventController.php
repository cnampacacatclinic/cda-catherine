<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use App\Form\InsertEventType;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Page;
use App\Form\InsertContentType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;//pour obtenir l'id de l'utilisateur connecté


class InsertEventController extends AbstractController
{
    private $doctrine;
    private $security;

    public function __construct(ManagerRegistry $doctrine,Security $security)
    {
        $this->doctrine = $doctrine;
        $this->security = $security;
    }
    
    /**
     * @Route("/insertevent", name="app_insert_event")
     */
    public function createEvent(Request $request): Response
    {
        // On récupére l'utilisateur connecté
        $user = $this->security->getUser();

        $event = new Event();
        $event->addUser($user);
        //$fkEvent=$this->event->getEvent();
        //$user->addFKEvent($fkEvent);

        $form = $this->createForm(InsertEventType::class, $event);
        

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_insert_event');
        }

        return $this->render('insert_event/index.html.twig', [
            'controller_name' => 'InsertEventController',
            'form' => $form->createView(),
        ]);
    }
}
