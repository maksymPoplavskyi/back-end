<?php

$login = $_POST['login'];
$password = $_POST['password'];
$fileNameUsers = 'users.txt';
$fileNameLogins = 'logins.txt';

$userData = serialize($_POST);

$fileUser = fopen($fileNameUsers, 'r');
$fileUserData = fread($fileUser, filesize($fileNameUsers));

$usersArr = explode(PHP_EOL, $fileUserData);

$arr = [];
foreach ($usersArr as $item) {
  $arr[] = explode(' ', $item);
}

foreach ($arr as $value) {

	if ($login == $value[0]  && trim($password) == trim($value[1])) {
	  echo 'success, your login = ' . $login;

	  if (file_exists($login)) {
		 $loginCount = fopen($login, 'r+');
		 $loginCountData = fread($loginCount, filesize($login));
		 $loginCountData++;

		 file_put_contents($login, $loginCountData);
		 fclose($loginCount);
	  } else {
		 file_put_contents($login, 1, FILE_APPEND);
	  }
	} else {
	  file_put_contents($fileNameLogins, $userData . PHP_EOL, FILE_APPEND);
	}
}