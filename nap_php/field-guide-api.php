<?php
require __DIR__ . '/parts/connect_db_vera.php';
$pageName = 'filed-guide'; // 頁面名稱

$perPage = 6;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$type = isset($_GET['type']) ? intval($_GET['type']) : 1; // dog
$gender = isset($_GET['gender']) ? intval($_GET['gender']) : 0; // male
$fur = isset($_GET['fur']) ? intval($_GET['fur']) : 0; // short hair
$old = isset($_GET['old']) ? intval($_GET['old']) : 1; // 0, 1, 2

$where = ' WHERE 1 ';


$where .= " AND `type`=$type ";
$where .= " AND `gender`=$gender ";
$where .= " AND `fur`=$fur ";
switch($old){
    case 0: 
        $where .= " AND `age`<=1 ";
        break;
    case 1: 
        $where .= " AND `age`>2 AND `age`<=7 ";
        break;
    case 2: 
        $where .= " AND `age`>8 ";
        break;
}




// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM pet_card $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf("SELECT * FROM `pet_card` $where ORDER BY `pet_id` ASC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    // echo $sql; exit;
    $rows = $pdo->query($sql)->fetchAll();
}

// $genderArray = ['男生','女生'];
// $furArray = ['短毛','長毛'];

// 篩選:取得種類資料


//位置開始---------

echo json_encode([
    'page' => $page,
    'perPage' => $perPage,
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'rows' => $rows,

    'type' => $type,
    'gender' => $gender,
    'fur' => $fur,
    'old' => $old,

], JSON_UNESCAPED_UNICODE);

