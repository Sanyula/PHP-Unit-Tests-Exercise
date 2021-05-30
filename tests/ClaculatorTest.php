<?php

use \PHPUnit\Framework\TestCase;
use \App\Calculator;
use Exception;
 
 class CalculatorTest extends TestCase {

    public function testAdd(){
        $calculator = new Calculator();
        $actual = $calculator->add(2,2);
        $expected = 4;
        $this->assertEquals($expected, $actual);
        
    }
    public function testAddWrongAnswer(){
        $calculator = new Calculator();
        $actual = $calculator->add(2,2);
        $expected = 5;
        $this->assertLessThanOrEqual($expected, $actual);
    }

    public function testAddReturnsNull(){
        $this->expectException(Exception::class);
        $calculator = new Calculator();
        $actual = $calculator->add(null,null);
    }

    public function testAddRejectsStrings(){
        $this->expectException(Exception::class);
        $calculator = new Calculator();
        $actual = $calculator->add("john","mike");
    }

 }
?>