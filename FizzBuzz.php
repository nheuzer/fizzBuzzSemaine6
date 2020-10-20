<?php
namespace FizzBuzz;
class FizzBuzz {
    /*public function play(int $number){

    }*/

    public function count(int $int) : string{
        if ($this->isMultipleOf3($int)) return "fizz";
        if ($int === 5) return "buzz";

        return strval($int);
    }

    public function isMultipleOf3(int $int) :bool{
        return $int%3 === 0;
    }
}