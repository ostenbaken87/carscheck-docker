<?php

namespace TngN\Public;

use TngN\Public\BaseCar;

class SpecMachine extends BaseCar
{
    private $extra;

    public function __construct($carType, $brand, $photoFileName, $carrying, $extra)
    {
        parent::__construct($carType, $brand, $photoFileName, $carrying);
        $this->extra = $extra;
    }

    public function getExtra()
    {
        return $this->extra;
    }
}