<?php

namespace App\Service;

use App\Repository\PhoneRepository;
use App\DTO\CenterDTO;
use App\DTO\PhoneDTO;

class PhoneService
{
    private $phoneRepository;
    private $centerId;

    public function __construct(PhoneRepository $phoneRepository)
    {
        $this->phoneRepository = $phoneRepository;
    }

    public function findAllPhones()
    {
        return $this->phoneRepository->findAll();
    }

    public function findCenterPhone($centerId)
    {
        return $this->phoneRepository->findBy(['center_id' => $centerId]);
    }

    public function findTypePhone($typeId)
    {
        return $this->phoneRepository->findBy(['fk_type_id' => $typeId]);
    }

   /* public function findPhonesByCenterIdOrderedByType($centerId)
    {
        return $this->phoneRepository->findPhonesByCenterIdOrderedByType($centerId);
    }*/

    public function findPhonesByCenterIdOrderedByType($centerId): array
    {
        $phonesData = $this->phoneRepository->findPhonesByCenterId($centerId);

        $phoneDTOs = [];
        foreach ($phonesData as $phoneData) {
            // Vérifiez si la clé "fkType" existe avant de l'utiliser
            $fkType = isset($phoneData['fkType']) ? $phoneData['fkType'] : null;
    
            $phoneDTOs[] = new PhoneDTO($phoneData['phoneNumber'], $fkType, $centerId);
        }
    
        return $phoneDTOs;
    }

    public function findPhonesByCenterIdOrderedByType2(): array
    {
        return $phonesData = $this->phoneRepository->findPhonesByCenter2();
    }

    public function deleteById($id)
    {    
        return $this->phoneRepository->delete($id);
    }

}