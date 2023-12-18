<?php

namespace App\Service;

use App\Repository\CenterRepository;
use App\Repository\PhoneRepository;

class CenterService
{
    private $centerRepository;
    private $phoneRepository;
    private int $id=0;
    private int $centerId=0;

    public function __construct(CenterRepository $centerRepository,PhoneRepository $phoneRepository)
    {
        $this->centerRepository = $centerRepository;
        $this->phoneRepository = $phoneRepository;
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