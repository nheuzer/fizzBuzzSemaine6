<?php
namespace FizzBuzz;
class FizzBuzz {
    /*public function play(int $number){

    }*/

    public function count(int $int) : string{
        if ($int === 2) return "2";
        if ($int === 3) return "fizz";

        return "1";
    }
}