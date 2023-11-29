<?php

namespace App\Controller;

use App\DTO\CenterDTO;
use App\Service\CenterService;
use App\Service\ArticleService;
use App\Service\PhoneService;
use App\Service\PhoneTypeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private $centerid=0;
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(PhoneTypeService $phoneTypeService, CenterService $centerService, ArticleService $articleService, PhoneService $phoneService, CenterDTO $centerDTO): Response
    {
        $centerData = $centerService->findAllCenters();
        $articleData = $articleService->findOneArticle(3);
        $phonesForCenter1 = $phoneService->findPhonesByCenterIdOrderedByType($centerDTO->getId());
        $phonesForCenter2 = $phoneService->findAllPhones();
        $phoneTypes = $phoneTypeService->findAllTypePhoneOrderedByName();


        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Contact',
            'centerData' => $centerData,
            'articleData'=>$articleData,
            'phonesForCenter' => $phonesForCenter2,
            'phoneTypes' => $phoneTypes,
        ]);
    }
}
