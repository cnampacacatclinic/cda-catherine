<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;//à ajouter pour les fomulaires
use App\Form\InsertPhoneType;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Phone;
use App\Entity\PhoneType;
//use App\Entity\Center;
use App\Service\PhoneTypeService;

class InsertPhoneController extends AbstractController
{
    private $doctrine;
    private $phoneTypeService;

    public function __construct(ManagerRegistry $doctrine,PhoneTypeService $phoneTypeService) {
        $this->doctrine = $doctrine;
        $this->phoneTypeService = $phoneTypeService;
    }
    
    /**
     * @Route("/insertphone", name="app_insert_phone")
     */
    public function createPhone(Request $request): Response
    {
        //On va devoir afficher la liste des types de telephone
        $phoneTypes = $this->phoneTypeService->findAllTypePhoneOrderedByName();
        
        $phone= new Phone();

        $form = $this->createForm(InsertPhoneType::class, $phone);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($phone);
            $entityManager->flush();
            return $this->redirectToRoute('app_insert_phone');
        }

        
        return $this->render('form_phone/index.html.twig', [
            'controller_name' => 'InsertPhoneController',
            'form'=> $form->createView(),
            'phoneTypes' => $phoneTypes,
        ]);
    }
}
