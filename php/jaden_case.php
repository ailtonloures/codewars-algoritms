<?php

/**
 * Tranforma todas as primeiras letras das palavras em maiúsculas
 *
 * @param string $string
 * @return string
 */
function toJadenCase(string $string): string
{
    $strSplited = explode(" ", $string);
    $strMaped   = array_map(fn($value) => ucfirst($value), $strSplited);
    $strUcFirst = implode(" ", $strMaped);

    return $strUcFirst;

    // OR ...

    // return ucwords($string);
}

toJadenCase("How can mirrors be real if our eyes aren't real");
