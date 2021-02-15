<?php
    $dsn = 'mysql:host=localhost;dbname=todolist';
    $username = 'root';

    try {
    $db = new PDO($dsn, $username);
    } catch (PDOException $err) {
    $error_message = 'Database Error: ';
    $error_message .= $err->getMessage();
    echo $error_message;
    exit();
    }
?>