<?php
require "vendor/autoload.php";
require "FizzBuzz.php";

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /*public function testSample(){
        //Arrange

        //Act

        //Assert
        $this->assertEquals(true, true); //identique : $this->assertTrue(true);
    }*/

    public function test_count_given1_shouldReturn1(){
        //Arrange
        $fizzBuzz = new FizzBuzz();
        //Act
        $actual = $fizzBuzz->count(1);  //résultat de la fonction
        //Assert
        $this->assertEquals("1", $actual);
    }
}
