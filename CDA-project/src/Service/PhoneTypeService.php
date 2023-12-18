<?php

namespace App\Service;

use App\Repository\PhoneTypeRepository;
use App\DTO\PhoneDTO;

class PhoneTypeService
{
    private $phoneTypeRepository;

    public function __construct(PhoneTypeRepository $phoneTypeRepository)
    {
        $this->phoneTypeRepository = $phoneTypeRepository;
    }

    public function findAllTypePhone()
    {
        return $this->phoneTypeRepository->findAll();
    }

    //FindAll order by nameType 
    public function findAllTypePhoneOrderedByName()
    {
        return $this->phoneTypeRepository->findBy([], ['nameType' => 'ASC']);
    }

}