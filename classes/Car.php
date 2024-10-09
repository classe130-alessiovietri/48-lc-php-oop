<?php

require_once __DIR__.'/Motor.php';

class Car {

    public $plate;
    public $motor;              // Istanza di classe Motor
    public $wheels = [];        // Istanze di classe Wheel

    function __construct(string $plate, Motor|null $motor, array $wheels) {
        $this->plate = $plate;
        $this->motor = $motor;
        $this->wheels = $wheels;
    }

    /* 
        ----------------------------------------
        Getters & Setters
        ----------------------------------------
    */
    public function getPlate() {
        return $this->plate;
    }

    public function setPlate(string $plate) {
        $this->plate = $plate;
    }

    public function getMotor() {
        return $this->motor;
    }

    public function setMotor(Motor|null $motor) {
        $this->motor = $motor;
    }

    public function getWheels() {
        return $this->wheels;
    }

    public function setWheels(array $wheels) {
        $this->wheels = $wheels;
    }
    /* 
        ----------------------------------------
    */

    public function setMotorModel(string $model) {
        $this->motor->model = $model;
    }


}