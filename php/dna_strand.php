<?php

/**
 * Inverte os valores das bases nitrogenadas
 *
 * @param string $dna
 * @return string
 */
function DNA_strand(string $dna): string
{
    $dnaSplited  = str_split($dna);
    $dnaFiltered = array_map(function ($value) {
        if ($value == "A") {
            $prop = "T";
        }

        if ($value == "T") {
            $prop = "A";
        }

        if ($value == "G") {
            $prop = "C";
        }

        if ($value == "C") {
            $prop = "G";
        }

        return $prop;
    }, $dnaSplited);

    $dna = implode("", $dnaFiltered);

    return $dna;
}

// DNA_strand("ATTGC"); // returns "TAACG"
DNA_strand("GTAT"); // returns "CATA"
