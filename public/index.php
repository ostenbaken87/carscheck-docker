<?php
require_once __DIR__ . '/vendor/larapack/dd/src/helper.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions/getcarlist.php';
require_once __DIR__ . '/functions/printVehicles.php';

$filename = __DIR__ . '/csv/car_data_for_task.csv';

$vehicles = getCarList($filename);

printVehicles($vehicles);
