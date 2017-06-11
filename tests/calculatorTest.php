<?php
namespace Sirolad\Test;

use Sirolad\Calculator;

class calculatorTest extends \PHPUnit_Framework_TestCase
{
    public $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator(6, 2);
    }

    
    /**
     * testing the add function
     */
    public function testAdd()
    {
        $test = $this->calculator->add();

        $this->assertEquals($test, 8);
    }

    /**
     * testing the minus function
     */
    public function testMinus()
    {
        $test = $this->calculator->minus();

        $this->assertEquals($test, 4);
    }


    /**
     * testing the multiply function
     */
    public function testMultiply()
    {
        $test = $this->calculator->multiply();

        $this->assertEquals($test, 12);
    }


    /**
     * testing the division function
     */
    public function testDivide()
    {
        $test = $this->calculator->divide();

        $this->assertEquals($test, 3);
    }
}