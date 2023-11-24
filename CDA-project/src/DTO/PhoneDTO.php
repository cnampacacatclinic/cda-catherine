<?php
namespace App\DTO;

class PhoneDTO
{
    private $phoneNumber;
    private $fkType;
    private $center;

    public function __construct(string $phoneNumber, $fkType, $center)
    {
        $this->phoneNumber = $phoneNumber;
        $this->fkType = $fkType;
        $this->center = $center;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getFkType(): int
    {
        return $this->fkType;
    }
    
    public function getCenter()
    {
        return $this->center;
    }
}