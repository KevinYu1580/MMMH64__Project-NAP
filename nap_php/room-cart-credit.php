<?php

require __DIR__ . '/parts/connect_db.php';

$pageName = '訂房購物車'; // 頁面名稱


$member_id = $_SESSION['user']['id'];

$sql = "SELECT * FROM `coupon` WHERE `member_sid`= $member_id";
$rows = $pdo->query($sql)->fetchAll();

$sql_mem = "SELECT * FROM `member01` WHERE `id`= $member_id";
$rows_mem = $pdo->query($sql_mem)->fetchAll();

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/room-cart-credit.css?version=&lt;?php echo time(); ?&gt;">


<div class="mobile-backpage">
    <svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8787 0.87868C19.0503 -0.292893 20.9497 -0.292893 22.1213 0.87868L39.1213 17.8787C40.2929 19.0503 40.2929 20.9497 39.1213 22.1213C37.9497 23.2929 36.0502 23.2929 34.8787 22.1213L20 7.24264L5.12132 22.1213C3.94975 23.2929 2.05025 23.2929 0.87868 22.1213C-0.292893 20.9497 -0.292893 19.0503 0.87868 17.8787L17.8787 0.87868Z" fill="#FFFFFF" />
    </svg>
    <a href="#">ATM 轉帳付款</a>
</div>
<div class="outer-container">
    <div class="backpage">
        <a href="room-cart.php"><img src="./img/component/icon/Exclude.svg" alt=""></a>
        <a href="room-cart.php">上一步</a>
    </div>
    <div class="all-container">
        <div class="cart-detail">
            <div class="step-rate">
                <img src="./img/component/icon/step2.svg" alt="">
            </div>
            <div class="cart-detail-content">

                <?php
                $total = 0;

                foreach ($_SESSION['room_order'] as $key => $value) :
                    $total += $value['room_price'] * $value['num']; //計算總價格
                ?>
                    <div data-sid="<?= $key ?>" class="per-cart-item">
                        <div class="room-img">
                            <img src="./img/room_img/<?= $value['room_img'] ?>.jpg" alt="">
                        </div>
                        <div class="item-list">
                            <div class="room-name"><?= $value['room_name'] ?></div>
                            <div class="stay-date"><?= $_SESSION['order_day1'] ?> - <?= $_SESSION['order_day2'] ?>(
                                <span class="night">
                                    <?= $_SESSION['days'] ?>
                                </span>
                                晚 )
                            </div>
                            <div class="room-night">
                                <div class="price">NT$ <span class="per_price" data-val="<?= $value['room_price'] ?>"></span></div>
                                <div class="room-num">
                                    <p>x<span class="num" data-val="<?= $value['num'] ?>"></span> 間</p>
                                </div>
                                <div class="night-num">
                                    <p>x<span><?= $_SESSION['days'] ?></span> 晚</p>
                                </div>
                            </div>
                            <div class="item-price">
                                <p>NT$ <span class="sub-total"></span></p>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>

                <div class="final-cart-price">
                    <?php if ($_SESSION['rm-coupon']['value'] == '0') : ?>
                    <?php else : ?>
                        <div class="discount">
                            <div class="discount-text">
                                <p>已使用折價券</p>
                            </div>
                            <div class="discount-num">
                                <p>-NT$ <span class="discount-price"><?= $_SESSION['rm-coupon']['value'] ?></span></p>
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
        </div>
        <div class="pay-credit">
            <div class="pay-credit-title">
                <h4>信用卡付款</h4>
            </div>
            <div class="credit-card-box">
                <div class="flip">
                    <div class="front">
                        <div class="logo">
                            <img src="./img/component/icon/visa.png" alt="">
                        </div>
                        <div class="number"></div>
                        <div class="card-holder">
                            <label>Card holder</label>
                            <div></div>
                        </div>
                        <div class="card-expiration-date">
                            <label>Expires</label>
                            <div></div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="strip"></div>
                        <div class="logo">
                            <img src="./img/component/icon/visa.png" alt="">
                        </div>
                        <div class="cvv">
                            <label>CVV</label>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="form" autocomplete="off" novalidate>
                <fieldset>
                    <div class="mb-3">
                        <label for="card-number" class="form-label">信用卡卡號</label>
                        <div id="input-cart-number">
                            <input type="num" class="input-cart-number form-control" id="card-number" maxlength="4">
                            <input type="num" class="input-cart-number form-control" id="card-number-1" maxlength="4">
                            <input type="num" class="input-cart-number form-control" id="card-number-2" maxlength="4">
                            <input type="num" class="input-cart-number form-control" id="card-number-3" maxlength="4">
                        </div>
                    </div>

                    <div class="expire-date">
                        <div class="expiration-month mb-3 col-4">
                            <label for="card-expiration-month" class="form-label">有效月</label>
                            <select class="card-expiration-month form-select">
                                <option selected></option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="expiration-year mb-3 col-4">
                            <label for="card-expiration-year" class="form-label">有效年</label>
                            <select class="card-expiration-year form-select">
                                <option selected></option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                            </select>
                        </div>
                        <div class="card-cvv mb-3">
                            <label for="card-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="card-cvv" maxlength="3" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="card-holder" class="form-label">持卡人姓名</label>
                        <input type="text" class="form-control" id="card-holder">
                    </div>
                </fieldset>
            </form>
            <button type="submit" class="confirm-btn" onclick="location.href='room-cart-final-credit.php'">確認結帳</button>
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

    //輸入卡號的時候當數字等於4跳下一格
    $('.input-cart-number').on('keyup change', function() {
        if ($(this).val().length == 4) {
            $(this).next().focus();
        } else if ($(this).val().length == 0) {
            $(this).prev().focus();
        }
        //輸入卡號同步顯示
        var card_number = '';
        $('.input-cart-number').each(function() {
            card_number += $(this).val() + ' ';
        })

        $('.credit-card-box .number').html(card_number);
    });

    //輸入持卡人姓名同步顯示
    $('#card-holder').on('keyup change', function() {
        $t = $(this);
        $('.credit-card-box .card-holder div').html($t.val());
    });

    //輸入有效年月同步顯示
    $('.card-expiration-month, .card-expiration-year').change(function() {
        m = $('.card-expiration-month option').index($('.card-expiration-month option:selected'));
        m = (m < 10) ? '0' + m : m;
        y = $('.card-expiration-year').val().substr(2, 2);

        $('.card-expiration-date div').html(m + '/' + y);
    })


    //輸入cvv轉卡同步顯示
    $('#card-cvv').on('focus', function() {
        $('.credit-card-box').addClass('hover');
        // console.log('ok');
    }).on('blur', function() {
        $('.credit-card-box').removeClass('hover');
    }).on('keyup change', function() {
        $('.cvv div').html($(this).val());
    });


    function updatePrices() {
        let total = 0; //總價
        // let discount = 0; //折價
        $('.per-cart-item').each(function() {
            const item = $(this);
            const item_price = item.find('.per_price'); //單價
            // console.log(item_price);

            const item_sub = item.find('.sub-total');
            const price = +item_price.attr('data-val');
            const item_num = item.find('.num');
            const num = +item_num.attr('data-val');


            // console.log('discount:', discount);
            // console.log(num);
            const discount = $('.discount-price').text();

            item_num.html(num);
            item_price.html(dollarCommas(price));
            item_sub.html(dollarCommas(price * num));
            total += price * num;
            discount_tol = total - discount;
            deposit = discount_tol / 2;

            $.get('handle-room-cart-total.php', {
                room_order_origin_price: total,
                room_order_price: discount_tol,
                room_order_deposit: deposit,
            });

        });

        // console.log(discount);

        $('#total-price').html(dollarCommas(discount_tol));
        $('#deposit-price').html(dollarCommas(deposit));

    };
    updatePrices(); //一進來就要執行一次
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>