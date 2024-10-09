<?php

require_once __DIR__.'/classes/User.php';
require_once __DIR__.'/classes/Motor.php';
require_once __DIR__.'/classes/Wheel.php';
require_once __DIR__.'/classes/Car.php';

$sofia = new User(
    'Sofia',
    'Perlari'
);
// $sofia->firstName = 'Sofia';
// $sofia->lastName = 'Perlari';
// $sofia->email = 'sofia@boolean.careers';
$sofia->setAge(33);

var_dump($sofia);
var_dump($sofia->getFullName());
var_dump($sofia->getHalfAge());
var_dump($sofia->getAge());



$filippo = new User('Filippo', 'Mangione');
// $filippo->firstName = 'Filippo';
// $filippo->lastName = 'Mangione';
// $filippo->email = 'filippo@boolean.careers';
// $filippo->setAge('CIAO');
// $filippo->setAge(2000);
// $filippo->setAge(-2);

var_dump($filippo);
var_dump($filippo->getFullName());
// var_dump($filippo->getHalfAge());






$motor = new Motor();
// $motor->model = 'Super motor';

$wheelOne = new Wheel();

$car = new Car('AB123CD', $motor, [$wheelOne]);
if ($car->motor != null) {
    $car->motor->model = 'Super Motor da car';
}
// null->model = 'Super Motor da car';
// $car->setMotorModel('Super Motor da car');

$motorModel = $car->motor?->model;

var_dump($car);
var_dump($motorModel);







?>

<script>
    const sofia = {
        firstName: null,
        lastName: null,
        email: null,
        getFullName() {
            return this.firstName + ' ' + this.lastName;
        }
    };

    const filippo = {
        firstName: 'Filippo',
        lastName: 'Mangione',
        email: 'filippo@boolean.careers',
        getFullName() {
            return this.firstName + ' ' + this.lastName;
        }
    };

    sofia.firstName = 'Sofia';
    sofia.lastName = 'Perlari';
    sofia.email = 'sofia@boolean.careers';

    console.log(sofia);
    console.log(sofia.getFullName());
    console.log(filippo.getFullName());
</script>