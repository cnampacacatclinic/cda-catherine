<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\InsertCommentType;
use App\Service\ArticleService;
use App\Service\UserService;
use App\Service\PageService;
use App\Service\CommentService;
use App\Entity\Comment;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Security\Core\Security;//pour obtenir l'id de l'utilisateur connecté

class ArticleController extends AbstractController
{
    private $doctrine;
    private $security;
    private $articleRepository;

    public function __construct(ManagerRegistry $doctrine,Security $security)
    {
        $this->doctrine = $doctrine;
        $this->security = $security;
    }
    
    /**
     * @Route("/article", name="app_article")
     */
    public function index(Request $request, CommentService $commentService, ArticleService $articleService, UserService $userService,ArticleRepository $articleRepository): Response
    {
        
        // si on a pas de valeur en get
        if (empty($_GET['a'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page 404',
            ]);
        }
        else{
        
            $articleData = $articleService->findOneArticle($_GET['a']);/* en parametre l'id de l'article' */
            $authors = $userService->findAllUsers();
            $article = $articleRepository->find($_GET['a']);
            $comments= $commentService->findCommentByArticleId($_GET['a']);

            // On récupére l'utilisateur connecté
            $user = $this->security->getUser();
            //on instancie un comment
            $comment = new Comment();
            //On set par défaut l'utilisateur connecté
            $comment->setFkUser($user);
            //On crée une instance avec la date actuelle
            $commentDate = new \DateTime();
            //On utilise la méthode setDateComment avec la date actuelle
            $comment->setDateComment($commentDate);
            //On set la valeur active par defaut à zero;
            $comment->setActive(0);
            //On "set" la clé étrangère de l'article avec la requete en GET
            $comment->setFkArticle($articleRepository->find($_GET['a']));
            //On envoie au formulaire $comment
            $form = $this->createForm(InsertCommentType::class, $comment);
            //On requete
            $form->handleRequest($request);

            //Si le formulaire est soummis et si il est valide
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->doctrine->getManager();
                $entityManager->persist($comment);
                $entityManager->flush();
    
                return $this->redirectToRoute('app_article', ['a' => $_GET['a']]);//On envoie de $_GET['a']
            }


            return $this->render('article/index.html.twig', [
                'controller_name' => 'Article',
                'articleData'=>$articleData,
                'authors'=>$authors,
                'comments' => $comments,
                'form' => $form->createView(),
                
            ]);
        }
    }
    
}
