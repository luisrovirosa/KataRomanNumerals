<?php

namespace KataRomanNumerals;

class Roman
{
    private static $equivalences = [
      1 => 'I',
      4 => 'IV',
      5 => 'V',
      6 => 'VI',
      7 => 'VII',
      8 => 'VIII',
      9 => 'IX',
      10 => 'X',
      11 => 'XI',
      14 => 'XIV',
      15 => 'XV',
    ];

    public static function of($number)
    {
        $result = '';
        $equivalences = self::$equivalences;

        krsort($equivalences);
        loop_start:
        foreach ($equivalences as $value => $symbol) {
            if ($number >= $value) {
                $result .= $symbol;
                $number -= $value;
                goto loop_start;
            }
        }

        return $result;
    }
}
