<?php

use TngN\Public\Car;
use TngN\Public\Truck;
use TngN\Public\SpecMachine;

/**
 * @param string $filename
 * @return Car[]
 * @throws Exception
 */

function getCarList($filename): array
{
    if (empty($filename) || !file_exists($filename)) {
        throw new InvalidArgumentException("File $filename does not exist");
    }

    $file = fopen($filename, "r");
    if (!$file) {
        throw new RuntimeException("Failed to open file $filename");
    }

    fgetcsv($file);
    $cars = [];

    while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {
        if (count($data) < 7 || empty($data[0]) || empty($data[1]) || empty($data[3])) {
            continue;
        }

        $type = trim($data[0]);
        $brand = trim($data[1]);
        $photo = trim($data[3]);
        $carrying = trim($data[5]);

        $carrying = str_replace(',', '.', $carrying);
        $carrying = floatval($carrying);

        switch ($type) {
            case 'car':
                if (empty($data[2]));
                $passengerSeatsCount = intval($data[2]);
                $cars[] = new Car($type, $brand, $photo, $carrying, $passengerSeatsCount);
                break;
            case 'truck':
                $bodyWhl = trim($data[4]);
                $cars[] = new Truck($type, $brand, $photo, $carrying, $bodyWhl);
                break;
            case 'spec_machine':
                if (empty($data[6]));
                $extra = trim($data[6]);
                $cars[] = new SpecMachine($type, $brand, $photo, $carrying, $extra);
                break;
        }
    }

    return $cars;
}

