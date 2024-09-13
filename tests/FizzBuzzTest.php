<?php
use PHPUnit\Framework\TestCase;
use Jin\FizzBuzzer;
class FizzBuzzTest extends TestCase
{
    public function testReturnLength()
    {
        $max = 5;
        $fizzBuzzer = new FizzBuzzer($max);

        $this->assertEquals(count($fizzBuzzer->parse()), $max);
    }


    public function testParsing()
    {
        $max = 5;
        $fizzBuzzer = new FizzBuzzer($max);

        $this->assertEquals([1, 2, "Fizz", 4, 'Buzz'], $fizzBuzzer->parse());
    }

    public function testParsingWithThreeByFive()
    {
        $max = 15;
        $fizzBuzzer = new FizzBuzzer($max);

        $this->assertEquals([1, 2, "Fizz", 4, 'Buzz', "Fizz", 7, 8, 'FizzFizz', "Buzz", 11, 'Fizz', 13, 14, 'FizzBuzz'], $fizzBuzzer->parse());
    }
}