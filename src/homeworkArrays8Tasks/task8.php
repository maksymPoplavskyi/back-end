<?php

// task8 - поменять местами макс и мин значения

$arrayLength = rand(10, 10); // 10, 100
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
  $arr[] = random_int(-10, 10); // -100, 100
}

$minValue = 0;
$maxValue = 0;

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

$containerMinKey = null;
$containerMaxKey = null;

foreach ($arr as $key => $value) {
  if ($value == $maxValue) {
	 $containerMaxKey = $key;
  }
  if ($value == $minValue) {
	 $containerMinKey = $key;
  }
}

echo 'min key: ' . $containerMinKey . '; max key: ' . $containerMaxKey . '; ';

foreach ($arr as $key => $value) {
  if ($key == $containerMinKey) {
	 $arr[$key] = $maxValue;
  }
  if ($key == $containerMaxKey) {
	 $arr[$key] = $minValue;
  }
}

print_r($arr);