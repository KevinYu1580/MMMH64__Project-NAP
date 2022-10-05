<?php
require __DIR__. '/parts/connect_db.php';


$id = $_SESSION['user']['id'];
// $sid =  intval($_GET['sid']);

    $a_sql = "SELECT `member_sid` FROM `coupon` WHERE `member_sid`=?";
    $a_stmt = $pdo->prepare($a_sql);
    $a_stmt->execute([$id]);

    if($a_stmt->rowCount()) {
        $output['error'] = '此 email 已經註冊過';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  // 程式結束
    }


$valid_time = date('NOW()',strtotime('+2 days'));

$sql = "INSERT INTO `coupon`(
    `member_sid`,
    `valid_time`, 
    `discount`, 
    `coupon_status`,
    `coupon_name`
    
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

