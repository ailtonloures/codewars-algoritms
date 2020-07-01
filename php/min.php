<?php

function minValue(array $arr)
{
    $uniqs = array_values(array_unique($arr));

    for ($i = 0; $i < sizeof($uniqs); $i++) {
       $random = array_rand($uniqs);
       $number = $uniqs[$random];

       if ($uniqs[$i] != $random) {
           $number = $number . $uniqs[$i];
       }
    }

    return $number;
}

minValue([9, 8, 9, 9, 7, 1, 5, 6]);