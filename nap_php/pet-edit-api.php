<?php
require __DIR__. '/parts/connect_db.php';

$output = [
    'success' => false, // 是否修改成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

if(empty($_POST['sid']) or empty($_POST['name'])) {
    $output['error'] = '欄位資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// TODO: 欄位資料要驗證

// 如果時間的字串無法轉換成 timestamp, 表示格式錯誤
// if(strtotime($_POST['birthdate'])===false){
//     $birthdate = null;
// } else {
//     $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));
// }

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

$sid = intval($_GET['sid']);

// $id = $_SESSION['user']['id'];

$sql = "UPDATE `member_pet_card` SET `name` = ?, `type` = ?, `gender` = ?, `age` = ?, `card_style` = ? WHERE sid = $sid";



$stmt = $pdo->prepare($sql);
$stmt->execute([
        $_POST['name'],
        $_POST['type'],
        $_POST['gender'],
        $_POST['age'],
        $_POST['card_style']

    
        
    
]);

if($stmt->rowCount()){
    $output['success'] = true;
    
} else {
    $output['error'] = '資料沒有修改';
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);


