<?php

function wave($people)
{
    $wave = [];

    for ($i = 0; $i < strlen($people); $i++) {
        $text = strtolower($people);

        if ($text[$i] !== " ") {
            $wave[$i] = substr_replace($text, strtoupper($text[$i]), $i, 1);
        }
    }

    return array_values($wave);
}

wave(" Two words ");
