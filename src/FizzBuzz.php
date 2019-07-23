<?php
declare(strict_types=1);
namespace App;

class FizzBuzz
{
    public function answer($number)
    {
        if ($number === 3) {
            return "fizz";
        }
        if ($number === 5) {
            return "buzz";
        }
        return $number;
    }
}
