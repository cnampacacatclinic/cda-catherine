<?php

namespace App\Service;

use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;

class CommentService
{
    private $articleRepository;
    private $commentRepository;
    private int $id=0;

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

    public function toggleActive($id)
    {
        $comment = $this->commentRepository->find($id);

        if ($comment) {
            //On Inverse la valeur
            $newActiveState = $comment->getActive();
            if ($newActiveState==0){
                $comment->setActive(1);
            }else{
                $comment->setActive(0);
            }
            return $this->commentRepository->save($comment);
        }

        return null; //Si le commentaire n'a pas été trouvé
    }

    public function deleteById($id)
    {    
        return $this->commentRepository->delete($id);
    }
}