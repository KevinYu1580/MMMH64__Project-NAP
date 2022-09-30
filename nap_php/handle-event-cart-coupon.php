<?php
if(! isset($_SESSION)){
    session_start();
}

$note = isset($_GET['coupon']) ? $_GET['coupon'] : '';
if (!empty($coupon)) {
    $_SESSION['coupon']['value'] = $coupon;
}

echo json_encode($_SESSION['coupon']['value']);
?>