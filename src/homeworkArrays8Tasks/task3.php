<?php
// task 3 - вытащить 2 мин и 2 макс значения

$arrayLength = rand(10, 100);
$arr = [];

for ($i = 0; $i < $arrayLength; $i++) {
  $arr[$i] = random_int(-100, 100);
}

echo '<br>';
print_r($arr);

$minValue = 0;
$preMinValue = 0;
$maxValue = 0;
$preMaxValue = 0;

foreach ($arr as $key => $value) {
  if ($minValue > $value) {
	 $minValue = $value;
  }

  if ($maxValue < $value) {
    $maxValue = $value;
  }
}

foreach ($arr as $key => $value) {
  if ($preMinValue > $value && $value != $minValue) {
    $preMinValue = $value;
  }

  if ($preMaxValue < $value && $value != $maxValue) {
    $preMaxValue = $value;
  }
}

echo 'min: ';
print_r($minValue);
echo ' & premin: ';
print_r($preMinValue);
echo ' / max: ';
print_r($maxValue);
echo ' & premax: ';
print_r($preMaxValue);

?>

