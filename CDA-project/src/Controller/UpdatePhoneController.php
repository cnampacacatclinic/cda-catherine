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
use App\Service\VisitService;/* Pour les stat et le cookie */

class UpdatePhoneController extends AbstractController
{
    private $doctrine;
    private $phoneTypeService;
    private $phoneService;
    private $visitService;

    public function __construct(ManagerRegistry $doctrine, PhoneTypeService $phoneTypeService, PhoneService $phoneService,VisitService $visitService)
    {
        $this->doctrine = $doctrine;
        $this->phoneTypeService = $phoneTypeService;
        $this->phoneService = $phoneService;
        $this->visitService = $visitService;
    }

    /**
     * @Route("/update-phone", name="app_update_phone")
     */
    public function index(Request $request): Response
    {
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
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