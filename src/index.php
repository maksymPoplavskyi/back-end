<?php

// lms homework

// /*
echo '<h1>lms homework:</h1>';

$users = []; 

$users["5"] = ["name" => "id1", "email" => "user5.com"];
$users["4"] = ["name" => "id2", "email" => "user4.com"];
$users["2"] = ["name" => "id3", "email" => "user2.com"];
$users["1"] = ["name" => "id4", "email" => "user1.com"];
$users["6"] = ["name" => "id5", "email" => "user6.com"];
$users["7"] = ["name" => "id6", "email" => "user7.com"];
$users["3"] = ["name" => "id7", "email" => "user3.com"];


echo '<pre>' . '<h4>Массив:</h4>';
print_r($users);
echo '</pre>';

echo '<br><h4>общее количество пользователей: </h4>' . count($users);

echo '<pre>'. '<br><h4>отсортированный массив по убыванию id:</h4>';
krsort($users);
print_r($users);
echo '</pre>';

echo '<br><h4>вывести первый элемент: </h4>';
var_dump(end($users));

reset($users);

echo '<br><br><h4>вывести последний элемент: </h4>';
var_dump(current($users));

echo '<br><br><h4>второй элемент: </h4>';
end($users);
print_r(prev($users));

echo '<br><br><h4>пред последний элемент: </h4>';
reset($users);
print_r(next($users));

echo '<br><br><h4>минимальный id: </h4>';
echo '<pre>';
print_r((array_pop($users)));
echo '</pre>';

echo '<pre>' . '<br><h4>новый массив без минимального id: </h4>';
print_r($users);
echo '</pre>';

// */

// telega baza
echo '<h1>telega homework</h1>';

echo '<h2>условие задач:</h2>';

$arr = array_fill(1, rand(10, 100), $value);
$i = 0;

foreach ($arr as &$value) {
    array_values($arr)[$i] = random_int(-100, 100);
    $i ++;
}

echo '<pre>';
print_r($arr);
echo '</pre>';

// task №1

echo '<h1>Task #1</h1>';

echo '<h4>только парные элементы:</h4>';

$i = 1;

foreach ($arr as $key => &$value) {
    if ($key % 2 != 0) {
        unset($arr[$key]);
    }
    $i ++;
}

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<h4>самое большее значение элемента:</h4>';
print_r(max($arr));

// task №2



?>