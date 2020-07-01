<?php

function toJadenCase(string $string)
{
    $strSplited = explode(" ", $string);
    $strMaped = array_map(fn($value) => ucfirst($value) , $strSplited);
    $strUcFirst = implode(" ", $strMaped);

    return $strUcFirst;

    // OR ...

    // return ucwords($string);
}

toJadenCase("How can mirrors be real if our eyes aren't real");