<?php
require __DIR__ . '/parts/connect_db_cy.php';
// require __DIR__ . '/parts/connect_db.php';
$pageName = '活動購物車'; // 頁面名稱

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
<link rel="stylesheet" href="./nap_css/event-cart-atm.css">


<div class="mobile-backpage">
    <svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8787 0.87868C19.0503 -0.292893 20.9497 -0.292893 22.1213 0.87868L39.1213 17.8787C40.2929 19.0503 40.2929 20.9497 39.1213 22.1213C37.9497 23.2929 36.0502 23.2929 34.8787 22.1213L20 7.24264L5.12132 22.1213C3.94975 23.2929 2.05025 23.2929 0.87868 22.1213C-0.292893 20.9497 -0.292893 19.0503 0.87868 17.8787L17.8787 0.87868Z" fill="#FFFFFF" />
    </svg>
    <a href="#">ATM 轉帳付款</a>
</div>
<div class="outer-container">
    <div class="backpage">
        <a href="event-cart.php"><img src="./img/component/icon/Exclude.svg" alt=""></a>
        <a href="event-cart.php">上一步</a>
    </div>
    <div class="all-container">
        <div class="cart-detail">
            <div class="step-rate">
                <img src="./img/component/icon/step2.svg" alt="">
            </div>
            <div class="cart-detail-content">

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

                        </div>

                    </div>
                <?php endforeach; ?>

                <div class="final-cart-price">
                <?php if ($_SESSION['evt-coupon']['value']=='0') : ?>
                <?php else : ?>
                    <div class="discount">
                        <div class="discount-text">
                            <p>已使用折價券</p>
                        </div>
                        <div class="discount-num">
                            <p>-NT$ <span class="discount-price"><?= $_SESSION['evt-coupon']['value'] ?></span></p>
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
        </div>
        <div class="pay-atm">
            <div class="pay-atm-title">
                <h4>ATM轉帳付款</h4>
            </div>
            <div class="atm-notice">
                <div class="notice-title">
                    注意事項
                </div>
                <div class="atm-notice-content">
                    <p>繳費期限為 <span>2</span> 天，為了確保您的消費權益，請務必於期限內進行繳款，超過期限將無條件取消該筆訂單，謝謝您的配合！
                    </p>
                </div>
                <div class="atm-notice-example">
                    <p>例：08/01 的 22 : 00購買商品，繳費期限為 2 天，表示 08/03 的 23 : 59 分前您必須完成繳費。超過期限即訂單自動取消 。</p>
                </div>
            </div>
            <!------- 確認結帳按鈕 ------->
            <button type="submit" class="confirm-btn" onclick="location.href='event-cart-final-atm.php'">確認結帳</button>
            
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
        // let discount = 0; //折價
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
            discount_tol = total-discount;

            $.get('handle-event-cart-total.php',{
            event_order_origin_price: total,
            event_order_price: discount_tol,
            });
            

        });
        $('#total-price').html(dollarCommas(discount_tol));

    };
    updatePrices(); //一進來就要執行一次
    
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>