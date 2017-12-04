<?php

declare(strict_types=1);

namespace Utils;
use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{

    protected $fixture;

    protected function setUp()
    {
        $this->fixture = new Strings();
    }

    protected function tearDown()
    {
        $this->fixture = NULL;
    }

    public function testKebabCase()
    {
        $this->assertInstanceOf(Strings::class, $this->fixture);
        $this->assertInternalType('string', $this->fixture->kebabCase());
        $this->assertEquals('probegin-test-assignments', $this->fixture->kebabCase());
    }

    public function testCountCharOccurrence()
    {
        $this->assertInstanceOf(Strings::class, $this->fixture);
        $actual = $this->fixture->countCharOccurrence('est');
        $this->assertInternalType('int', $actual);
        $this->assertEquals(1, $actual);

    }

    public function testMostFrequentChars()
    {
        $this->assertInstanceOf(Strings::class, $this->fixture);
        $actual = $this->fixture->mostFrequentChars('ProbeginTestAssignments');
        $this->assertInternalType('string', $actual);
        $this->assertNotEquals('W', $actual);
        $this->assertEquals('s', $actual);
    }

    public function testFirstUniqueChar()
    {
        $this->assertInstanceOf(Strings::class, $this->fixture);
        $this->assertInternalType('string', $this->fixture->firstUniqueChar());
        $this->assertEquals('p', $this->fixture->firstUniqueChar());
    }

    public function testAsciiCompression()
    {
        $this->assertInstanceOf(Strings::class, $this->fixture);
        $this->assertInternalType('string', $this->fixture->asciiCompression());
        $this->assertEquals('p0r1o1b1e3g2i2n3t2s4a0m1', $this->fixture->asciiCompression());
    }

    public function testIsHeterogram()
    {
        $this->assertInstanceOf(Strings::class, $this->fixture);
        $this->assertInternalType('bool', $this->fixture->isHeterogram());
        $this->assertFalse($this->fixture->isHeterogram());
    }
}
