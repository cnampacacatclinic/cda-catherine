<?php

namespace App\DTO;

class PhoneDTO
{
    private $id;
    private $phoneNumber;
    private $centerId;
    private $isMobile;
    private $fkTypeId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getCenterId()
    {
        return $this->centerId;
    }

    public function setCenterId($centerId)
    {
        $this->centerId = $centerId;
        return $this;
    }

    public function getIsMobile()
    {
        return $this->isMobile;
    }

    public function setIsMobile($isMobile)
    {
        $this->isMobile = $isMobile;
        return $this;
    }

    public function getFkTypeId()
    {
        return $this->fkTypeId;
    }

    public function setFkTypeId($fkTypeId)
    {
        $this->fkTypeId = $fkTypeId;
        return $this;
    }
}