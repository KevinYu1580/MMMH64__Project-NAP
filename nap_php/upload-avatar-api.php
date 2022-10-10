<?php
require __DIR__ . '/parts/connect_db.php';

$folder = __DIR__. '/img/member/profile-image/'; // 上傳檔案的資料夾

$extMap = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
];

$output = [
    'success' => false,
    'error' => '',
    'data' => [],
    'files' => $_FILES, // 除錯用
];

if(empty($_FILES['avatar'])){
    $output['error'] = '沒有上傳檔案';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// 副檔名對應
$ext = $extMap[$_FILES['avatar']['type']];
if(empty($ext)){
    $output['error'] = '檔案格式錯誤: 要 jpeg, png';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// 隨機檔名
$filename = md5($_FILES['avatar']['name']. uniqid()). $ext;
$output['filename'] = $filename;

// 將上傳檔名即時更新到SESSION，navbar圖像才能及時更新
$_SESSION['user']['userPic'] = $filename;




// 接收前端傳來的 DataURL 字串
// $imagestring = trim($_REQUEST["imagestring"]);

// // 解析 DataURL
// $token = explode(',', $bank_image);
// // 取出圖片的資料並將 base64 還原成二進位格式
// $image = base64_decode($token[1]);

// // 以下為 PHP 將 Blob 放入Mysql的方法
// $null = NULL;
// $sql = 'insert into preview_image(image) values(?)';
// $stmt = mysqli_prepare($conn, $sql);
// $stmt->bind_param('b', $null);
// $stmt->send_long_data(0, $image);
// $success = $stmt->execute();
// $stmt->close();



$id = intval($_GET['id']);

$sql = "UPDATE `member01` SET `avatar` = ? WHERE id = $id ";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $filename
    
    
]);



if($stmt->rowCount()){
    $output['success'] = true;
    
} else {
    $output['error'] = '資料沒有修改';
}


// echo json_encode($output, JSON_UNESCAPED_UNICODE);

// $sql = "UPDATE `member_pet_card` SET `img` = $filename WHERE sid = 3";
// $stmt = $pdo->prepare($sql);

if(! 
    move_uploaded_file(
        $_FILES['avatar']['tmp_name'],
        $folder. $filename
    )

    


) {
    $output['error'] = '無法移動上傳檔案, 注意資料夾權限問題';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// $sid = intval($_GET['sid']);

// $sql = "UPDATE `member_pet_card` SET `img` = $filename WHERE sid = 3";

// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//         $_FILES[$filename] 
        
// ]);

$output['success'] = true;

echo json_encode($output, JSON_UNESCAPED_UNICODE);