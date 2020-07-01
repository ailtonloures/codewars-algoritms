<?php

function stray(array $numbers)
{
    return array_search(1, array_count_values($numbers));
}

stray([17, 17, 3, 17, 17, 17, 17] );