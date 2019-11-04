<?php

// task 1 - в переменной $date лежит дата формата '31-12-2020'. Преобразуйте эту дату в формат '2020.12.31'
$date = '31-12-2020';

$arrDate = explode('-', $date);

$newDate = "$arrDate[2].$arrDate[1].$arrDate[0]";
print_r($newDate); //2020.12.31

//task 2 - дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'
$expression = 'london is the capital of great britain';

$newExpression = ucwords($expression);
print_r($newExpression); // London Is The Capital Of Great Britain

// next try
$arr = explode(' ', $expression);
$newArr = [];
foreach ($arr as $item) {
  $newArr[] = ucfirst($item);
}
$expression = implode(' ', $newArr);
print_r($expression); //London Is The Capital Of Great Britain

//task 3 - дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 7 и меньше 12,
// то выведите пользователю сообщение о том, что пароль подходит, иначе: сообщение о том, что нужно придумать другой пароль
$password = 'йцукенгн12';

$passwordLength = mb_strlen($password);

if ($passwordLength > 7 && $passwordLength < 12) {
  echo 'пароль подходит';
} else {
  echo 'нужно придумать другой пароль';
}

//task 4 - дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
//Удалите из нее все цифры. В нашем случае должна получится строка 'abcbdefgh'

$string = '1a2b3c4b5d6e7f8g9h0';

$str2 = preg_replace('/[^a-zA-Zа-яА-Я]/ui', '', $string);
print_r($str2); // abcbdefgh

//next try
$arr = [];
for ($i = 0; $i < mb_strlen($string); $i++) {
  if (!is_numeric($string[$i])) {
	 $arr[] = $string[$i];
  }
}

$newString = implode('', $arr);
print_r($newString); // abcdefgh