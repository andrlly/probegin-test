<?php

declare(strict_types=1);

namespace Utils;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    public function testConvertWattsToBTUPerHour()
    {
        $actual = Converter::convertWattsToBTUPerHour(456);
        $this->assertInternalType('int', $actual);
        $this->assertEquals(1555, $actual);
    }

    public function testConvertKilowattsToHorsepower()
    {
        $actual = Converter::convertKilowattsToHorsepower(456);
        $this->assertInternalType('int', $actual);
        $this->assertEquals(611, $actual);
    }
}