<?php

namespace App\StepTwo;

class Parking
{
    public $parking_floors;

    function __construct() {
        $this->parking_floors = [];
    }

    public function addFloor($parking_floor) {
        $this->parking_floors = $parking_floor;
    }
}
