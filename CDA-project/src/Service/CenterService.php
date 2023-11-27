<?php

namespace App\Service;

use App\Repository\CenterRepository;

class CenterService
{
    private $centerRepository;
    private $idCenter;

    public function __construct(CenterRepository $centerRepository)
    {
        $this->centerRepository = $centerRepository;
    }

    public function findAllCenters()
    {
        return $this->centerRepository->findAll();
    }
}