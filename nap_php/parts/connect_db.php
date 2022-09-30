<?php

$db_host = 'localhost';
$db_user = 'nap';
$db_pass = '123456789';
$db_name = 'nnn_57';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8"; // data source name

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try{
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch(PDOException $ex) {
    echo "Exceprion: ". $ex->getMessage();
}

if(! isset($_SESSION)){
    session_start();
}
