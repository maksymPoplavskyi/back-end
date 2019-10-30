<?php

// найти среднее арефметическое положительных значений

$arrayLength = rand(10, 100);
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
  $arr[$i] = random_int(-100, 100);
}

$sum = 0;
$arrCount = 0;
foreach ($arr as $key => $value) {
  if ($value > 0) {
    $sum += $value;
    $arrCount++;
  }
}

$average = $sum/$arrCount;

echo 'sum = ' . $sum . '; count = ' . $arrCount . '; average= ' . $average . '; ';