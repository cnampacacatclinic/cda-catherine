<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\DTO\CenterDTO;
use App\Service\CenterService;
use App\Service\ArticleService;
use App\Service\PhoneService;
use App\Service\PhoneTypeService;
use App\Service\VisitService;/* Pour les stat et le cookie */

class GestionCentreController extends AbstractController
{
    /**
     * @Route("/gestion-centre", name="app_gestion_centre")
     */
    public function index(VisitService $visitService,PhoneTypeService $phoneTypeService, CenterService $centerService, ArticleService $articleService, PhoneService $phoneService, CenterDTO $centerDTO): Response
    {
        
        $centerData = $centerService->findAllCenters();
        $articleData = $articleService->findOneArticle(3);
        $phonesForCenter1 = $phoneService->findPhonesByCenterIdOrderedByType($centerDTO->getId());
        $phonesForCenter2 = $phoneService->findAllPhones();
        $phoneTypes = $phoneTypeService->findAllTypePhoneOrderedByName();
        $visitService->visitCookie(); /* Pour les stat et le cookie */
        if(!empty($_GET['supp'])){
            $centerService->deleteById($_GET['supp']);
        }
        
        return $this->render('gestion_centre/index.html.twig', [
            'controller_name' => 'GestionCentreController',
            'controller_name' => 'Contact',
            'centerData' => $centerData,
            'articleData'=>$articleData,
            'phonesForCenter' => $phonesForCenter2,
            'phoneTypes' => $phoneTypes,
        ]);
    }
}
