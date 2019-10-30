<?php

//task 2 - вывести значения меньше среднего арефметического

$arrayLength = random_int(10, 100);
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
    $arr[] = random_int(0, 1000);
}

$sumArr = 0;
for ($i = 0; $i < $arrayLength; $i++) {
    $sumArr += $arr[$i];
}

$averageArr = $sumArr/$arrayLength;
$newArr = [];
foreach ($arr as $key => $value) {
    if ($value < $averageArr) {
        $newArr[] = $value;
    }
}

print_r($sumArr);
echo '<br>';
print_r($averageArr);
echo '<br>';
print_r($newArr);

?>
