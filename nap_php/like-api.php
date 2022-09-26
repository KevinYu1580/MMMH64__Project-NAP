<?php
require __DIR__ . '/parts/connect_db_vera.php';


$id=$_SESSION['user']['id'];
$sql = "SELECT* FROM   `member01` WHERE id=$id";
$r = $pdo->query($sql)->fetch();
if(!empty($r)){
    header('Location:login.php');
    exit;
}


if(! isset($_SESSION['likeBtn'])){
    $_SESSION['likeBtn'] = [];
}

$sid = isset($_GET['pet_id']) ? intval($_GET['pet_id']) : 0;
$likeBtn = isset($_GET['like_type']) ? intval($_GET['like_type']) : 1;


if(! empty($likeBtn)) {

    if(! empty($likeBtn)) {
        
        if(!empty($_SESSION['likeBtn'][$sid])){
            // 已存在, 變更
            $_SESSION['likeBtn'][$sid];
        } else {
            
            $row = $pdo->query("SELECT * FROM pet_card WHERE pet_id =$sid")->fetch();
            if(! empty($row)){
                $_SESSION['likeBtn'][$sid] = $row;
            }
        }
    } else {
        // 刪除項目
        unset($_SESSION['likeBtn'][$sid]);
    }
}




