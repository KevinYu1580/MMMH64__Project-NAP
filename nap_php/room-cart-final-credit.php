<?php
require __DIR__ . '/parts/connect_db.php';

$pageName = '訂房訂單明細'; // 頁面名稱

//確認會員登入
if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

//把訂單時區設定為台北
date_default_timezone_set("Asia/Taipei");

//訂單亂碼 https://www.twblogs.net/a/5baa90e82b7177781a0e4a82
$yCode = array('E', 'R');

$orderSn = $yCode[1] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));


//判斷狀態陣列
$payArray = ['信用卡', 'ATM 轉帳'];
$statusArray = ['已付款', '尚未付款'];

$paydate  = date('Y-m-d', strtotime('+2 days'));

$room_order_origin_price = $_SESSION['rm-total']['total'];
$room_order_price = $_SESSION['rm-total']['discount_tol'];
$room_order_note = $_SESSION['rm-note']['content'];
$room_order_deposit = $_SESSION['rm-total']['deposit'];
$check_in = $_SESSION['order_day1'];
$check_out = $_SESSION['order_day2'];

$room_order_id = $orderSn;

$order_sql = sprintf("INSERT INTO `room_order`( 
    `member_sid`,  /*int*/
    `coupon_sid`,  /*int*/
    `room_order_origin_price`,  /*chr*/
    `room_order_price`, /*chr*/
    `room_order_deposit`, /*chr*/
    `room_order_note`, /*chr*/
    `room_order_id`, /*chr*/
    `order_status`, /*int*/
    `payment_way`, /*int*/
    `check_in`, /*chr*/
    `check_out`, /*chr*/
    `payment_deadline`, 
    `create_at`
    ) VALUES (%s, %s, $room_order_origin_price, $room_order_price,'$room_order_deposit','$room_order_note', '$room_order_id', %s, %s,'$check_in', '$check_out', '$paydate', Now())", $_SESSION['user']['id'], $_SESSION['rm-coupon']['sid'], '0', '0');


$stmt = $pdo->prepare($order_sql);
$stmt->execute();


// echo json_encode([
//     $stmt->rowCount(), // 影響的資料筆數
//     $pdo->lastInsertId(), // 最新的新增資料主鍵
// ]);


$rm_order_sid = $pdo->lastInsertId(); // 訂單編號(room_order的sid)

// 訂單明細
$order_d_sql = "INSERT INTO `room_order_detail`(`room_order_sid`, `room_sid`,`room_quantity`, `stay_night`) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($order_d_sql);

foreach ($_SESSION['room_order'] as $key => $value) {
    $stmt->execute([
        $rm_order_sid,
        $value['sid'],
        $value['num'],
        $_SESSION['days'],
    ]);
}


//變更優惠券狀態
$coupon_sid = $_SESSION['rm-coupon']['sid'];
$order_c_sql ="UPDATE `coupon` SET `coupon_status`='1' WHERE `sid`='$coupon_sid'";
$stmt = $pdo->prepare($order_c_sql);
$stmt->execute();


// 訂單資料進入db後清除session中購物車內容
unset($_SESSION['room_order'], $_SESSION['rm-note'], $_SESSION['rm-total'], $_SESSION['rm-coupon'], $_SESSION['total_num'], $_SESSION['order_day1'], $_SESSION['order_day2'], $_SESSION['days']);

$member_id = $_SESSION['user']['id'];

$sql = "SELECT * FROM `room_order`
LEFT JOIN coupon on coupon.sid = room_order.coupon_sid
LEFT JOIN room_order_detail on room_order_detail.room_order_sid = room_order.sid
INNER JOIN room_info on room_info.sid = room_order_detail.room_sid
WHERE `room_order_sid`=$rm_order_sid";


$rows = $pdo->query($sql)->fetchAll();

// 設定收件者
// 待以真實 user email 測試
// $to = "chiyin0209@gmail.com";
$to = "chiyin0209@yahoo.com";

// 設定郵件主旨
$subject = "謝謝您對 N.A.P. 的支持，已收到您的訂單！";
$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

//設定郵件標頭資訊
$headers  = "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
$headers .= "To: chiyin0209@yahoo.com" . PHP_EOL;
$headers .= "From: N.A.P.<nap.service2022@gmail.com>" . PHP_EOL;


// 設定郵件內容
foreach ($rows as $r) {
$message = '
<!DOCTYPE html>
<html>
	<body>
		<table border="1" cellspacing="0" cellpadding="15" style="background-color:#ffffff;" >
            <tbody>
                <tr>
                    <td align="center" width="700">
                        <table width="650" border="0" cellspacing="5" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <h1><span><font style="font-family: 微軟正黑體;">訂單通知信</font></span>
                                        </h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <font style="font-family: 微軟正黑體;">親愛的 N.A.P. 會員，您好：</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <p><font style="font-family: 微軟正黑體;">N.A.P. 感謝您的支持與愛護，您的訂單明細如下：</font>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" >
                                        <table width="100%" border="1" cellspacing="0" cellpadding="5" style="background-color:#ffffff;">
                                            <tbody>
                                                <tr>
                                                    <td width="23%" align="center" valign="top" style="background-color:#E8E7D1;">
                                                        訂單編號
                                                    </td>
                                                    <td width="77%">';
                                                        $message .= $r['room_order_id'];
                                                        $message .= '
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="23%" align="center" valign="top" style="background-color:#E8E7D1;">
                                                        訂購日期
                                                    </td>
                                                    <td width="77%">';
                                                        $message .= $r['create_at'];
                                                        $message .= '
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="23%" align="center" valign="top" style="background-color:#E8E7D1;">
                                                        付款方式
                                                    </td>
                                                    <td width="77%">
                                                        信用卡付款
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="23%" align="center" valign="top" style="background-color:#E8E7D1;">
                                                        訂單狀態
                                                    </td>
                                                    <td width="77%">
                                                        已完成
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="23%" align="center" valign="top" style="background-color:#E8E7D1;">
                                                        訂單總額
                                                    </td>
                                                    <td width="77%">NT$ ';
                                                        $message .= $r['room_order_price'];
                                                        $message .= '
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="23%" align="center" valign="top" style="background-color:#E8E7D1;">
                                                        訂金總額
                                                    </td>
                                                    <td width="77%">NT$ ';
                                                        $message .= $r['room_order_deposit'];
                                                        $message .= '
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <p>
                                            <font style="font-family: 微軟正黑體;">欲查看詳細訂單資料，請回會員中心<span>【<a href="http://localhost/MMMH64__Project-NAP/nap_php/list-end.php" style="font-weight:bold; text-decoration: none; color: blue;"  target="_blank">訂單查詢</a>】</span>，發票將於活動當日開立提供。</font>
                                        </p>
                                        <p>
                                            <font style="font-family: 微軟正黑體;">園區的浪浪期待與您的相遇！</font>
                                        </p>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="650" border="0" cellspacing="5" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td height="40">
                                        <p>
                                            <font style="font-family: 微軟正黑體;">祝　美好的一天！</font><br/>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div>
                                            <font style="font-family: 微軟正黑體; font-size: 14px; color: #f00;">本信件由系統自動發送通知，請勿直接回覆，<wbr />如訂單內容有問題，請直接與 N.A.P. 聯絡。</font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div style="margin: 30px;">
                                            <img src="/nap_php/img/component/logo/logo-2.svg" alt="">
                                            <br />
                                            <div style="margin: 6px;">
                                            <span>客服信箱：
                                                <a href="nap.service2022@gmail.com" target="_blank">nap.service2022@gmail.com</a>
                                            </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
	</body>
</html>
';
}

// 傳送郵件
mail($to, $subject, $message, $headers);
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/room-cart-final-step-credit.css?version=&lt;?php echo time(); ?&gt;">


<div class="all-container">
    <div class="order-content-top">
        <div class="complete-icon">
            <img src="./img/component/icon/complete-icon.svg" alt="">
        </div>
        <div class="order-content-text">
            <h4>
                園區浪浪們期待<br>與您的相見
            </h4>
        </div>
        <!------- 查看其他訂單按鈕 ------->
        <div class="other-btn">
            <div class="check-order-btn">
                <a class="napBtn_fixed_filled" href="#">
                    <span>查看歷史訂單</span>
                </a>
            </div>
            <div class="back-btn">
                <a class="napBtn_fixed_outlined" href="homepage.php">
                    <span>回首頁</span>
                </a>
            </div>
        </div>
    </div>
    <!------- 中間訂單明細列 ------->
    <div class="order-detail">
        <div class="order-deco-img">
            <div class="order-deco-left">
                <div class="cat-left">
                    <img src="./img/component/illustration/cat-left.png" alt="">
                </div>
                <div class="dog-left">
                    <img src="./img/component/illustration/dog-left.png" alt="">
                </div>
            </div>
            <div class="order-deco-right">
                <div class="dog-right">
                    <img src="./img/component/illustration/dog-right.png" alt="">
                </div>
                <div class="cat-right">
                    <img src="./img/component/illustration/cat-right.png" alt="">
                </div>
            </div>
        </div>

        <div class="order-title">
            <h4>訂單明細</h4>
            <div class="triangle">
                <svg width="35" height="30" viewBox="0 0 35 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.8302 30L0 0H35L17.8302 30Z" fill="var(--secondaryColor_light)" />
                </svg>
            </div>
        </div>
        <div class="order-content">
            <div class="cart-detail-content">
                <?php foreach ($rows as $r) : ?>

                    <div class="per-cart-item">
                        <div class="room-img">
                            <img src="./img/room_img/<?= $r['room_img'] ?>.jpg" alt="">
                        </div>
                        <div class="item-list">
                            <div class="room-name"><?= $r['room_name'] ?></div>
                            <div class="stay-date"><?= $r['check_in'] ?> - <?= $r['check_out'] ?>(
                                <span class="night">
                                    <?= $r['stay_night'] ?>
                                </span>
                                晚 )
                            </div>
                            <div class="room-night">
                                <div class="price">NT$ <span class="per_price" data-val="<?= $r['room_price'] ?>"></span></div>
                                <div class="room-num">
                                    <p>x<span class="num" data-val="<?= $r['room_quantity'] ?>"></span> 間</p>
                                </div>
                                <div class="night-num">
                                    <p>x<span><?= $r['stay_night'] ?></span> 晚</p>
                                </div>
                            </div>
                            <div class="item-price">
                                <p>NT$ <span class="sub-total"></span></p>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <div class="final-cart-price">
                    <?php if ($r['coupon_sid'] == null) : ?>
                    <?php else : ?>
                        <div class="discount">
                            <div class="discount-text">
                                <p>已使用折價券</p>
                            </div>
                            <div class="discount-num">
                                <p>-NT$ <span class="discount-price"><?= $r['discount'] ?></span></p>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="total-price">
                        <div class="total-price-text">
                            <p>總計金額</p>
                        </div>
                        <div class="total-price-num">
                            <p>NT$ <span id="total-price"></span></p>
                        </div>
                    </div>
                    <div class="deposit-price">
                        <div class="deposit-price-text">
                            <p>應付訂金金額</p>
                        </div>
                        <div class="deposit-price-num">
                            <p>NT$ <span id="deposit-price"></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-content-bottom">
                <div class="order-id">
                    <div class="text order-id-text">
                        訂單編號
                    </div>
                    <div class="content order-id-num">
                        <p><?= $r['room_order_id'] ?></p>
                    </div>
                </div>
                <div class="order-date">
                    <div class="text order-date-text">
                        訂單日期
                    </div>
                    <div class="content order-date-text-num">
                        <p><?= date("Y-m-d H:i:s"); ?></p>
                    </div>
                </div>
                <div class="pay-way">
                    <div class="text pay-way-text">
                        付款方式
                    </div>
                    <div class="content pay-way-result">
                        <?= $payArray[1] ?>
                    </div>
                </div>
                <div class="order-status">
                    <div class="text order-status-text">
                        訂單狀態
                    </div>
                    <div class="content order-status-result">
                        <?= $statusArray[1] ?>
                    </div>
                </div>
                <div class="order-note">
                    <div class="text order-note-text">
                        備註
                    </div>
                    <div class="order-note-content">
                        <p>
                            <?= $r['room_order_note'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>



<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<!-- 自己的js放在這 -->

<script>
    //三位數一個逗號
    const dollarCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    function updatePrices() {
        let total = 0; //總價
        let discount = 0; //折價
        $('.per-cart-item').each(function() {
            const item = $(this);
            const item_price = item.find('.per_price'); //單價
            // console.log(item_price);

            const item_sub = item.find('.sub-total');
            const price = +item_price.attr('data-val');
            const item_num = item.find('.num');
            const num = +item_num.attr('data-val');
            // const discount = item.find('.discount-price');
            // console.log('discount:', discount);
            // console.log(num);
            const discount = $('.discount-price').text();

            item_num.html(num);
            item_price.html(dollarCommas(price));
            item_sub.html(dollarCommas(price * num));
            total += price * num;
            discount_tol = total - discount;
            deposit = discount_tol / 2;


        });
        $('#total-price').html(dollarCommas(discount_tol));
        $('#deposit-price').html(dollarCommas(deposit));

    };
    updatePrices(); //一進來就要執行一次
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>