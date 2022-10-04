<?php
require __DIR__ . '/parts/connect_db.php';

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



// $sql_t = "SELECT * FROM member01 WHERE id=?";
// $stmta = $pdo->prepare($sql_t);
// $stmta->execute([ $_POST['id'] ]);
// $rowa = $stmta->fetch();

// // 2. 以 email 去查詢資料
// if(empty($rowa)){
//     $output['error'] = '帳號或密碼錯誤';
//     $output['code'] = 400;
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

// // 3. 驗證密碼
// if( password_verify($_POST['password'], $rowa['password']) ){
//     // 密碼是正確的
//     $output['success'] = true;
//     $_SESSION['user'] = [
//         'id' => $row['id'],
//         'email' => $row['email']
//     ];
    

// } else {
//     // 密碼是錯誤的
//     $output['error'] = '帳號或密碼錯誤';
//     $output['code'] = 420;
    

// }
// TODO: 欄位資料要驗證


// 如果時間的字串無法轉換成 timestamp, 表示格式錯誤


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

$sql = "UPDATE `member01` SET  `password` = ?  WHERE id = $id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    password_hash($_POST['password'], PASSWORD_DEFAULT),

]);

if($stmt->rowCount()){
    $output['success'] = true;
    
} else {
    $output['error'] = '資料沒有修改';
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);


