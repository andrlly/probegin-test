<?php

namespace Utils;

class Dates
{
    /**
     * Get number of days in a given quarter
     *
     * @param  int $year    Year to consider
     * @param  int $quarter Quarter to consider
     * @return int Number of days
     * @throws \InvalidArgumentException
    */
    public static function getDaysInQuarter(int $year, int $quarter) :int
    {
        if(!is_numeric($year) && !is_numeric($quarter)){
            throw new \DomainException('Enter value is not number.');
        }
        if ( ($quarter != 1) && ($quarter != 2) && ($quarter != 3) && ($quarter != 4) ) return false;
        $quarter_arr = [];
        if ($quarter == 1) $quarter_arr = [1,2,3];
        if ($quarter == 2) $quarter_arr = [4,5,6];
        if ($quarter == 3) $quarter_arr = [7,8,9];
        if ($quarter == 4) $quarter_arr = [10,11,12];

        $quarter1 = cal_days_in_month(CAL_GREGORIAN, $quarter_arr[0], $year);
        $quarter2 = cal_days_in_month(CAL_GREGORIAN, $quarter_arr[1], $year);
        $quarter3 = cal_days_in_month(CAL_GREGORIAN, $quarter_arr[2], $year);

        return $quarter1 + $quarter2 + $quarter3;
    }
}

