<?php

// echo $_SERVER['HTTP_REFERER'];  // 人從哪裡來
// exit;

require '../parts/connect_db.php';

if(isset($_GET['sid'])){
    $sid =  intval($_GET['sid']);
    $sql = "DELETE FROM likes WHERE likes_sid=$sid";
    $pdo->query($sql);
}

$comeFrom = 'love-chat.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

header('Location: '. $comeFrom);
