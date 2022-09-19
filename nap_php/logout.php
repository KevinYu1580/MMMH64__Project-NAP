<?php

session_start();

unset($_SESSION['user']); // 清除某個 session 變數

$comeFrom = 'login.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

header('Location: '. $comeFrom);  // 頁面轉向 redirect