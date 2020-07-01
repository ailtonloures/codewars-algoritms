<?php

function reverseLetter(string $str)
{
    return strrev(preg_replace('/[^a-z]/', '', $str));
}

reverseLetter("([/ozl_rtcj_gj(n/_ictl");
// ([/ozl_rtcj_gj(n/_ictl'
// l-hzl omwsjhbfvixjzkp