<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ArticleService;
use App\Service\UserService;

class ManagementOtherPeopleContentController extends AbstractController
{
    /**
     * @Route("/management-other-people-content", name="app_management_other_people_content")
     */
    public function index(ArticleService $articleService, UserService $userService): Response
    {
        $articleSupp ='';
        $authors = $userService->findAllUsers();
        $articleData = $articleService->findOneArticleByFkPage(5);
        if(!empty($_GET['supp'])){
           $articleService->deleteById($_GET['supp']);
        }
        if (!empty($_GET['active'])) {
            $articleService->toggleActive($_GET['active']);
        }

        return $this->render('management_other_people_content/index.html.twig', [
            'controller_name' => 'Management Other People\'s Content',
            'articleData'=>$articleData,
            'authors'=>$authors,
        ]);
    }
}
