<?php
require __DIR__ . '/parts/connect_db.php';

//宣告購物車是陣列
if (!isset($_SESSION['room_order'])) {
    $_SESSION['room_order'] = [];
}

//如果有設定的話，就把他的值轉換成整數
$sid = isset($_GET['room_id']) ? intval($_GET['room_id']) : 0;
$num = isset($_GET['num']) ? intval($_GET['num']) : 0;
$days = isset($_GET['days']) ? intval($_GET['days']) : 0;
$day1 = isset($_GET['day1']) ? $_GET['day1'] : '';
$day2 = isset($_GET['day2']) ? $_GET['day2'] : '';
$totalNum = isset($_GET['totalNum']) ? intval($_GET['totalNum']) : 0;
// $detailDate = isset($_GET['detailDate']) ? $_GET['detailDate'] : '';


// C: 加到購物車, sid, num
// R: 查看購物車內容
// U: 更新, sid, num
// D: 移除項目, sid

//購物車紀錄產品的sid(primary key)&產品的數量(num)

//如果有設定
if (!empty($sid)) {

    if (!empty($num)) {
        // 新增或變更

        // $_SESSION['detailDate'] = $detailDate;
        $_SESSION['total_num'] = $totalNum;
        $_SESSION['order_day1'] = $day1;
        $_SESSION['order_day2'] = $day2;
        $_SESSION['days'] = (strtotime($day2) - strtotime($day1)) / (24 * 60 * 60);

        if (!empty($_SESSION['room_order'][$sid])) {
            // 如果項目已經存在，不用再查資料表，直接變更
            $_SESSION['room_order'][$sid]['num'] = $num;

        } else {
            // 新增
            // TODO: 檢查資料表是不是有這個商品

            $room = $pdo->query("SELECT * FROM room_info WHERE sid=$sid")->fetch();
            if (!empty($room)) {
                $room['num'] = $num;  // 先把數量放進去
                $_SESSION['room_order'][$sid] = $room;


            }
        }
    } else {
        // 刪除項目
        unset($_SESSION['room_order'][$sid]);
    }
}

echo json_encode($_SESSION['room_order']);
