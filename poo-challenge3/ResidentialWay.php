<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Vehicle){
            echo "Votre vehicule est  autorisé sur cette voie. Bienvenue à vous !" . "<br>";
            $this->currentVehicles[] = $vehicle;
        }
        else{
            echo "Vous n'êtes pas autorisés sur cette voie. Veuillez faire demi-tour !" . "<br>";
        }
    }
}