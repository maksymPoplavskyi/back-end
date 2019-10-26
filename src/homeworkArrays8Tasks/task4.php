<?php
// task 4 - найти первый отрицательный элемент в массиве и подсчитать модуль суммы всех значений после

$arrayLength = rand(10, 100);
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
  $arr[$i] = random_int(-100, 100);
}

print_r($arr);

$sum = 0;
for ($i = 0; $i < $arrayLength; $i++) {
  if ($arr[$i] < 0) {
	 $i++;
	 for ($n = $i; $n < $arrayLength; $n++) {
		if ($arr[$n] < 0) {
		  $sum += $arr[$n] * -1;
		} else {
		  $sum += $arr[$n];
		}
	 }
	 break;
  }
}

print_r($sum);

?>