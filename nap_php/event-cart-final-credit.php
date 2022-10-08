<link rel="shortcut icon" href="./img/component/logo/favicon.ico" type="image/x-icon">
<?php

require __DIR__ . '/parts/connect_db.php';

$pageName = '活動訂單明細'; // 頁面名稱

//確認會員登入
if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

//把訂單時區設定為台北
date_default_timezone_set("Asia/Taipei");

//訂單亂碼 https://www.twblogs.net/a/5baa90e82b7177781a0e4a82
$yCode = array('E', 'R');

$orderSn = $yCode[0] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));


//判斷狀態陣列
$payArray = ['信用卡', 'ATM 轉帳'];
$statusArray = ['已付款', '尚未付款'];
$enrollArray = ['已完成', '名額保留'];

$paydate  = date('Y-m-d', strtotime('+2 days'));

$event_order_origin_price = $_SESSION['evt-total']['total'];
$event_order_price = $_SESSION['evt-total']['discount_tol'];
$event_order_note = $_SESSION['evt-note']['content'];
$event_order_id = $orderSn;

$order_sql = sprintf("INSERT INTO `event_order`( 
    `member_sid`,  /*int*/
    `coupon_sid`,  /*int*/
    `event_order_origin_price`,  /*chr*/
    `event_order_price`, /*chr*/
    `event_order_note`, /*chr*/
    `event_order_id`, /*chr*/
    `order_status`, /*int*/
    `payment_way`, /*int*/
    `enroll-status`, /*int*/
    `payment_deadline`, 
    `created_at`
    ) VALUES (%s, %s, $event_order_origin_price, $event_order_price, '$event_order_note', '$event_order_id', %s, %s, %s, '$paydate', Now())", $_SESSION['user']['id'], $_SESSION['evt-coupon']['sid'], '0', '0', '0');


$stmt = $pdo->prepare($order_sql);
$stmt->execute();


// echo json_encode([
//     $stmt->rowCount(), // 影響的資料筆數
//     $pdo->lastInsertId(), // 最新的新增資料主鍵
// ]);


$evt_order_sid = $pdo->lastInsertId(); // 訂單編號(event_order的sid)

// 訂單明細
$order_d_sql = "INSERT INTO `event_order_detail`(`event_order_sid`, `event_sid`,`quantity`) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($order_d_sql);

foreach ($_SESSION['event-cart'] as $key => $value) {
    $stmt->execute([
        $evt_order_sid,
        $value['sid'],
        $value['qty'],
    ]);
}


//變更優惠券狀態
$coupon_sid = $_SESSION['evt-coupon']['sid'];
$order_c_sql ="UPDATE `coupon` SET `coupon_status`='1' WHERE `sid`='$coupon_sid'";
$stmt = $pdo->prepare($order_c_sql);
$stmt->execute();


// 訂單資料進入db後清除session中購物車內容
unset($_SESSION['event-cart'], $_SESSION['evt-note'], $_SESSION['evt-total'], $_SESSION['evt-coupon']);

$member_id = $_SESSION['user']['id'];

$sql = "SELECT * FROM `event_order`
LEFT JOIN coupon on coupon.sid = event_order.coupon_sid
INNER JOIN event_order_detail on event_order_detail.event_order_sid = event_order.sid
INNER JOIN event_detail on event_detail.sid = event_order_detail.event_sid
WHERE `event_order_sid`=$evt_order_sid";


$rows = $pdo->query($sql)->fetchAll();


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
                                                            $message .= $r['event_order_id'];
                                                            $message .= '
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="23%" align="center" valign="top" style="background-color:#E8E7D1;">
                                                            訂購日期
                                                        </td>
                                                        <td width="77%">';
                                                            $message .= $r['created_at'];
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
                                                            報名狀態
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
                                                            $message .= $r['event_order_price'];
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
                                                <img src="./img/component/logo/logo-2.svg" alt="">
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
    };


// 設定收件者
$to = $_SESSION['user']['email'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail_key2 = '';

// @include __DIR__ . '/../keys.php';
include __DIR__ . '/../keys.php';

// echo $mail_key2;

//Load Composer's autoloader
require __DIR__ . '/../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->Encoding = 'base64';
    $mail->CharSet = 'UTF-8';
    //Server settings
    // $mail->SMTPDebug = 3;                      //Enable verbose debug output
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nap.service2022@gmail.com';                     //SMTP username
    $mail->Password   =  $mail_key2;                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail ->SMTPOptions = array (
        'ssl' => array (
            'verify_peer' => false ,
            'verify_peer_name' => false ,
            'allow_self_signed' => true
            )
        );
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nap.service2022@gmail.com', 'N.A.P.');
    $mail->addAddress($to);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '謝謝您對 N.A.P. 的支持，已收到您的訂單！';
    $mail->Body    = $message;

    $mail->send();

    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/event-cart-final-step-credit.css">


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
                <a class="napBtn_fixed_filled" href="list.php">
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
                        <div class="event-img">
                            <img src="./img/events/<?= $r['event_img'] ?>.jpg" alt="<?= $r['event_name'] ?>">
                        </div>
                        <div class="item-list">
                            <div class="event-name"><?= $r['event_name'] ?></div>
                            <div class="stay-date"><?= $r['event_date'] ?></div>
                            <div class="price_qty">
                                <div class="price">NT$<span class="per_price" data-val="<?= $r['event_price'] ?>"></span></div>
                                <div class="enroll-people">
                                    <p>x <span class="qty" data-val="<?= $r['quantity'] ?>"></span> 人</p>
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
                </div>
            </div>
            <div class="order-content-bottom">
                <div class="order-id">
                    <div class="text order-id-text">
                        訂單編號
                    </div>
                    <div class="content order-id-num">
                        <p><?= $r['event_order_id'] ?></p>
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
                        <?= $payArray[0] ?>
                    </div>
                </div>
                <div class="order-status">
                    <div class="text order-status-text">
                        訂單狀態
                    </div>
                    <div class="content order-status-result">
                        <?= $statusArray[0] ?>
                    </div>
                </div>
                <div class="enroll-status">
                    <div class="text enroll-status-text">
                        報名狀態
                    </div>
                    <div class="content enroll-status-result">
                        <?= $enrollArray[0] ?>
                    </div>
                </div>
                <div class="order-note">
                    <div class="text order-note-text">
                        備註
                    </div>
                    <div class="order-note-content">
                        <p>
                            <?= $r['event_order_note'] ?>
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
            const item_qty = item.find('.qty');
            const qty = +item_qty.attr('data-val');
            // const discount = item.find('.discount-price');
            // console.log('discount:', discount);
            // console.log(qty);
            const discount = $('.discount-price').text();

            item_qty.html(qty);
            item_price.html(dollarCommas(price));
            item_sub.html(dollarCommas(price * qty));
            total += price * qty;
            discount_tol = total - discount;


        });
        $('#total-price').html(dollarCommas(discount_tol));

    };
    updatePrices(); //一進來就要執行一次
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>