<?php

class ClearPar
{
    public function build($string)
    {
        if (preg_match('/[^()]/', $string, $matches) === 1) {
            return 'El string a evaluar es invalido';
        }

        if (preg_match_all('/\(()\)/', $string, $matches) === 0) {
            return '';
        }

        return implode($matches[0]);
    }
}