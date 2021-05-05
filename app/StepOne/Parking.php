<?php

namespace App\StepOne;

class Parking
{
    public $capacity;
    public $vehicles;

    function __construct($capacity) {
        $this->capacity = $capacity;
        $this->vehicles = [];
    }

    public function parkVehicle($vehicle) {

        if(count($this->vehicles) >= $this->capacity) {
            echo "Parking has not empty slot". PHP_EOL;
        } else {
            $this->vehicles[] = $vehicle;
            echo $vehicle->name . " parked ". PHP_EOL;
        }
    }

}

