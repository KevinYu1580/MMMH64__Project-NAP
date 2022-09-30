<?php

require '../parts/connect_db_kevin.php';

$memberId = !empty($_POST['memberId']) ? $_POST['memberId'] : 1;
// 測試會員帳號ID為1
$petSelec = !empty($_POST['petSelec']) ? str_replace ('petSelec','',$_POST['petSelec']) : NULL;
$boardSelec = !empty($_POST['boardSelec']) ? str_replace ('boardSelec','',$_POST['boardSelec']) : NULL;
$headline = !empty($_POST['headline']) ? $_POST['headline'] : NULL;
$content = !empty($_POST['content']) ? $_POST['content']: NULL;
$picture = !empty($_POST['picture']) ? $_POST['picture']: NULL;


$sql = sprintf("INSERT INTO chat
(po_sid,
article_cate,
tag,
title,
content, 
articlePic_id
)
VALUES 
(
'$memberId',
'$petSelec',
'$boardSelec',
'$headline',
'$content',
'$picture'
)");

$pdo->query($sql);



$output = [
    $memberId,
    $petSelec,
    $boardSelec,
    $headline,
    $content,
    $picture
];


echo json_encode ($output) ;



// header('Location: ./forum_event.php');



