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
        $actual = $this->actCount(1);  //résultat de la fonction
        //Assert
        $this->assertEquals("1", $actual);
    }

    public function test_count_given2_shouldReturn2(){
        //Arrange

        //Act
        $actual = $this->actCount(2);  //résultat de la fonction
        //Assert
        $this->assertEquals("2", $actual);
    }

    public function test_count_given3_shouldReturnFizz(){
        //Arrange

        //Act
        $actual = $this->actCount(3);  //résultat de la fonction
        //Assert
        $this->assertEquals("fizz", $actual);
    }

    public function test_count_given4_shouldReturn4(){
        //Arrange

        //Act
        $actual = $this->actCount(4);  //résultat de la fonction
        //Assert
        $this->assertEquals("4", $actual);
    }

    public function test_count_given5_shouldReturnBuzz(){
        //Arrange

        //Act
        $actual = $this->actCount(5);  //résultat de la fonction
        //Assert
        $this->assertEquals("buzz", $actual);
    }

    public function test_count_given6_shouldReturnFizz(){
        //Arrange

        //Act
        $actual = $this->actCount(6);  //résultat de la fonction
        //Assert
        $this->assertEquals("fizz", $actual);
    }

    public function actCount(int $int): string
    {
        return $this->fizzBuzz->count($int);
    }
}
