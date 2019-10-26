<?php

// task 7 - определить какое значение встречается чаще всего

$arrayLength = rand(10, 100);
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
  $arr[] = rand(50, 75);
}

$newArr = [];
foreach ($arr as $key => $value) {
  $newArr[$value] = 0;
}

foreach ($arr as $key => $value) {
  $newArr[$value]++;
}

print_r($newArr);

$maxValue = 0;
foreach ($newArr as $key => $value) {
  if ($maxValue <= $value) {
	 $maxValue = $value;
  }
}

foreach ($newArr as $key => $value) {
  if ($value == $maxValue) {
	 print_r($key);
  }
}

?>