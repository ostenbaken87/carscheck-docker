<?php

namespace TngN\Public;

use TngN\Public\BaseCar;


class Truck extends BaseCar
{
    private $bodyWidth;
    private $bodyHeight;
    private $bodyLength;

    public function __construct($carType, $brand, $photoFileName, $carrying, $bodyWhl)
    {
        parent::__construct($carType, $brand, $photoFileName, $carrying);
        $this->parseBodyDimensions($bodyWhl);
    }

    private function parseBodyDimensions($bodyWhl): void
    {
        list($this->bodyLength, $this->bodyWidth, $this->bodyHeight) = array_map('floatval', explode('x', $bodyWhl . 'x0x0'));
    }

    public function getBodyVolume(): float
    {
        return $this->bodyWidth * $this->bodyHeight * $this->bodyLength;
    }

    public function getBodyWidth(): float
    {
        return $this->bodyWidth;
    }
    public function getBodyHeight(): float
    {
        return $this->bodyHeight;
    }
    public function getBodyLength(): float
    {
        return $this->bodyLength;
    }
}