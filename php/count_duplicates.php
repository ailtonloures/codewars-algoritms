<?php

/**
 * Retorna a número de letras duplicadas
 *
 * @param string $text
 * @return integer
 */
function duplicateCount(string $text): int
{
    $textSplited = str_split(strtolower($text));
    $countValues = array_count_values($textSplited);
    $filtered    = array_filter($countValues, function ($value) {
        return $value >= 2;
    });

    return sizeof($filtered);
}

duplicateCount("aabBcde");
