<?php 
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Vehicule.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Speedometer.php';


echo Speedometer::convertKmToMiles(10);

/*
$car = new Car('green', 4, 'fuel');
echo $car->switchOn();


$bike= new Bicycle('blue',1);
$bike->setCurrentSpeed(9);
echo $bike->switchOn();

$camionVolvo = new Truck('blue', 4, 30,'fuel');
echo $camionVolvo->forward();
echo $camionVolvo->getEnergy();

echo $camionVolvo->checkLoad();
$motorWay = new MotorWay();
$motorWay->addVehicule($camionVolvo);
$motorWay->addVehicule($car);
$motorWay->addVehicule($bike);

$residentialWay = new ResidentialWay();
$residentialWay->addVehicule($camionVolvo);
$residentialWay->addVehicule($car);
$residentialWay->addVehicule($bike);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicule($camionVolvo);
$pedestrianWay->addVehicule($car);
$pedestrianWay->addVehicule($bike);
*/
