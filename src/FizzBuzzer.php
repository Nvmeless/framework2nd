<?php
namespace Jin;
class FizzBuzzer
{
    private $max;
    private $fizzValue = 3;
    private $buzzValue = 5;
    public function __construct($max)
    {
        $this->max = $max;
    }

    public function parse()
    {
        for ($i = 0; $i < $this->max; $i++) {

            $iteration = $i + 1;
            if ($this->checkFizz($i + 1)) {
                $iteration = "Fizz";
            }
            if ($this->checkBuzz($i + 1)) {
                $iteration = "Buzz";
            }
            $iteration = $this->dividerChecker($i + 1) ?? $iteration;



            $result[] = $iteration;
        }
        return $result;
    }
    private function checkFizz($iteration)
    {
        return $this->checker($iteration, $this->fizzValue);

    }
    private function checkBuzz($iteration)
    {
        return $this->checker($iteration, $this->buzzValue);
    }


    private function checker($iteration, $value)
    {
        if ($iteration % $value === 0 && is_int($iteration / $value)) {
            return true;
        }
        return false;
    }
    private function dividerChecker($iteration)
    {

        if ($this->checkBuzz($iteration) && $this->checkFizz($iteration)) {
            return 'FizzBuzz';
        }
        if (sqrt($iteration) == $this->fizzValue) {
            return 'FizzFizz';
        }
        if (sqrt($iteration) == $this->buzzValue) {
            return 'BuzzBuzz';
        }
        return null;
    }
}