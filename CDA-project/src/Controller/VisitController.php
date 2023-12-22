<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Visit;
use App\Service\VisitService;

class VisitController extends AbstractController
{
    
    private $visitService;

    public function __construct(VisitService $visitService)
    {
        $this->visitService = $visitService;
    }
    
    
    /**
     * @Route("/visit", name="app_visit")
     */
    public function index(): Response
    {
        $this->visitService->visitCookie();
        $visitData=$this->visitService->findAllVisits();

        if(!empty($_GET['supp']) && $_GET['supp']==1){
            $this->visitService->deleteData2M();

            return $this->redirectToRoute('app_visit');
            $this->addFlash('Les visites plus anciennes de 2 mois ont été supprimées avec succès.');
        }

        return $this->render('visit/index.html.twig', [
            'controller_name' => 'VisitController',
            'visitData' => $visitData,
        ]);
    }
}
