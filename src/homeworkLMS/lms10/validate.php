<?php

$file = fopen('homeworkLMS/lms10/login.txt', 'r');

$fileData = fread($file, filesize('homeworkLMS/lms10/login.txt'));

$users = explode(PHP_EOL, $fileData);

print_r($users);


foreach ($users as $user) {
  $user = unserialize($user);
  // удалить всех кто старше 1000 лет и записать их в файл отдельный
  // результат два файла, в первом оставшиеся юзера
  // во втором у нас те кого мы удалили.
  // плюс аналогичное сделать через filegetcontents();
  echo $user['age'] . PHP_EOL;
}

