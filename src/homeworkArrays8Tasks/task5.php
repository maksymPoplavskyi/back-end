<?php

$arrayLength = rand(10,10); // 10, 100
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
  $arr[$i] = random_int(-10,10);
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

$sum = 0;
$keyCount = 0;
foreach ($arr as $key => $value) {
  if ($value == $minValue) {
    $key++;
	 for ($i = $key; $i < $arrayLength; $i++) {
		if ($arr[$i] == $maxValue) {
		  break;
		} else {
		  $sum += $arr[$i];
		}
	 }
  } elseif ($value == $maxValue) {
	  $key++;
	  for ($i = $key; $i < $arrayLength; $i++) {
	    if ($arr[$i] == $minValue) {
	      break;
		 } else {
	      $sum += $arr[$i];
		 }
	  }
  	}
}

print_r($sum);

?>