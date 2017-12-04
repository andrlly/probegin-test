<?php

namespace Utils;

class Converter
{
    const BTUPerHour = 3.412141633;
    const Horsepower = 0.745699872;

    /**
     * Convert Watts to BPU
     *
     * @param  int $watts
     * @return int BPU
     * @throws \InvalidArgumentException
     */
    public static function convertWattsToBTUPerHour(int $watts) :int
    {
        if (!is_numeric($watts)) {
            throw new \InvalidArgumentException("Type isn't number.");
        }
        return self::BTUPerHour * $watts;
    }

    /**
     * Convert kiloWatts to horse power
     * 
     * @param  int $kW
     * @return int HP
     * @throws \InvalidArgumentException
     */
    public static function convertKilowattsToHorsepower(int $kW) :int
    {
        if (!is_numeric($kW)) {
            throw new \InvalidArgumentException("Type isn't number.");
        }
        return $kW / self::Horsepower;
    }

}
