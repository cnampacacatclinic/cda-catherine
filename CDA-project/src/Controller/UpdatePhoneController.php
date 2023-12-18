<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Phone;
use App\Entity\PhoneType;
use App\Entity\Center;
use App\Form\UpdatePhoneType;
use App\Service\PhoneTypeService;
use App\Service\PhoneService;

class UpdatePhoneController extends AbstractController
{
    private $doctrine;
    private $phoneTypeService;
    private $phoneService;

    public function __construct(ManagerRegistry $doctrine, PhoneTypeService $phoneTypeService, PhoneService $phoneService)
    {
        $this->doctrine = $doctrine;
        $this->phoneTypeService = $phoneTypeService;
        $this->phoneService = $phoneService;
    }

    /**
     * @Route("/update-phone", name="app_update_phone")
     */
    public function index(Request $request): Response
    {
        
        if (!empty($_GET['supp'])) {
            $this->phoneService->deleteById($_GET['supp']);
            return $this->redirectToRoute('app_update_center', ['modif' => $_GET['modif']]);
        }else {
            $entityManager = $this->getDoctrine()->getManager();
            $phone = $entityManager->getRepository(Phone::class)->find($_GET['modif']);

            if (!$phone) {
                throw $this->createNotFoundException('No phone found for id ' . $_GET['modif']);
            }

            $form = $this->createForm(UpdatePhoneType::class, $phone, [
                'entityManager' => $entityManager,
            ]);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();
                return $this->redirectToRoute('app_update_phone', ['modif' => $_GET['modif']]);
            }

            return $this->render('form_phone/index.html.twig', [
                'controller_name' => 'UpdatePhoneController',
                'form' => $form->createView(),
            ]);
        }
    }
}