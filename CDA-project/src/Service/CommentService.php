<?php

namespace App\Service;

use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;

class CommentService
{
    private $articleRepository;
    private $commentRepository;
    private $id;

    public function __construct(ArticleRepository $articleRepository, CommentRepository $commentRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->commentRepository = $commentRepository;
    }

    public function findAllComments()
    {
        return $this->commentRepository->findAll();
    }

    public function findCommentByArticleId($id)
    {
        return $this->commentRepository->findBy(['fkArticle' => $id]);
    }
}