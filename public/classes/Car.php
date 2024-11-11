<?php

namespace TngN\Public;

use TngN\Public\BaseCar;

class Car extends BaseCar
{
    private $passengerSeatsCount;

    public function __construct($carType, $brand, $photoFileName, $carrying, $passengerSeatsCount)
    {
        parent::__construct($carType, $brand, $photoFileName, $carrying);
        $this->passengerSeatsCount = (int) $passengerSeatsCount;
    }

    public function getPassengerSeatsCount(): int
    {
        return $this->passengerSeatsCount;
    }
}