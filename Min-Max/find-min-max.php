<?php

function findMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        if ($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    return $min;
}
function findMax($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        if ($max < $arr[$i]){
            $max = $arr[$i];
        }
    }
    return $max;
}

$nums = [];
for ($i = 0; $i < 100; $i++){
    $nums[$i] = rand(0, 100);
}
foreach ($nums as $num){
    echo $num . " ";
}

$minValue = findMin($nums);
$maxValue = findMax($nums);
echo "<br>";
echo "the minimum value is: " . $minValue;
echo "<br>";
echo "The maximum value is: " . $maxValue;