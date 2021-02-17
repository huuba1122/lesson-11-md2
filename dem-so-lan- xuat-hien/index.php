<?php

function countTimes($arr, $number){
    $count = 0;
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] == $number){
            $count++;
        }
    }
    return $count;
}
//$Times = countTimes([1,1,1,2,3,4,2,242,42,1,1], 1);

$nums = array();
for ($i = 0; $i < 100; $i++){
    $nums[$i] = rand(1, 100);
}

foreach ($nums as $num){
    echo $num. " ";
}

$number = 1;
$count = countTimes($nums, $number);
echo "<br>";
echo "So lan xua hien cua so " . $number. " la ".$count." lan";