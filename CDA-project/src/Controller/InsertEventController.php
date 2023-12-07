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


class InsertEventController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    
    /**
     * @Route("/insertevent", name="app_insert_event")
     */
    public function createEvent(Request $request): Response
    {

        $event = new Event();

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
