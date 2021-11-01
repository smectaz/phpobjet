<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car || $vehicle instanceof Truck){
            echo "Votre vehicule est  autorisé sur cette voie. Bienvenue à vous !" . "<br>";
            $this->currentVehicles[] = $vehicle;
        }
        else{
            echo "Vous n'êtes pas autorisés sur cette voie. Veuillez faire demi-tour !" . "<br>";
        }
    }
}