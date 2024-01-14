<?php

namespace App\Service;

use App\Repository\PageRepository;


class PageService
{
    private $pageRepository;
    private $id;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function findAllPages()
    {
        return $this->pageRepository->findAll();
    }
    public function findOnePage($id)
    {
        return $this->pageRepository->findBy(['id' => $id]);
    }

}