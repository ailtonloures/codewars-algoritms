<?php

/**
 * Retorna o tamanho do array que falta na sequência
 *
 * @param array $arrayOfArrays
 * @return integer
 */
function getLengthOfMissingArray(array $arrayOfArrays): int
{
    if (!empty($arrayOfArrays)) {
        $arrMaped = array_map(function ($arr) {
            return sizeof($arr);
        }, $arrayOfArrays);

        sort($arrMaped);

        if (!in_array(0, $arrMaped)) {
            for ($i = reset($arrMaped); $i <= end($arrMaped); $i++) {
                if (!in_array($i, $arrMaped)) {
                    return $i;
                }
            }
        }

        return 0;
    }

    return 0;
}

getLengthOfMissingArray([[4, 4, 20, 21, 18, 8, 5, 27], [], [8, 7, 8, 30, 34, 22, 43, 47, 45, 30, 39, 41, 27], [18, 42, 50, 26], [44, 15, 1, 31, 18, 28, 30, 43, 39, 12, 45, 44], [44, 32, 32, 16, 23, 36], [48, 19, 50, 42, 21, 39, 11, 37, 18, 28], [28, 42, 10, 29, 42, 34, 17, 5, 26], [2, 17, 21, 50, 12]]);
