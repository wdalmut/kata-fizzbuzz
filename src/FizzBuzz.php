<?php
class FizzBuzz
{
    private $firstDivider;
    private $secondDivider;

    public function __construct($firstDivider = 3, $secondDivider = 5)
    {
        $this->firstDivider = $firstDivider;
        $this->secondDivider = $secondDivider;
    }

    public function say($number)
    {
        $solution = $number;

        if ($this->isFizz($number)) {
            $solution = "F";
        }

        if ($this->isBuzz($number)) {
            $solution = "B";
        }

        if ($this->isFizz($number) && $this->isBuzz($number)) {
            $solution = "FB";
        }

        return $solution;
    }

    private function isFizz($number)
    {
        return ($number % $this->firstDivider === 0);
    }

    private function isBuzz($number)
    {
        return ($number % $this->secondDivider === 0);
    }
}
