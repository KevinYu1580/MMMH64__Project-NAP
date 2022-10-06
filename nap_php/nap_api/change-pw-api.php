<?php
require '../parts/connect_db.php';

$output = [
    'success' => false, // 是否修改成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

if(empty($_POST['password'])) {
    $output['error'] = '欄位資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}




$email = $_SESSION['email'];

$sql = "UPDATE `member01` SET  `password` = ?  WHERE `email` = ?";
// 333333
$stmt = $pdo->prepare($sql);
$stmt->execute([
    password_hash($_POST['password'], PASSWORD_DEFAULT),
    $email
]);

if($stmt->rowCount()){
    $output['success'] = true;
    
} else {
    $output['error'] = '資料沒有修改';
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);


