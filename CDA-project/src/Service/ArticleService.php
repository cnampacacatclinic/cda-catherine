<?php

namespace App\Service;

use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;

class ArticleService
{
    private $articleRepository;
    private $commentRepository;
    private $id;
    private $idPage;
    private $i;
    private $word;

    public function __construct(ArticleRepository $articleRepository, CommentRepository $commentRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->commentRepository = $commentRepository;
    }

    public function findAllArticles()
    {
        return $this->articleRepository->findAll();
    }

    public function findOneArticle($id)
    {
        return $this->articleRepository->findBy(['id' => $id]);
    }

    public function findByAuthor($id)
    {
        return $this->articleRepository->findBy(['fkUser' => $id]);
    }

    public function findOneArticleByFkPageActive($idPage)
    {
        return $this->articleRepository->findBy(['fkPage' => $idPage, 'active' => 1]);
    }

    public function findOneArticleByFkPage($idPage)
    {
        return $this->articleRepository->findBy(['fkPage' => $idPage]);
    }

    public function findActiveArticles()
    {
        return $this->articleRepository->findBy(['active' => 1]);
    }

    public function findNotActiveArticles()
    {
        return $this->articleRepository->findBy(['active' => 0]);
    }

    public function findLastNews($i,$id){
        return $this->articleRepository->findLatestArticles($i,$id);
    }

    public function findWordA($word){
        return $this->articleRepository->findByActiveAndLikeWord($word);
    }

    public function deleteById($id)
    {
        // Tout d'abord, pour des raisons de contraintes au niveau de la BDD,
        // on doit supprimer les commentaires liés à cet article
        $article = $this->articleRepository->find($id);

        if ($article) {
            $this->commentRepository->deleteByFkArticle($article);
            
            //On supprime l'article
            return $this->articleRepository->delete($article);
        }

        return false; //si l'article n'a pas été trouvé
    }

    public function toggleActive($id)
    {
        $article = $this->articleRepository->find($id);

        if ($article) {
            // Mettre à jour la valeur de 'active' en fonction de sa valeur actuelle
            $article->setActive($article->isActive() == 0 ? 1 : 0);

            // Enregistrer les modifications dans la base de données
            $this->articleRepository->save($article);

            return $article;
        }

        return null; // si l'article n'a pas été trouvé
    }

    
}