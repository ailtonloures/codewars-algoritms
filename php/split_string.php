<?php

/**
 * Põe um "_" no final da string se o conjunto for ímpar, e retorna separado a cada 2 caracteres em um array
 *
 * @param string $str
 * @return array
 */
function solution(string $str): array
{
    $splited = str_split($str, 2);
    $values  = array_map(function ($value) {
        if (strlen($value) == 1) {
            $value .= "_";
        }

        return $value;
    }, $splited);

    return $values;
}

solution('abcde');
