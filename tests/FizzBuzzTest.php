<?php
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getNumbers
     */
    public function testSayOne($firstDivider, $secondDivider, $number, $solution)
    {
        $game = new FizzBuzz($firstDivider, $secondDivider);
        $this->assertEquals($solution, $game->say($number));
    }

    public function getNumbers()
    {
        return [
            [3, 5, 1, 1],
            [3, 5, 2, 2],
            [3, 5, 7, 7],
            [3, 5, 3, "F"],
            [3, 5, 6, "F"],
            [3, 5, 9, "F"],
            [3, 5, 5, "B"],
            [3, 5, 10, "B"],
            [3, 5, 20, "B"],
            [3, 5, 15, "FB"],
            [2, 7, 1, 1],
            [2, 7, 3, 3],
            [2, 7, 5, 5],
            [2, 7, 2, "F"],
            [2, 7, 4, "F"],
            [2, 7, 6, "F"],
            [2, 7, 7, "B"],
            [2, 7, 21, "B"],
            [2, 7, 14, "FB"],
            [2, 7, 28, "FB"],
        ];
    }
}
