<?php
namespace FizzBuzz;
class FizzBuzz {
    /*public function play(int $number){

    }*/

    public function count(int $int) : string{
        if ($this->isMultipleOf3($int)) return "fizz";
        if ($this->isMultipleOf5($int)) return "buzz";

        return strval($int);
    }

    public function isMultipleOf3(int $int) :bool{
        return $int%3 === 0;
    }

    public function isMultipleOf5(int $int) :bool{
        return $int%5 === 0;
    }
}