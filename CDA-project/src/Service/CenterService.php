<?php

namespace App\Service;

use App\Repository\CenterRepository;

class CenterService
{
    private $centerRepository;
    private int $id=0;

    public function __construct(CenterRepository $centerRepository)
    {
        $this->centerRepository = $centerRepository;
    }

    public function findAllCenters()
    {
        return $this->centerRepository->findAll();
    }

    public function deleteById($id)
    {    
        return $this->centerRepository->delete($id);
    }
}