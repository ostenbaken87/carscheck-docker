<?php

function printVehicles(array $vehicles)
{
    foreach ($vehicles as $vehicle) {
        echo "Type: " . $vehicle->carType . "<br>";
        echo "Brand: " . $vehicle->brand . "<br>";
        echo "Photo File Name: " . $vehicle->photoFileName . "<br>";
        echo "Carrying: " . $vehicle->carrying . "<br>";

        if ($vehicle instanceof TngN\Public\Car) {
            echo "Passenger Seats Count: " . $vehicle->getPassengerSeatsCount() . "<br>";
        } elseif ($vehicle instanceof TngN\Public\Truck) {
            echo "Body Dimensions (W x H x L): " . $vehicle->getBodyWidth() . " x " . $vehicle->getBodyHeight() . " x " . $vehicle->getBodyLength() . "<br>";
        } elseif ($vehicle instanceof TngN\Public\SpecMachine) {
            echo "Extra: " . $vehicle->getExtra() . "<br>";
        }

        echo "<br>"; 
    }
}