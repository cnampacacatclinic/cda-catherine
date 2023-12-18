<?php

namespace App\DTO;

class CenterDTO
{
    private $id;
    private $nameCenter;
    private $numWay;
    private $typeWay;
    private $nameWay;
    private $zipCode;
    private $city;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNameCenter()
    {
        return $this->nameCenter;
    }

    public function setNameCenter($nameCenter)
    {
        $this->nameCenter = $nameCenter;
        return $this;
    }

    public function getNumWay()
    {
        return $this->numWay;
    }

    public function setNumWay($numWay)
    {
        $this->numWay = $numWay;
        return $this;
    }

    public function getTypeWay()
    {
        return $this->typeWay;
    }

    public function setTypeWay($typeWay)
    {
        $this->typeWay = $typeWay;
        return $this;
    }

    public function getNameWay()
    {
        return $this->nameWay;
    }

    public function setNameWay($nameWay)
    {
        $this->nameWay = $nameWay;
        return $this;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
}