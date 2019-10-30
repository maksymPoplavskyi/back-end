<?php

// lms homework 8

$users = [];

$users[0] = ['name' => 'tolik', 'age' => '25', 'land' => 'ru'];
$users[1] = ['name' => 'kostik', 'age' => '27', 'land' => 'en'];
$users[2] = ['name' => 'petya', 'age' => '26', 'land' => 'ua'];
$users[3] = ['name' => 'vasya', 'age' => '28', 'land' => 'ru'];

$firstUser = current($users);
$lastUser = end($users);
$firstUser['land'] == $lastUser['land'] ? print_r('привет' . $firstUser['name'] . 'и' . $lastUser['name']) : print_r('vecher v haty');

?>