<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skate.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck(750, 'white',6,'gasoil');
var_dump($truck);
echo $truck->start();
echo $truck->forward();

echo $truck->brake();


echo '<br>';
echo $truck->loading();
echo '<br>';

var_dump($truck);


$carWay = new Car('grey', 4, 'diesel');
$bikeWay = new Bicycle('red', 1);
$skate = new Skateboard('Black', 0);

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$motorWay->addVehicle($carWay);
var_dump($motorWay->getCurrentVehicles());
echo "<br>";

$pedestrianWay->addVehicle($bikeWay);
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";

$pedestrianWay->addVehicle($skate);
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";

$pedestrianWay->addVehicle($carWay);
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";

$bicycle->setCurrentSpeed(8);
echo ("Mon vélo roule à " . $bicycle->getCurrentSpeed() . " km/h.Le  switchOn vaut " . $bicycle->switchOn() . ". Le switchOff vaut " . $bicycle->switchOff());
echo "<br>";
$bicycle->setCurrentSpeed(20);
echo ("Mon vélo roule à " . $bicycle->getCurrentSpeed() . " km/h.Le  switchOn vaut " . $bicycle->switchOn() . ". Le switchOff vaut " . $bicycle->switchOff());
echo "<br>";

$car->setCurrentSpeed(9);
echo ("Ma voiture roule à " . $car->getCurrentSpeed() . " km/h.Le  switchOn vaut " . $car->switchOn() . ". Le switchOff vaut " . $car->switchOff());
echo "<br>";

$car->setCurrentSpeed(130);
echo ("Ma voiture roule à " . $car->getCurrentSpeed() . " km/h.Le  switchOn vaut " . $car->switchOn() . ". Le switchOff vaut " . $car->switchOff());
echo "<br>";