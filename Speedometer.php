<?php

class Speedometer
{
    public const SPEEDTOMILES_CONVERT = 6.21;

    public static function convertKmToMiles(float $speedToMiles): ?float
    {
        return $speedToMiles * self::SPEEDTOMILES_CONVERT;
    }
}
