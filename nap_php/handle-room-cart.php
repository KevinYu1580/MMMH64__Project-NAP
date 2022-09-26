<?php
require __DIR__ . '/parts/connect_db_cy.php';

//宣告購物車是陣列
if(! isset($_SESSION['room-cart'])){
    $_SESSION['room-cart'] = [];
}

//如果有設定的話，就把他的值轉換成整數
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;

// C: 加到購物車, sid, qty
// R: 查看購物車內容
// U: 更新, sid, qty
// D: 移除項目, sid

//購物車紀錄產品的sid(primary key)&產品的數量(qty)

//如果有設定
if(! empty($sid)) {

    if(! empty($qty)) {
        // 新增或變更

        if(!empty($_SESSION['room-cart'][$sid])){
            // 如果項目已經存在，不用再查資料表，直接變更
            $_SESSION['room-cart'][$sid]['qty'] = $qty;
        } else {
            // 新增
            // TODO: 檢查資料表是不是有這個商品

            $room = $pdo->query("SELECT * FROM event_detail WHERE sid=$sid")->fetch();
            if(! empty($room)){
                $room['qty'] = $qty;  // 先把數量放進去
                $_SESSION['room-cart'][$sid] = $room;
            }
        }
    } else {
        // 刪除項目
        unset($_SESSION['room-cart'][$sid]);
    }
}

echo json_encode($_SESSION['room-cart']);