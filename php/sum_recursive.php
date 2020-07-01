<?php

/**
 * Funciona como array_reduce, porem retorna o processo de toda soma de forma decrescente
 *
 * @param array $ls
 * @return array
 */
function partsSums(array $ls): array
{
    for ($i = 0; $i <= sizeof($ls); $i++) {
        $arrs[$i] = array_slice($ls, $i);

        $sums = array_map(function ($arr) {
            return array_sum($arr);
        }, $arrs);
    }

    rsort($sums);

    return $sums;
}

partsSums([1, 2, 3, 4, 5, 6]);
