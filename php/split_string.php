<?php

function solution(string $str)
{
    $splited = str_split($str, 2);
    $values  = array_map(function ($value) {
        if (strlen($value) == 1) {
            $value .= "_";
        }

        return $value;
    }, $splited);

    return str_split(implode("", $values), 2);
}

solution('abcde');
