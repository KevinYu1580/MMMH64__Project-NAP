<?php
require __DIR__. '/parts/connect_db.php';

$id = $_SESSION['user']['id'];

$sql = "INSERT INTO `coupon`(
    `member_sid`,
    `valid_time`, 
    `discount`, 
    `coupon_status`
    `coupon_none`
    
    ) VALUES (
        $id,
        NOW(),
        '200',
        '0',
        '活動禮折價200元'
    )";

$stmt = $pdo->query($sql);
if($stmt->rowCount()){
    $output['success'] = true;
    
} else {
    $output['error'] = '資料沒有修改';
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);

