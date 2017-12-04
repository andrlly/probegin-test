<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Utils\Caesar;
/**
 * A Test Sceleton
 */
class CaesarTest extends TestCase
{
    public function testEncode()
    {
        $actual = Caesar::encode('Probegin Test Assignments');
        $this->assertInternalType('string', $actual);
        $this->assertEquals('Uwtgjlns%Yjxy%Fxxnlsrjsyx', $actual);
    }

    /**
     * @depends testEncode
     */
    public function testDecode()
    {
        $actual = Caesar::decode('Uwtgjlns%Yjxy%Fxxnlsrjsyx');
        $this->assertInternalType('string', $actual);
        $this->assertEquals('Probegin Test Assignments', $actual);
    }

}
