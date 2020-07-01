<?php

function findIt(array $seq)
{
    $res = 0;  
    for ($i = 0; $i < sizeof($seq); $i++)      
        $res = $res ^ $seq[$i]; 
      
    return $res;
}

findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);
