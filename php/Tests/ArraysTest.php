<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * A Test Sceleton
 */
final class ArraysTest extends TestCase
{

    protected $fixture;

    protected function setUp()
    {
        $this->fixture = new \Utils\Arrays();
    }

    protected function tearDown()
    {
        $this->fixture = NULL;
    }

    public function testReady()
    {
        $this->assertTrue(version_compare(PHP_VERSION, "7.0.0", "ge"));
    }

    public function testFindPair()
    {
        $this->assertInstanceOf(\Utils\Arrays::class, $this->fixture);
        $actual = $this->fixture->findPair(15);
        $this->assertInternalType('array', $actual);
        $this->assertEquals([5, 10], $actual);
    }

    public function testBubbleAlgorithm()
    {
        $this->assertInstanceOf(\Utils\Arrays::class, $this->fixture);
        $actual = $this->fixture->bubbleAlgorithm([2,45,7,1,8,10]);
        $this->assertInternalType('array', $actual);
        $this->assertEquals([1, 2, 7, 8, 10, 45], $actual);
    }

    public function testSortByKeyLength()
    {
        $this->assertInstanceOf(\Utils\Arrays::class, $this->fixture);
        $actual = $this->fixture->sortByKeyLength(['one' => 2,'two' => 45,'three' => 7,'four' => 3,'fife' => 5,'six' => 1,'seven' => 8, 'eight' => 10]);
        $this->assertInternalType('array', $actual);
        $this->assertEquals(
            [
            'three' => 7,
            'seven' => 8,
            'eight' => 10,
            'four' => 3,
            'fife' => 5,
            'six' => 1,
            'one' => 2,
            'two' => 45
            ],
            $actual);
    }

}
