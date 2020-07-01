<?php

/**
 * Inverte qualquer tipo de string retirando todos os caracteres especiais e números
 *
 * @param string $str
 * @return string
 */
function reverseLetter(string $str): string
{
    return strrev(preg_replace('/[^a-z]/', '', $str));
}

reverseLetter("([/ozl_rtcj_gj(n/_ictl");
// ([/ozl_rtcj_gj(n/_ictl'
// l-hzl omwsjhbfvixjzkp
