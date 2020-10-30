<?php
define("DEBUGGING", true);
function loop($item)
{
    printf($item * 2 . "<br/>");
}

function even($item)
{
    return $item % 2 == 0;
}

function total($acc, $item)
{
    return $acc += $item;
}

$arr = [1, 2, 3, 4, 5, 8, 9];


$filter_arr = array_filter($arr, "even");

echo "filtered array";
array_map("loop", $filter_arr);
echo "normal array";
array_map("loop", $arr);
echo "reduce array";
$sum = array_reduce($arr, "total", 0);
echo $sum;
