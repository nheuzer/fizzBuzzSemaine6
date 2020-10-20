<?php
namespace FizzBuzz;
class FizzBuzz {
    /*public function play(int $number){

    }*/

    public function count(int $int) : string{
        if ($int%3 === 0) return "fizz";
        if ($int === 5) return "buzz";

        return strval($int);
    }
}