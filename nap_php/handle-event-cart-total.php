<?php
if(! isset($_SESSION)){
    session_start();
}

$total = isset($_GET['event_order_origin_price']) ? $_GET['event_order_origin_price'] : '';
$discount_tol = isset($_GET['event_order_price']) ? $_GET['event_order_price'] : '';

if (!empty($total)) {

    $_SESSION['evt-total']['total'] = $total;
    $_SESSION['evt-total']['discount_tol'] = $discount_tol;
}

echo json_encode($_SESSION['evt-total']['total'],['evt-total']['discount_tol']);
?>