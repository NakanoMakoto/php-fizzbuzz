<?php

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function testReturnOne()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->answer();

        $this->assertEquals(1, $result);
    }

    public function testReturnTwo()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->answer();

        $this->assertEquals(2, $result);
    }
}