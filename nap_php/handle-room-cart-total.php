<?php
if(! isset($_SESSION)){
    session_start();
}

$total = isset($_GET['room_order_origin_price']) ? $_GET['room_order_origin_price'] : '';
$discount_tol = isset($_GET['room_order_price']) ? $_GET['room_order_price'] : '';
$deposit = isset($_GET['room_order_deposit']) ? $_GET['room_order_deposit'] : '';

if (!empty($total)) {

    $_SESSION['rm-total']['total'] = $total;
    $_SESSION['rm-total']['discount_tol'] = $discount_tol;
    $_SESSION['rm-total']['deposit'] = $deposit;
}

echo json_encode($_SESSION['rm-total']['total'],['rm-total']['discount_tol']);
?>