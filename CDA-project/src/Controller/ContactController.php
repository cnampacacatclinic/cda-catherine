<?php

namespace App\Controller;

use App\Service\CenterService;
use App\Service\ArticleService;
use App\Service\PhoneService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private $centerid=0;
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(CenterService $centerService, ArticleService $articleService, PhoneService $phoneService): Response
    {
        $centerData = $centerService->findAllCenters();
        $articleData = $articleService->findOneArticle(3);
        //$centerId = $centerData.getId();
        $phonesForCenter = $phoneService->findPhonesByCenterIdOrderedByType(2);


        return $this->render('contact/index.html.twig', [
            'centerData' => $centerData,
            'articleData'=>$articleData,
            'phonesForCenter' => $phonesForCenter,
        ]);
    }
}
