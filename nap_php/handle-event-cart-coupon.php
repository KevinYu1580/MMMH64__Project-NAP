<?php
if(! isset($_SESSION)){
    session_start();
}

$sid = isset($_GET['sid']) ? $_GET['sid'] : '';
$coupon = isset($_GET['coupon']) ? $_GET['coupon'] : '';

$_SESSION['evt-coupon']['value'] = $coupon;
$_SESSION['evt-coupon']['sid'] = $sid;

echo json_encode($_SESSION['evt-coupon']['value']);
