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
use App\Service\VisitService;/* Pour les stat et le cookie */

class InsertEventController extends AbstractController
{
    private $doctrine;
    private $visitService;
    
    public function __construct(ManagerRegistry $doctrine,VisitService $visitService)
    {
        $this->doctrine = $doctrine;
        $this->visitService = $visitService;
    }
    
    /**
     * @Route("/insertevent", name="app_insert_event")
     */
    public function createEvent(Request $request): Response
    {
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
        $event = new Event();

        $form = $this->createForm(InsertEventType::class, $event);
        

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_insert_event');
        }

        return $this->render('form_event/index.html.twig', [
            'controller_name' => 'InsertEventController',
            'form' => $form->createView(),
        ]);
    }
}
