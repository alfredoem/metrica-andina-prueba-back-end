<?php

namespace App\Libraries;

class CurrencyFormat
{
    /**
     * @param string $locale
     * @param string $value
     * @return mixed
     */
    public function unformat($locale = 'en_EN', $value = '')
    {
        $fmt = numfmt_create($locale, \NumberFormatter::DECIMAL);
        $salary = substr($value, 1);

        return numfmt_parse($fmt, $salary);
    }
}