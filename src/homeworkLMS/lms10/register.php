<?php

$login = $_POST['login'];
$password = $_POST['password'];
$fileNameUsers = 'users.txt';
$fileNameLogins = 'logins.txt';

$userData = serialize($_POST);

file_put_contents($fileNameLogins, $userData . PHP_EOL, FILE_APPEND);

$file = fopen('logins.txt', 'r+');

$fileData = fread($file, filesize('logins.txt'));

$users = explode(PHP_EOL, $fileData);
echo '<pre>';
print_r($users);

//header('Location: /');