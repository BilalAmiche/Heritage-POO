<?php

require_once 'Bicycle.php';

$bike = new Bicycle('blue', 1);

$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';


require_once 'Car.php';

$car = new Car('blue', 4, 'Cola', 4);
$car->setCurrentSpeed(15);
var_dump($car);

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h ' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h ' . '<br>';


require_once 'Truck.php';

$truck = new Truck('red', 2, 'Fuel', 8, 100);
$truck->IsFull();
$truck->setCurrentSpeed(15);
var_dump($truck);

echo $truck->IsFull();
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h ' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h ' . '<br>';
