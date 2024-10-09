<?php

class User {
    
    public $firstName;
    public $lastName;
    public $email;
    private $age;

    function __construct(
        $firstName,
        $lastName
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = 0;

        if (rand(1, 10) % 2 == 0) {
            $this->email = 'alessio@boolean.careers';
        }
    }

    /* 
        ----------------------------------------
        Getters & Setters
        ----------------------------------------
    */
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if (
            is_numeric($age)
            &&
            $age >= 0
            &&
            $age < 200
        ) {
            $this->age = $age;
        }
        // else {
        //     $this->age = 0;
        // }
    }
    /* 
        ----------------------------------------
    */

    /* 
        ----------------------------------------
        Custom methods
        ----------------------------------------
    */
    public function getFullName() {
        return $this->firstName.' '.$this->lastName;
    }

    public function getHalfAge() {
        return $this->age / 2;
    }
    /* 
        ----------------------------------------
    */

}