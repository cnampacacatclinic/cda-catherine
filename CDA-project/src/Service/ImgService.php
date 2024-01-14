<?php

namespace App\Service;

use App\Repository\ImgRepository;


class ImgService
{
    private $imgRepository;
    private $id;

    public function __construct(ImgRepository $imgRepository)
    {
        $this->imgRepository = $imgRepository;
    }

    public function findAllImg()
    {
        return $this->imgRepository->findAll();
    }
    public function findOneImg($id)
    {
        return $this->imgRepository->findBy(['id' => $id]);
    }

}