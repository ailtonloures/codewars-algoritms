<?php

function kebabize($string)
{
    $text = str_split(preg_replace('/[^a-zA-Z]/', '', $string));

    for ($i = 0; $i < count($text); $i++) {
        if (preg_match('/[A-Z]/', $text[$i])) {
            if (isset($text[$i - 1])) {
                $text[$i - 1] .= "-";
            }
        }
    }

    return strtolower(implode("", $text));
}

kebabize('R5AhLdwDSYc549U');
