<?php

function printArr($arr)
{
    foreach ($arr as $item)
    {
        echo "<p>$item</p>";
    }
}

function largest($arr)
{
    if (empty($arr))
    {
        return NULL;
    }

    $max = $arr[0];

    for ($i = 1; $i < sizeof($arr); $i++)
    {
        if ($max < $arr[$i])
        {
            $max = $arr[$i];
        }
    }

    return $max;
}

function average($arr)
{
    $sum = 0;

    foreach ($arr as $num)
    {
        $sum += $num;
    }

    return $sum / sizeof($arr);
}