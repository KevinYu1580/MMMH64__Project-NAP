<?php

require '../parts/connect_db.php';


$output = [
    'success' => false,
    'error' => '',
];

$memberId = !empty($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 1;
// 測試會員帳號ID為1
$petSelec = !empty($_POST['petSelec']) ? str_replace ('petSelec','',$_POST['petSelec']) : NULL;
$boardSelec = !empty($_POST['boardSelec']) ? str_replace ('boardSelec','',$_POST['boardSelec']) : NULL;
$headline = !empty($_POST['headline']) ? $_POST['headline'] : NULL;
$content = !empty($_POST['content']) ? $_POST['content']: NULL;


// 如果沒上傳圖片，就帶入預設圖片
$picture_name = !empty($_FILES["picture"]['name']) ? $_FILES["picture"]['name'] : 'paw_defaultBG.svg';
// $picture_name = $_FILES["picture"]['name'];



$filepath = __DIR__. "/../img/chatchat/event/{$picture_name}";
if(! empty($_FILES)){
    if( move_uploaded_file($_FILES["picture"]['tmp_name'], $filepath)){
        $output['success'] = true;
    }
    else{
        $output['error'] = 'cannot move file';
    }
}


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
'$picture_name'
)");

$pdo->query($sql);


// if(is_array($_FILES)) {
//     if(is_uploaded_file($_FILES['picture']['tmp_name'])) {
//         $sourcePath = $_FILES['picture']['tmp_name'];
//         $targetPath = "../img/chatchat/event".$_FILES['picture']['name'];
//         move_uploaded_file($sourcePath,$targetPath);
//     }
// }


$output['postData'] = $_POST;
$output['files'] = $_FILES;


echo json_encode($output, JSON_UNESCAPED_UNICODE);

