<?php

/**
 * Retorna o item que aparece uma única vez no array
 * 
 * @param array $values
 * @return mixed
 */
function stray(array $values)
{
    return array_search(1, array_count_values($values));
}

stray([17, 17, 3, 17, 17, 17, 17] );