<?php 

function arrayDiff(array $a, array $b) : array
{
    $arrDiff = array_diff($a, $b);
    $arrValues = array_values($arrDiff);

    return $arrValues;
}

arrayDiff([1,2,2,2,3],[2]);