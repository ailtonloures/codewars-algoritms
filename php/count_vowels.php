<?php

function getCount(string $string) 
{
    $vowelsCount = 0;  
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    $strSplited = str_split($string);
    $strFiltered = array_filter($strSplited, function($value) use ($vowels) {
        return in_array($value, $vowels);
    });

    $vowelsCount = count($strFiltered);

    return $vowelsCount;
}

getCount("ailton");