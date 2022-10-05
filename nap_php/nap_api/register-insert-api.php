<?php 
require '../parts/connect_db.php';


$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];

if(isset($_POST['email'])) {

    // TODO: 欄位資料檢查

    $a_sql = "SELECT `email` FROM `member01` WHERE `email`=?";
    $a_stmt = $pdo->prepare($a_sql);
    $a_stmt->execute([ $_POST['email'] ]);

    if($a_stmt->rowCount()) {
        $output['error'] = '此 email 已經註冊過';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  // 程式結束
    }

    $hash = sha1( $_POST['email']. uniqid() );

    $sql = "INSERT INTO `member01`(
                      `email`, `password`, `name`,`mobile`,
                      `hash`,`birthdate`,
                      `created_at`
                      ) VALUES (
                                ?, ?, ?,
                                ?, ?, ?,
                                NOW()
                      )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['email'],
        password_hash($_POST['password'], PASSWORD_DEFAULT),
        $_POST['name'],

        $_POST['mobile'],
        $hash,
        $_POST['birthdate']
        
    ]);

    if($stmt->rowCount()){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '註冊發生錯誤';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
