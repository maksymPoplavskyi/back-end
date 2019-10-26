<?php

// task 1 - найти максимальное значение среди элементов массива с четными индексами

$arrayLength = random_int(10, 100);
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
    $arr[] = random_int(-100, 100);
}

$maxValue = $arr[0];
foreach ($arr as $key => $value) {
    if ($value % 2 === 0 && $value > $maxValue) {
        $maxValue = $value;
    }
}

echo '<br>';
print_r($maxValue);

?>