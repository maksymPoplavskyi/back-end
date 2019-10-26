<?php
// task 4 - найти первый отрицательный элемент в массиве и подсчитать модуль суммы всех значений после

$arrayLength = rand(10, 100);
$arr = [];
for ($i = 0; $i < $arrayLength; $i++) {
  $arr[$i] = random_int(-100, 100);
}

$firstNegativeValue = null;
for ($i = 0; $i < $arrayLength; $i++) {
  if ($arr[$i] < 0) {
    $firstNegativeValue = $arr[$i];
    break;
  }
}

$newArr = [];
$sum = 0;
for ($i = 0; $i < $arrayLength; $i++) {
  if ($arr[$i] == $firstNegativeValue) {
	 $i++;
	 for ($n = $i; $n < $arrayLength; $n++) {
		$newArr[] = $arr[$n];
	 }
  }
}

foreach ($newArr as $key => $value) {
  if ($value < 0) {
	 $value = $value * -1;
	 $sum += $value;
  } else {
	 $sum += $value;
  }
}

echo '<pre>';
print_r($newArr);
echo '<br>';
print_r($sum);

?>