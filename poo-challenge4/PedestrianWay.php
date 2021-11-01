<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            echo "Votre vehicule est  autorisé sur cette voie. Bienvenue à vous !";
            $this->currentVehicles[] = $vehicle;
        }
        else{
            echo "Vous n'êtes pas autorisés sur cette voie. Veuillez faire demi-tour !";
        }
    }
}