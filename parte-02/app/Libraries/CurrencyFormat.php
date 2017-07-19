<?php

namespace App\Libraries;

class CurrencyFormat
{
    public function unformat($locale, $value)
    {
        $fmt = numfmt_create( 'en_EN', \NumberFormatter::DECIMAL);
        $salary = substr($value, 1);

        return numfmt_parse($fmt, $salary);
    }
}