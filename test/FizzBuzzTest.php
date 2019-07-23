<?php

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function testReturnOne()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->answer(1);

        $this->assertEquals(1, $result);
    }

    public function testReturnTwo()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->answer(2);

        $this->assertEquals(2, $result);
    }

    public function testReturnFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->answer(3);

        $this->assertEquals("aho", $result);
    }

    public function testReturnBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->answer(5);

        $this->assertEquals("buzz", $result);
    }

    public function testReturnFizzBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->answer(15);

        $this->assertEquals("fizzbuzz", $result);
    }
}