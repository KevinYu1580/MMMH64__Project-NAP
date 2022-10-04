<?php

//---- nap主機 -----

$db_host = '192.168.33.108';
$db_user = 'nap';
$db_pass = '123456789';
$db_name = 'new_nap';




//---- chiyin DB -----

// $db_host = 'localhost';
// $db_name = 'nap_cy_v2';
// $db_user = 'chiyin_niyihc';
// $db_pass = 'Admin_chiyin0209';




//---- nora DB -----

// $db_host = 'localhost';
// $db_user = 'nora';
// $db_pass = 'nap2321';
// $db_name = 'nap_n';




//---- kevin DB -----

// $db_host='localhost';
// $db_user='kevin';
// $db_pass='123456789';
// $db_name='nap_k';



//---- penny DB -----

// $db_host = 'localhost';
// $db_user = 'penny';
// $db_pass = 'Aa123456';
// $db_name = 'nap_penny';




//---- vera DB -----
// $db_host='localhost';
// $db_user='Vera6690';
// $db_pass='Aa123456';
// $db_name='nap_vera';




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
