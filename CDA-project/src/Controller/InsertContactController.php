<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;//à ajouter pour les fomulaires
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Center;
use App\Form\InsertContactType;

class InsertContactController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine) {
        $this->doctrine = $doctrine;
    }

    /**
     * @Route("/insertcontact", name="app_insert_contact")
     */
    public function createContact(Request $request): Response
    {
        $contact = new Center();
        $form = $this->createForm(InsertContactType::class, $contact);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            return $this->redirectToRoute('app_insert_contact');
        }


        return $this->render('form_contact/index.html.twig', [
            'controller_name' => 'InsertContactController',
            'form' => $form->createView(),
        ]);
    }
}
