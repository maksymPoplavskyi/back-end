<?php

// task8 - поменять местами макс и мин значения

$arrayLength = rand(10, 100);
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
  $arr[] = random_int(-100, 100);
}

$minValue = 0;
$maxValue = 0;
$container = null;
foreach ($arr as $key => $value) {
  if ($minValue > $value) {
	 $minValue = $value;
  }
  if ($maxValue < $value) {
	 $maxValue = $value;
  }
}

print_r($arr);
echo 'min: ' . $minValue . '; max: ' . $maxValue . '; ';

foreach ($arr as $key => $value) {
  if ($value == $maxValue) {
	 $container = $value;
	 foreach ($arr as $key1 => $value1) {
		if ($value1 == $minValue) {
		  $arr[$key] = $minValue;
		  $arr[$key1] = $container;
		  break;
		}
	 }
  }
}
print_r($arr);