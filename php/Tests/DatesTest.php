<?php
/**
 * Created by PhpStorm.
 * User: andriy
 * Date: 04.12.17
 * Time: 2:06
 */

namespace Utils;
use PHPUnit\Framework\TestCase;

class DatesTest extends TestCase
{
    public function testGetDaysInQuarter()
    {
        $quater = new Dates();
        $this->assertInstanceOf(Dates::class, new Dates());
        $actual = $quater->getDaysInQuarter(2015,3);
        $this->assertInternalType('int', $actual);
        $this->assertEquals(92, $actual);
    }
}
