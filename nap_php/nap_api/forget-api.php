<?php
require '../parts/connect_db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
];

// 1. 先欄位資料是否足夠
if(empty($_POST['email'])){
    $output['error'] = '參數不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


$sql = "SELECT * FROM member01 WHERE email=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([ $_POST['email'] ]);
$row = $stmt->fetch();

// 2. 以 email 去查詢資料
if(empty($row)){
    $output['error'] = '沒有這個帳號，去前往註冊吧';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

if(($_POST['email'])){
    $output['success'] = '成功';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;



}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
