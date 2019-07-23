<?php
declare(strict_types=1);
namespace App;

class FizzBuzz
{
    public function answer($number)
    {
        if ($number%15 === 0) {
            return "fizzbuzz";
        }
        if ($number%3 === 0) {
            return "aho";
        }
        if ($number%5 === 0) {
            return "buzz";
        }
        return $number;
    }
}
