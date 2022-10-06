<?php
require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false, // 是否修改成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

if(empty($_POST['id']) or empty($_POST['name']) or empty($_POST['email'])) {
    $output['error'] = '欄位資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// TODO: 欄位資料要驗證

// 如果時間的字串無法轉換成 timestamp, 表示格式錯誤
if(strtotime($_POST['birthdate'])===false){
    $birthdate = null;
} else {
    $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));
}

// $hash = sha1( $_POST['email']. uniqid() );

// $sql = "UPDATE `member01` SET 
//     `name`=?,
//     `email`=?,
//     `mobile`=?,
//     `birthdate`=?
//     `password`=?,
//     `hash`=?,
//     `created_at`= NOW()

// WHERE `id`=?";

$id = $_SESSION['user']['id'];

$sql = "UPDATE `member01` SET `email` = ?, `name` = ?, `mobile` = ?, `birthdate` = ?  WHERE id = $id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['email'],
        
        $_POST['name'],
        
        $_POST['mobile'],
        
        $birthdate,

]);

if($stmt->rowCount()){
    $output['success'] = true;
    
} else {
    $output['error'] = 'false';
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);


