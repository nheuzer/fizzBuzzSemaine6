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

    private $fizzBuzz;

    protected function setUp() : void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_count_given1_shouldReturn1(){
        //Arrange

        //Act
        $actual = $this->fizzBuzz->count(1);  //résultat de la fonction
        //Assert
        $this->assertEquals("1", $actual);
    }

    public function test_count_given2_shouldReturn2(){
        //Arrange

        //Act
        $actual = $this->fizzBuzz->count(2);  //résultat de la fonction
        //Assert
        $this->assertEquals("2", $actual);
    }

    public function test_count_given3_shouldReturnFizz(){
        //Arrange

        //Act
        $actual = $this->fizzBuzz->count(3);  //résultat de la fonction
        //Assert
        $this->assertEquals("fizz", $actual);
    }

    public function test_count_given4_shouldReturn4(){
        //Arrange

        //Act
        $actual = $this->fizzBuzz->count(4);  //résultat de la fonction
        //Assert
        $this->assertEquals("4", $actual);
    }
}
