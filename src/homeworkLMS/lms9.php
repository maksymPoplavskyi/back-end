<?php

$users = [];
$users[0] = ['name' => 'tolik', 'age' => '25', 'land' => 'ru'];
$users[1] = ['name' => 'kostik', 'age' => '12', 'land' => 'en'];
$users[2] = ['name' => 'petya', 'age' => '33', 'land' => 'ua'];
$users[3] = ['name' => 'vasya', 'age' => '28', 'land' => 'ru'];
$users[4] = ['name' => 'kostik', 'age' => '11', 'land' => 'en'];
$users[5] = ['name' => 'petya', 'age' => '26', 'land' => 'ua'];
$users[6] = ['name' => 'vasya', 'age' => '49', 'land' => 'ru'];
$users[7] = ['name' => 'petya', 'age' => '26', 'land' => 'ru'];
$users[8] = ['name' => 'ashot', 'age' => '69', 'land' => 'kz'];
$users[9] = ['name' => 'arsen', 'age' => '15', 'land' => 'am'];

//выведите на экран имена пользователей, которые встречаются более одного раза и количество повторений имени;

$frequencyNames = [];
foreach ($users as $user) {
  foreach ($frequencyNames as $key => $value) {
	 if ($user['name'] == $key) {
		$frequencyNames[$key]++;
		continue 2;
	 }
  }
  $frequencyNames[$user['name']] = 1;
}

print_r($frequencyNames);

foreach ($frequencyNames as $key => $value) {
  if ($value >= 2) {
    echo 'name: ' . $key . ' - ' . $value . ' times repeating; ';
  }
}

//разделите пользователей на массивы по языку, каждый массив будет содержать пользователей с одинаковым языком

$userLength = null;
foreach ($users as $key) {
  $userLength++;
}

$englishUsers = [];
$russianUsers = [];
$ukrainianUsers = [];
for ($i = 0; $i < $userLength; $i++) {
  if ($users[$i]['land'] == 'ru') {
    $russianUsers[] = $users[$i];
  } elseif ($users[$i]['land'] == 'ua') {
    $ukrainianUsers[] = $users[$i];
  } elseif ($users[$i]['land'] == 'en') {
    $englishUsers[] = $users[$i];
  }
}

print_r($englishUsers);
print_r($russianUsers);
print_r($ukrainianUsers);

//с помощью цикла сформируйте новый массив, содержащий пользователей в обратном порядке от исходного массива (первый пользователь станет последним, второй — предпоследним и т.д.)


// если номерованный массив:
$reversalUsers = [];
for ($i = $userLength -1; $i >= 0; $i--) {
  $reversalUsers[$i] = $users[$i];
}

print_r($reversalUsers);

//если не номерованный массив

$users = [];
$users['a'] = ['name' => 'tolik', 'age' => '25', 'land' => 'ru'];
$users['b'] = ['name' => 'kostik', 'age' => '12', 'land' => 'en'];
$users['c'] = ['name' => 'petya', 'age' => '33', 'land' => 'ua'];
$users['d'] = ['name' => 'vasya', 'age' => '28', 'land' => 'ru'];

$keysUsers = $reversalUsers = [];

foreach ($users as $key => $value) {
  $keysUsers[] = $key;
}

for ($i = count($keysUsers) - 1; $i >= 0; $i--) {
  $reversalUsers[$keysUsers[$i]] = $users[$keysUsers[$i]];
}

print_r($reversalUsers);