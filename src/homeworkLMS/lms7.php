<?php

// lms homework 7

$users = [];
$users["5"] = ["name" => "id1", "email" => "user5.com"];
$users["4"] = ["name" => "id2", "email" => "user4.com"];
$users["2"] = ["name" => "id3", "email" => "user2.com"];
$users["1"] = ["name" => "id4", "email" => "user1.com"];
$users["6"] = ["name" => "id5", "email" => "user6.com"];
$users["7"] = ["name" => "id6", "email" => "user7.com"];
$users["3"] = ["name" => "id7", "email" => "user3.com"];

echo 'Массив: ';
print_r($users);

echo 'общее значение: ' . count($users);

echo 'по убыванию';
krsort($users);
print_r($users);

echo ' первый элемент: ';
print_r(current($users));

echo ' последний элемент: ';
print_r(end($users));

echo 'пред последний элемент: ';
print_r(prev($users));

reset($users);

echo 'второй элемент: ';
current($users);
print_r(next($users));

echo 'мин id: ';
print_r((array_pop($users)));

echo 'без минимального id: ';
print_r($users);

?>