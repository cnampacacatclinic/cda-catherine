<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Form\UpdateContentType;
use Doctrine\ORM\EntityManagerInterface;

class UpdateArticleController extends AbstractController
{
    /**
     * @Route("/update-article", name="app_update_article")
     */
    public function yourAction(Request $request): Response
    {

        if (empty($_GET['modif'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page404Controller',
            ]);
        }else{
            
            $entityManager = $this->getDoctrine()->getManager();
            $article = $entityManager->getRepository(Article::class)->find($_GET['modif']);
                $form = $this->createForm(UpdateContentType::class, $article, [
                    'entityManager' => $entityManager,
                ]);

                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $entityManager->flush();
                    return $this->redirectToRoute('app_update_article', ['modif' => $_GET['modif']]);
                }

                return $this->render('form_article/index.html.twig', [
                    'controller_name' => 'UpdateArticleController',
                    'form' => $form->createView(),
                ]);
        }
    }
}
