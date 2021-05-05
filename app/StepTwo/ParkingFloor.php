<?php

namespace App\StepTwo;

class ParkingFloor
{
    public $name;
    public $capacity;
    public $allowed_vehicles;
    public $vehicles;

    function __construct($name, $capacity, $allowed_vehicles) {
        $this->name = $name;
        $this->capacity = $capacity;
        $this->allowed_vehicles = $allowed_vehicles;
        $this->vehicles = [];
    }

    public function parkVehicle($vehicle)
    {
        if(count($this->vehicles) >= $this->capacity) {
            echo "Parking Floor has not empty slot". PHP_EOL;
        } else {

            if($this->isVehicleAllowedToParkInThisFloor($vehicle)) {
                $this->vehicles[] = $vehicle;
                echo $vehicle->name . " parked ". PHP_EOL;
            } else {
                echo $vehicle->name. " is not allowed to park in this floor ". PHP_EOL;
            }
        }
    }

    private function isVehicleAllowedToParkInThisFloor($vehicle) {
        foreach ($this->allowed_vehicles as $allowed_vehicle) {
            if($vehicle instanceof $allowed_vehicle) {
                return true;
            }
        }
        return false;
    }
}
