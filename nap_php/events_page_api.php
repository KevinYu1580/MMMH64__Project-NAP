<?php
// require __DIR__ . '/parts/connect_db_cy.php';
require __DIR__ . '/parts/connect_db_penny.php';
$pageName = '活動檔期'; // 頁面名稱


// 每頁顯示幾筆活動資料
$perPage = 5;

// 顯示在url: page=?
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 浪浪套裝活動


$where = ' WHERE 1 ';  // 起頭
$where .= " AND `event_cate`=$cate ";



// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM event_detail $where ";
$total_events = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數用無條件進位
$totalPages = ceil($total_events / $perPage);


$events = [];

if ($total_events > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }

    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT * FROM `event_detail` %s ORDER BY `sid` ASC LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );
    $events = $pdo->query($sql)->fetchAll();
}

$myLikes = [];
if(isset($_SESSION['user'])){

    $sql = "SELECT item_sid event_sid FROM likes WHERE like_type=2 AND member_sid=". intval($_SESSION['user']['id']);
    $myLikes = $pdo->query($sql)->fetchAll();

}


echo json_encode([
    'page' => $page,
    'perPage' => $perPage,
    'total_events' => $total_events,
    'totalPages' => $totalPages,
    'events' => $events,

    'cate' => $cate,
    'myLikes' => $myLikes

], JSON_UNESCAPED_UNICODE);
