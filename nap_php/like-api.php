<?php
require __DIR__ . '/parts/connect_db_vera.php';

$output = [
    'success' => false,
    'handle' => '',
    'error' => 'no login',
];

if(empty($_SESSION['user']['id'])){
    echo json_encode($output);
    exit;
}

$member_id = $_SESSION['user']['id'];

if(empty($_GET['like_type']) or  empty($_GET['item_sid']) ){
    $output['error'] = 'params !!';
    echo json_encode($output);
    exit;
}
$like_type = intval($_GET['like_type']);
$item_sid = intval($_GET['item_sid']);

// toggle
$sql = "SELECT * FROM likes WHERE member_sid=$member_id AND like_type=$like_type AND item_sid=$item_sid";
$row = $pdo->query($sql)->fetch();

if(empty($row)){
    // insert
    $sql = "INSERT INTO `likes`(`member_sid`, `like_type`, `item_sid`, `created_at`) VALUES (
        $member_id,
        $like_type,
        $item_sid, NOW())";
    $stmt = $pdo->query(($sql));
    $output['handle'] = 'insert';
    $output['success'] = $stmt->rowCount() ? true : false;
    $output['error'] = '';

} else {
    // delete
    $sql = "DELETE FROM `likes` WHERE sid=". $row['sid'];
    $stmt = $pdo->query(($sql));
    $output['handle'] = 'delete';
    $output['success'] = $stmt->rowCount() ? true : false;
    $output['error'] = '';
}

echo json_encode($output);
exit;
/*
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

*/


