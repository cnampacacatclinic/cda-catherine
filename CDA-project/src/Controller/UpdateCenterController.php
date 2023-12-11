<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Center;
use App\Entity\Phone;
use App\Entity\PhoneType;
use App\Service\PhoneTypeService;
use App\Service\PhoneService;
use App\Form\UpdateCenterType;
use Doctrine\ORM\EntityManagerInterface;

class UpdateCenterController extends AbstractController
{
    private $phoneTypeService;
    private $centerService;
    private $phoneService;

    public function __construct(PhoneTypeService $phoneTypeService,PhoneService $phoneService)
    {
        $this->phoneTypeService = $phoneTypeService;
        $this->phoneService = $phoneService;
    }
    
    /**
     * @Route("/update-center", name="app_update_center")
     */
    public function index(Request $request,PhoneTypeService $phoneTypeService,PhoneService $phoneService): Response
    {

        if (empty($_GET['modif'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page404Controller',
            ]);
        }else{

            $entityManager = $this->getDoctrine()->getManager();
            $center = $entityManager->getRepository(Center::class)->find($_GET['modif']);
                $form = $this->createForm(UpdateCenterType::class, $center, [
                    'entityManager' => $entityManager,
                ]);

                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $entityManager->flush();
                    return $this->redirectToRoute('app_update_center', ['modif' => $_GET['modif']]);
                }

                $phonesForCenter = $phoneService->findAllPhones();
                $phoneTypes = $this->phoneTypeService->findAllTypePhoneOrderedByName();

                return $this->render('form_contact/index.html.twig', [
                    'controller_name' => 'UpdateCenterController',
                    'form' => $form->createView(),
                    'phoneData' => $phonesForCenter,
                    'phoneTypes' => $phoneTypes,
                ]);
        }
    }
}
