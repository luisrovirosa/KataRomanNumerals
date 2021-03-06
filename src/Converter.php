<?php

namespace KataRomanNumerals;

class Converter
{
    /**
     * Roman numerals map that encode() relies on.
     *
     * @var Numeral[]
     */
    private $map;

    /**
     * Converter constructor.
     */
    public function __construct()
    {
        $this->map = new Numerals(
            Numeral::of('I', 1),
            Numeral::of('IV', 4),
            Numeral::of('V', 5),
            Numeral::of('IX', 9),
            Numeral::of('X', 10),
            Numeral::of('XL', 40),
            Numeral::of('L', 50),
            Numeral::of('XC', 90),
            Numeral::of('C', 100),
            Numeral::of('CD', 400),
            Numeral::of('D', 500),
            Numeral::of('CM', 900),
            Numeral::of('M', 1000)
        );
    }

    /**
     * Encode number to roman representation.
     *
     * @param int $number
     *
     * @return string Number encoded to roman.
     */
    public function encode($number)
    {
        $result = '';

        while (0 < $number) {
            $numeral = $this->map->findTheSmallestGreaterNumber($number);

            $result .= $numeral->symbol();
            $number -= $numeral->value();
        }

        return $result;
    }
}
