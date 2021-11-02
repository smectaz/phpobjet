<?php

require_once 'Vehicle.php';

class Speedometer
{
    public const GET_MILES_KM = 0.621;

    public const GET_KM_MILES = 1.609;
    
    public static function convertKmToMiles(float $km_miles)
    {
        return number_format(($km_miles * self::GET_MILES_KM), 2);

    }

public static function convertMilesToKm(float $miles_km)
{
    return number_format(($miles_km * self::GET_KM_MILES), 2);
}
}

echo Speedometer::convertKmToMiles(10) . "<br>";
echo Speedometer::convertMilesToKm(10) ;