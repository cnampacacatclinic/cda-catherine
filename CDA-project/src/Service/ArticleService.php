<?php

namespace App\Service;

use App\Repository\ArticleRepository;

class ArticleService
{
    private $articleRepository;
    private $id;
    private $idPage;
    private $i;
    private $word;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function findAllArticles()
    {
        return $this->articleRepository->findAll();
    }

    public function findOneArticle($id)
    {
        return $this->articleRepository->findBy(['id' => $id]);
    }

    public function findOneArticleByFkPage($idPage)
    {
        return $this->articleRepository->findBy(['fkPage' => $idPage, 'active' => 1]);
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
}