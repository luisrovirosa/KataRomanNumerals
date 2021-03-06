<?php

namespace KataRomanNumerals\Test;

use KataRomanNumerals\Converter;

class ConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider convertTestCases
     */
    public function test_number_to_roman($symbol, $value)
    {
        $converter = new Converter();
        $this->assertEquals($symbol, $converter->encode($value));
    }

    public function convertTestCases()
    {
        return [
            ["I", 1],
            ["II", 2],
            ["III", 3],
            ["IV", 4],
            ["V", 5],
            ["VI", 6],
            ["VII", 7],
            ["VIII", 8],
            ["IX", 9],
            ["X", 10],
            ["XI", 11],
            ["XII", 12],
            ["XIII", 13],
            ["XIV", 14],
            ["XV", 15],
            ["XVI", 16],
            ["XIX", 19],
            ["XX", 20],
            ["XXIV", 24],
            ["XXIX", 29],
            ["XXX", 30],
            ["XXXIV", 34],
            ["XXXIX", 39],
            ["XL", 40],
            ["L", 50],
            ["LX", 60],
            ["XC", 90],
            ["XCVII", 97],
            ["C", 100],
            ["CV", 105],
            ["CLXII", 162],
            ["CLXXXIII", 183],
            ["CD", 400],
            ["D", 500],
            ["DCCXIII", 713],
            ["DCCCXVIII", 818],
            ["DCCCXXIX", 829],
            ["CM", 900],
            ["CMXCIX", 999],
            ["M", 1000],
            ["MI", 1001],
            ["MLXXXII", 1082],
            ["MCCLXXX", 1280],
            ["MCCCXIV", 1314],
            ["MDCLXXXI", 1681],
            ["MCMXC", 1990],
            ["MMLX", 2060],
            ["MMDXLII", 2542],
            ["MMCMLXXVIII", 2978],
            ["MMCMLXXXVIII", 2988],
            ["MMM", 3000],
        ];
    }
}
