<?php
require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false, // 是否修改成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

if (empty($_POST['password'])) {
    $output['error'] = '欄位資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}




$id = $_SESSION['user']['id'];

$sql = "UPDATE `member01` SET  `password` = ?  WHERE id = $id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    password_hash($_POST['password'], PASSWORD_DEFAULT),

]);

if ($stmt->rowCount()) {
    $output['success'] = true;
} else {
    $output['error'] = '資料沒有修改';
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);
