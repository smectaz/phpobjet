<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacity;
    private int $charge = 0;
    private string $energy;
    
    public function __construct(int $capacity, string $color,int $nbSeats,string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    public function loading ()
        {
        echo 'Le chargement commence <br>';
        echo 'La charge est de ' . $this->charge . 'kg. <br>';
            for($this->charge = 0; $this->charge < $this->capacity; $this->charge++)
            {
                
            }
        echo 'Le chargement est terminée, la capacité maximum qui est de ' . $this->capacity . 'kg est atteinte.<br>';
        echo 'Merci et bonne route<br>';
     }
    
    public function getCharge()
    {
        return $this->charge;
    }
    
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }
}