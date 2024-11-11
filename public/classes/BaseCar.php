<?php

namespace TngN\Public;

abstract class BaseCar
{
    public $carType;
    public $brand;
    public $photoFileName;
    public $carrying;

    public function __construct($carType, $brand, $photoFileName, $carrying)
    {
        $this->carType = $carType;
        $this->brand = $brand;
        $this->photoFileName = $photoFileName;
        $this->carrying = floatval($carrying);
    }

    public function getPhotoFileExt()
    {
        return pathinfo($this->photoFileName, PATHINFO_EXTENSION);
    }
}
