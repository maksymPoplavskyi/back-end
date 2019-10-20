<?php
 


    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $language = [
        'ru' => 'russian',
        'en' => 'english',
        'ua' => 'ukrainian'
    ];

    require_once 'index.phtml';
?>