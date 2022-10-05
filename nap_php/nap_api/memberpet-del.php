<?php

// echo $_SERVER['HTTP_REFERER'];  // 人從哪裡來
// exit;

require '../parts/connect_db.php';

if(isset($_GET['sid'])){
    $sid =  intval($_GET['sid']);
    // $sql = "DELETE FROM member_pet_card WHERE sid = $sid ";
    $sql = "DELETE FROM member_pet_card WHERE sid = $sid ";
    $pdo->query($sql);
}

$comeFrom = 'member-pet.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

header('Location: '. $comeFrom);
