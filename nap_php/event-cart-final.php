<?php
require __DIR__ . '/parts/connect_db_cy.php';
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/event-cart-final-step-atm.css">


<div class="all-container">
    <div class="order-content-top">
        <div class="complete-icon">
            <img src="./img/component/icon/complete-icon.svg" alt="">
        </div>
        <div class="order-content-text-atm">
            <div class="atm-info">
                <div class="atm-info-deco col-2"></div>
                <div class="atm-info-text">
                    <p>銀行代碼：822</p>
                    <p>虛擬帳號：<span class="atm-num">2397-6666-1798-4444</span></p>
                    <p>繳費期限：<span class="pay-deadline">2022/08/16 23:59:59</span></p>
                </div>
            </div>
            <div class="atm-note">
                <p>※ 此帳號僅供本次交易使用，無法重複繳費。</p>
                <p>※ 訂購完成不代表報名完成，請於期限內完成繳費。</p>
            </div>
        </div>
        <!------- 查看其他訂單按鈕 ------->
        <div class="other-btn">
            <div class="check-order-btn">
                <a class="napBtn_fixed_filled" href="#">
                    <span>查看歷史訂單</span>
                </a>
            </div>
            <div class="back-btn">
                <a class="napBtn_fixed_outlined" href="#">
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
                    <div class="discount">
                        <div class="discount-text">
                            <p>已使用折價券</p>
                        </div>
                        <div class="discount-num">
                            <p>-NT$ <span class="discount-price">50</span></p>
                        </div>
                    </div>
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
                        <p>E202208140000001</p>
                    </div>
                </div>
                <div class="order-date">
                    <div class="text order-date-text">
                        訂單日期
                    </div>
                    <div class="content order-date-text-num">
                        <p><?=date("Y-m-d H:i:s");?></p>
                    </div>
                </div>
                <div class="pay-way">
                    <div class="text pay-way-text">
                        付款方式
                    </div>
                    <div class="content pay-way-result">
                        ATM 付款
                    </div>
                </div>
                <div class="order-status">
                    <div class="text order-status-text">
                        訂單狀態
                    </div>
                    <div class="content oder-status-result">
                        尚未付款
                    </div>
                </div>
                <div class="enroll-status">
                    <div class="text enroll-status-text">
                        報名狀態
                    </div>
                    <div class="content enroll-status-result">
                        已保留
                    </div>
                </div>
                <div class="order-note">
                    <div class="text order-note-text">
                        備註
                    </div>
                    <div class="order-note-content">
                        <p>
                            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
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

            item_qty.html(qty);
            item_price.html(price);
            item_sub.html(price * qty);
            total += price * qty;
            

        });
        $('#total-price').html(total);

    };
    updatePrices(); //一進來就要執行一次
    
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>