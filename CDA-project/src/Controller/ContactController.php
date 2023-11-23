<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;
use App\Repository\CenterRepository;
use App\Entity\Center;
use App\Repository\PhoneRepository;
use App\Entity\Phone;
use App\Repository\PhoneTypeRepository;
use App\Entity\PhoneType;

class ContactController extends AbstractController
{

    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(ArticleRepository $articleRepository, CenterRepository $centerRepository, PhoneRepository $phoneRepository, PhoneTypeRepository $phoneTypeR): Response
    {
        $articleContacts = $articleRepository->findBy(['id' => 3]);
        $centers = $centerRepository->findAll();
        $phones = $phoneRepository->findAll();
        $typeOfPhone = $phoneTypeR->findAll();

        return $this->render('contact/index.html.twig', [
            'articlecontacts' => $articleContacts,
            'centers' => $centers,
            'phones' => $phones,
            'typeOfPhone' => $typeOfPhone,
        ]);
    }/**/
   
}
