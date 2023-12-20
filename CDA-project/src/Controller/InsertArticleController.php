<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\Page;
use App\Form\InsertContentType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;//pour obtenir l'id de l'utilisateur connecté
use App\Service\VisitService;/* Pour les stat et le cookie */

class InsertArticleController extends AbstractController
{
    private $doctrine;
    private $security;
    private $visitService;

    public function __construct(ManagerRegistry $doctrine,Security $security,VisitService $visitService)
    {
        $this->doctrine = $doctrine;
        $this->security = $security;
        $this->visitService = $visitService;
    }

    /**
     * @Route("/insert-article", name="app_insert_article")
     */
    public function createArticle(Request $request): Response
    {
        // On récupére l'utilisateur connecté
        $user = $this->security->getUser();
        
        $article = new Article();
        $article->setFkUser($user);
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
        // Set la valeur par défaut pour la page dont l'id est 5
        $article->setFkPage($this->doctrine->getManager()->getRepository(Page::class)->find(5));

        $form = $this->createForm(InsertContentType::class, $article);

        if (!empty($_GET['modif'])) {
            $article->getId($_GET['modif']);
            $form->setData($article);
         }
        

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_insert_article');
        }

        return $this->render('form_article/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
