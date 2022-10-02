<?php
require __DIR__ . '/parts/connect_db_cy.php';
// require __DIR__ . '/parts/connect_db.php';
$pageName = '活動購物車'; // 頁面名稱

//確認會員登入
if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$member_id = $_SESSION['user']['id'];

$sql = "SELECT * FROM `coupon` WHERE `member_sid`= $member_id AND `coupon_status`= 0 ";
$rows = $pdo->query($sql)->fetchAll();

$sql_mem = "SELECT * FROM `member01` WHERE `id`= $member_id";
$rows_mem = $pdo->query($sql_mem)->fetchAll();


?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<link rel="stylesheet" href="./nap_css/event-cart1.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->



<div class="all-container">
    <div class="cart-detail">
        <div class="cart-note">
            <div class="warn-img">
                <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-9.53674e-07 16.9997C-9.53674e-07 7.61091 7.61124 -0.000244141 17 -0.000244141C26.3888 -0.000244141 34 7.61091 34 16.9997C34 19.7924 33.3248 22.4897 32.0537 24.9052L33.9515 32.1955C34.0136 32.4342 34.0136 32.6849 33.9514 32.9238C33.7503 33.6961 32.9611 34.159 32.1889 33.9579L24.8952 32.0588C22.4822 33.3265 19.7887 33.9997 17 33.9997C7.61124 33.9997 -9.53674e-07 26.3886 -9.53674e-07 16.9997ZM17 7.65224C16.2959 7.65224 15.725 8.22308 15.725 8.92724V19.5522C15.725 20.2564 16.2959 20.8272 17 20.8272C17.7041 20.8272 18.275 20.2564 18.275 19.5522V8.92724C18.275 8.22308 17.7041 7.65224 17 7.65224ZM15.3 24.6487C15.3 25.5874 16.0611 26.3487 17 26.3487C17.9389 26.3487 18.7 25.5874 18.7 24.6487C18.7 23.7098 17.9389 22.9487 17 22.9487C16.0611 22.9487 15.3 23.7098 15.3 24.6487Z" fill="var(--subColor_highLightRed)" />
                </svg>
            </div>
            <div class="cart-note-content">
                <p>提醒您，活動及訂房請選擇下方按鈕並分別結帳，謝謝！</p>
            </div>
        </div>
        <div class="cart-page">
            <a class="active-cart" href="#">
                <div class="event-cart">活動結帳
                    <!-- <span class="badge badge-pill badge-danger" id="cartCount"></span> -->
                </div>
                <div class="triangle">
                    <svg width="35" height="30" viewBox="0 0 35 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.8302 30L0 0H35L17.8302 30Z" fill="var(--secondaryColor_default)" />
                    </svg>
                </div>
            </a>
            <a class="inactive-cart" href="room-cart.php">
                <div class="room-cart">訂房結帳</div>
            </a>
        </div>

        <div class="cart-detail-content">
            <?php if (empty($_SESSION['event-cart'])) : ?>
                <div class="empty">
                    <div class="empty-cart">
                        <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9723 25.2514C13.4511 26.8752 15.1651 28.0767 16.9806 28.0785C21.6957 28.0821 26.4109 28.0785 31.1251 28.0821C31.4437 28.0821 31.7733 28.0803 32.0773 28.1571C33.0267 28.399 33.5696 29.3211 33.4369 30.4021C33.3105 31.4287 32.6229 32.1169 31.6204 32.1285C29.4084 32.1526 27.1955 32.1428 24.9835 32.1437C22.3586 32.1455 19.7337 32.1107 17.1097 32.1517C13.9282 32.2017 11.6246 30.7788 10.0004 28.2142C8.73236 26.2119 8.11894 23.9776 7.67581 21.6834C6.62017 16.2221 5.53981 10.7652 4.45213 5.31009C4.421 5.15298 4.22324 4.96641 4.05935 4.90571C3.16211 4.57453 2.24929 4.28441 1.34655 3.96751C0.459378 3.65329 -0.0634053 2.8365 0.00617712 1.90009C0.0766751 0.935116 0.658054 0.211161 1.54431 0.0254863C1.74208 -0.0155765 1.9728 -0.00664981 2.16689 0.0495883C3.59791 0.463787 5.02252 0.896731 6.44987 1.32253C7.16035 1.53499 7.62087 1.99561 7.85526 2.67493C8.07407 3.30872 8.2993 3.93984 8.49157 4.58167C8.57763 4.87 8.70398 4.96641 9.02625 4.96552C17.5712 4.94677 26.1161 4.93963 34.661 4.93427C35.6525 4.93427 36.645 4.92981 37.6356 4.97623C39.4502 5.06192 40.4043 6.1001 39.8366 8.06129C38.6079 12.3068 37.3042 16.5318 36.0242 20.7631C35.7789 21.5745 35.5564 22.3976 35.2286 23.1786C34.8166 24.1615 34.1574 24.9551 33.012 25.1871C32.7026 25.2496 32.3757 25.2487 32.0571 25.2487C25.8625 25.2523 19.6669 25.2514 13.4722 25.2514H12.9732H12.9723ZM22.625 17.7432C23.9086 17.7521 25.0458 18.1074 26.0685 18.7751C26.5986 19.1206 27.0765 19.541 27.5755 19.932C28.1092 20.3507 28.7803 20.3221 29.2225 19.8579C29.6492 19.4107 29.6748 18.726 29.2052 18.2859C26.9263 16.1516 24.2849 15 21.0649 15.6133C19.1688 15.9739 17.5858 16.9362 16.2152 18.2368C15.7309 18.6966 15.741 19.3785 16.1887 19.8418C16.6126 20.2801 17.291 20.3167 17.8028 19.9213C17.9822 19.7829 18.1425 19.6222 18.3173 19.4785C19.5744 18.4404 20.9862 17.77 22.625 17.7432V17.7432ZM19.481 12.5728C19.4838 11.6587 18.6955 10.8893 17.7616 10.8946C16.8195 10.9009 16.0468 11.6677 16.0577 12.5853C16.0687 13.4896 16.8241 14.2279 17.7515 14.2403C18.6826 14.2537 19.4783 13.486 19.481 12.5719V12.5728ZM29.3086 12.5916C29.3178 11.6623 28.5633 10.9044 27.6194 10.8937C26.702 10.8839 25.9229 11.6239 25.9036 12.5229C25.8844 13.4521 26.6279 14.218 27.5718 14.2421C28.5084 14.2662 29.2985 13.5146 29.3077 12.5916H29.3086Z" fill="var(--primaryColor_light)" />
                            <path d="M33.4498 37.3739C33.4122 39.0905 31.9629 40.4545 30.2215 40.4126C28.5012 40.3715 27.0958 38.9549 27.1187 37.2838C27.1425 35.5761 28.5872 34.2067 30.3369 34.2344C32.103 34.2621 33.4873 35.6582 33.4498 37.3739Z" fill="var(--primaryColor_light)" />
                            <path d="M17.6343 34.2351C19.3995 34.2235 20.8149 35.584 20.8259 37.3024C20.8369 39.0056 19.4086 40.4115 17.6654 40.4133C15.9267 40.4151 14.4902 39.0109 14.4902 37.3104C14.4902 35.6259 15.9002 34.2459 17.6343 34.2343V34.2351Z" fill="var(--primaryColor_light)" />
                        </svg>
                    </div>
                    <div class="empty-car-text">
                        <p>
                            您的購物車內無待結帳商品<br>
                            趕快去看看有興趣的活動吧！
                        </p>
                    </div>
                    <!------- 查看其他頁面按鈕 ------->
                    <div class="empty-cart-btn row">
                        <div class="col check-event-btn">
                            <a class="napBtn_fixed_filled" href="events_page.php">
                                <span>查看活動</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="step-rate">
                    <img src="./img/component/icon/step1.svg" alt="">
                </div>
                <?php
                $total = 0;
                foreach ($_SESSION['event-cart'] as $key => $value) :
                    $total += $value['event_price'] * $value['qty']; //計算總價格
                ?>

                    <div data-sid="<?= $key ?>" class="per-cart-item">
                        <div class="event-img">
                            <img src="./img/events/<?= $value['event_img'] ?>.jpg" alt="<?= $value['event_name'] ?>">
                        </div>
                        <div class="item-list">
                            <div class="event-name"><?= $value['event_name'] ?></div>
                            <div class="stay-date"><?= $value['event_date'] ?></div>
                            <div class="price_qty">
                                <div class="price">NT$ <span class="per_price" data-val="<?= $value['event_price'] ?>"></span></div>
                                <div class="enroll-people">
                                    <p>x <span class="qty" data-val="<?= $value['qty'] ?>"></span> 人</p>
                                </div>
                            </div>

                            <div class="item-price">
                                <p>NT$ <span class="sub-total"></span></p>
                            </div>
                            <div class="edit-enroll-btn">
                                <a class="napBtn_fixed_filled" href="#" onchange="updateItem(event)">
                                    <span>修改參與人</span>
                                </a>
                            </div>
                        </div>
                        <div class="delete-btn">
                            <a class="delete" href="javascript:" type="button" onclick="removeItem(event)">
                                <img src="./img/component/icon/xmark.svg" alt="">
                            </a>

                        </div>
                    </div>
                <?php endforeach; ?>



                <div class="final-cart-price">
                    <div class="total-price">
                        <div class="total-price-text">
                            <p>總計金額</p>
                        </div>
                        <div class="total-price-num">
                            <p>NT$ <span id="total-price"></span></p>
                        </div>
                    </div>
                </div>
            <?php endif ?>


        </div>
    </div>
    <div class="pay-way">
        <div class="member-img">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1181_35068)">
                    <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95431 31.0457 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0457 8.95431 40 20 40Z" fill="var(--primaryColor_default)" />
                    <path d="M22.1065 17.7056C24.8999 16.5422 26.2213 13.3346 25.058 10.5412C23.8946 7.74778 20.687 6.42636 17.8936 7.58972C15.1002 8.75308 13.7788 11.9607 14.9421 14.7541C16.1055 17.5475 19.3131 18.8689 22.1065 17.7056Z" fill="white" />
                    <path d="M19.9999 20C14.3863 20 9.83521 24.5511 9.83521 30.1647C9.83521 31.6368 11.0295 32.8312 12.5017 32.8312H27.4952C28.9674 32.8312 30.1617 31.6368 30.1617 30.1647C30.1617 24.5511 25.6107 20 19.997 20H19.9999Z" fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_1181_35068">
                        <rect width="40" height="40" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>

        <div class="form">
            <form>
                <div class="mycoupon mb-3">
                    <label for="select-coupon" class="select-coupon">我的折價券</label>
                    <select class="form-select coupon" aria-label="Default select example" id="select-coupon">
                        <option value="0" data-sid=null>選擇要使用的折價券</option>
                        <?php
                        foreach ($rows as $r) :
                        ?>
                            <option value="<?= $r['discount'] ?>" data-sid="<?= $r['sid'] ?>"><?= $r['coupon_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php foreach ($rows_mem as $rm) : ?>
                    <div class="mydata mb-3">
                        <label for="member-data" class="member-data">訂購人資料</label>
                    </div>
                    <div class="name-phone">
                        <div class="name mb-3">
                            <label for="name" class="form-label">訂購人姓名</label>
                            <input type="text" class="form-control" id="name" value="<?= $rm['name'] ?>" disabled readonly>
                        </div>
                        <div class="phone mb-3">
                            <label for="phone" class="form-label">手機</label>
                            <input type="text" class="form-control" id="phone" value="<?= $rm['mobile'] ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="car-num" class="form-label">電子郵件信箱</label>
                        <input type="text" class="form-control" id="car-num" value="<?= $rm['email'] ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="special-need" class="form-label">備註</label>
                        <textarea class="form-control" aria-label="With textarea" id="special-need"></textarea>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>

        <!------- 付款方式按鈕 ------->
        <div class="cart-btn">
            <div class="credit-card-btn">
                <button class="napBtn_fixed_filled" onclick="goCredit()">
                    <span>信用卡付款</span>
                </button>
            </div>
            <div class="atm-btn">
                <button class="napBtn_fixed_filled" onclick="goATM()">
                    <span>ATM 轉帳付款</span>
                </button>
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

    //取折價券的初始值
    let coupon = $('#select-coupon').val();
    function getCoupon(){
        coupon_sid = $('#select-coupon').children('option:selected').attr('data-sid');
    };
    getCoupon();
    
    // console.log(coupon_sid);
    // console.log(coupon);
    
    //取折價券的value,sid
    $('#select-coupon').change(function() {
        coupon = $(this).val();
        coupon_sid = $(this).children('option:selected').attr('data-sid');

        console.log(coupon_sid);
        console.log(coupon);
    });


    //刪除購物車項目
    function removeItem(event) {
        const div = $(event.currentTarget).closest('.per-cart-item');
        const sid = div.attr('data-sid');
        console.log('div', div);

        $.get(
            'handle-event-cart.php', {
                sid
            },
            function(data) {
                console.log(data);
                showCartCount(data); //總數量
                // console.log('delete before');
                div.animate({
                    right: '800px'
                }, "fast").fadeOut(100, function() {
                    div.remove();
                    updatePrices();
                    checkDisabled();
                });
                // console.log('delete after');
            },
            'json');
    };


    //如果人數有改變，更新數量
    function updateItem(event) {
        const sid = $(event.currentTarget).closest('.per-cart-item').attr('data-sid');
        const qty = $(event.currentTarget).val();
        $.get(
            'handle-event-cart.php', {
                sid,
                qty
            },
            function(data) {
                console.log(data);
                showCartCount(data); //總數量
                updatePrices();
                checkDisabled();
            },
            'json');
    };

    function updatePrices() {
        let total = 0; //總價
        $('.per-cart-item').each(function() {
            const item = $(this);
            const item_price = item.find('.per_price'); //單價
            // console.log(item_price);

            const item_sub = item.find('.sub-total');
            const price = +item_price.attr('data-val');
            const item_qty = item.find('.qty');
            const qty = +item_qty.attr('data-val');
            console.log(qty);

            item_qty.html(qty);
            item_price.html(dollarCommas(price));
            item_sub.html(dollarCommas(price * qty));
            total += price * qty;

        });
        $('#total-price').html(dollarCommas(total));
    };
    updatePrices(); //一進來就要執行一次
    checkDisabled();

    function checkDisabled() {
        const itemNum = $('.per-cart-item').length;
        console.log(itemNum);
        if (itemNum < 1) {
            // 判斷數量，去顯示disable狀態

            $('.step-rate').hide();
            $('.final-cart-price').hide();
            $('.cart-btn').addClass('disabled');
            $('.form-control, .form-select').attr('disabled', true);
        }
    }

    function goATM() {
        // console.log('special-need:', $('#special-need').val());
        $.post('handle-event-cart-note.php', {
            note: $('#special-need').val()
        }, function(res) {
            // console.log('res:', res);
        });

        $.get('handle-event-cart-coupon.php',{
            sid: coupon_sid,
            coupon: coupon,
        });

        location.href = 'event-cart-atm.php';
    }

    function goCredit() {
        // console.log('special-need:', $('#special-need').val());
        $.post('handle-event-cart-note.php', {
            note: $('#special-need').val()
        });
        
        $.get('handle-event-cart-coupon.php',{
            sid: coupon_sid,
            coupon: coupon,
        });
        location.href = 'event-cart-credit.php';
    }
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>