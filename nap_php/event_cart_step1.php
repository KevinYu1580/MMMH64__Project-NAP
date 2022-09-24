<?php
require __DIR__ . '/parts/connect_db_cy.php';
// require __DIR__ . '/parts/connect_db.php';
$pageName = '活動購物車'; // 頁面名稱




?>
<?php include __DIR__. '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<link rel="stylesheet" href="./nap_css/event-cart-step1.css">
<?php include __DIR__. '/parts/navbar.php'; ?>

<!-- 加自己的css -->
    


    <div class="all-container">
        <div class="cart-detail">
            <div class="cart-note">
                <div class="warn-img">
                    <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-9.53674e-07 16.9997C-9.53674e-07 7.61091 7.61124 -0.000244141 17 -0.000244141C26.3888 -0.000244141 34 7.61091 34 16.9997C34 19.7924 33.3248 22.4897 32.0537 24.9052L33.9515 32.1955C34.0136 32.4342 34.0136 32.6849 33.9514 32.9238C33.7503 33.6961 32.9611 34.159 32.1889 33.9579L24.8952 32.0588C22.4822 33.3265 19.7887 33.9997 17 33.9997C7.61124 33.9997 -9.53674e-07 26.3886 -9.53674e-07 16.9997ZM17 7.65224C16.2959 7.65224 15.725 8.22308 15.725 8.92724V19.5522C15.725 20.2564 16.2959 20.8272 17 20.8272C17.7041 20.8272 18.275 20.2564 18.275 19.5522V8.92724C18.275 8.22308 17.7041 7.65224 17 7.65224ZM15.3 24.6487C15.3 25.5874 16.0611 26.3487 17 26.3487C17.9389 26.3487 18.7 25.5874 18.7 24.6487C18.7 23.7098 17.9389 22.9487 17 22.9487C16.0611 22.9487 15.3 23.7098 15.3 24.6487Z" fill="var(--subColor_highLightRed)"/>
                    </svg>
                </div>
                <div class="cart-note-content">
                    <p>提醒您，活動及訂房請選擇下方按鈕並分別結帳，謝謝！</p>
                </div>
            </div>
            <div class="cart-page">
                <a class="active-cart" href="#">
                    <div class="event-cart">活動結帳</div>
                    <div class="triangle">
                        <svg width="35" height="30" viewBox="0 0 35 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.8302 30L0 0H35L17.8302 30Z" fill="var(--secondaryColor_default)"/>
                        </svg>
                    </div>
                </a>
                <a class="inactive-cart" href="#">
                    <div class="room-cart">訂房結帳</div>
                </a>
            </div>
            <div class="step-rate">
                <img src="./img_cy/component/icon/step1.svg" alt="">
            </div>
            <div class="cart-detail-content">
                <div class="per-cart-item">
                    <div class="event-img">
                        <img src="./img/events/eve-00.jpg" alt="">
                    </div>
                    <div class="item-list">
                        <div class="event-name">【MMMH64-與狗勾的兩日生活】</div>
                        <div class="stay-date">2022/08/27上午10:00 - 2022/08/28下午16:00 | 2天1夜</div>
                        <div class="enroll-people">
                            <p>x <span>2</span> 人</p>
                        </div>
                        <div class="item-price">
                            <p>NT$ <span>2,999</span></p>
                        </div>
                        <div class="edit-enroll-btn">
                            <a class="napBtn_fixed_filled" href="#">
                                <span>修改參與人</span>
                            </a>
                        </div>
                    </div>
                    <div class="delete-btn">
                        <img src="./img/component/icon/xmark.svg" alt="">
                    </div>
                </div>
                <div class="per-cart-item">
                    <div class="event-img">
                        <img src="./img/events/eve-01.jpg" alt="">
                    </div>
                    <div class="item-list">
                        <div class="event-name">【知識講堂 | 為何喵咪會有呼嚕聲?】</div>
                        <div class="stay-date">2022/08/23上午09:00 - 2022/08/23下午15:00 | 1天課程</div>
                        <div class="enroll-people">
                            <p>x <span>2</span> 人</p>
                        </div>
                        <div class="item-price">
                            <p>NT$ <span>799</span></p>
                        </div>
                        <div class="edit-enroll-btn">
                            <a class="napBtn_fixed_filled" href="#">
                                <span>修改參與人</span>
                            </a>
                        </div>
                    </div>
                    <div class="delete-btn">
                        <img src="./img/component/icon/xmark.svg" alt="">
                    </div>
                </div>

                <div class="final-cart-price">
                    <div class="total-price">
                        <div class="total-price-text">
                            <p>總計金額</p>
                        </div>
                        <div class="total-price-num">
                            <p>NT$ <span>3,798</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pay-way">
            <div class="member-img">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1181_35068)">
                    <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95431 31.0457 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0457 8.95431 40 20 40Z" fill="var(--primaryColor_default)"/>
                    <path d="M22.1065 17.7056C24.8999 16.5422 26.2213 13.3346 25.058 10.5412C23.8946 7.74778 20.687 6.42636 17.8936 7.58972C15.1002 8.75308 13.7788 11.9607 14.9421 14.7541C16.1055 17.5475 19.3131 18.8689 22.1065 17.7056Z" fill="white"/>
                    <path d="M19.9999 20C14.3863 20 9.83521 24.5511 9.83521 30.1647C9.83521 31.6368 11.0295 32.8312 12.5017 32.8312H27.4952C28.9674 32.8312 30.1617 31.6368 30.1617 30.1647C30.1617 24.5511 25.6107 20 19.997 20H19.9999Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1181_35068">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="mycoupon mb-3">
                <label for="select-coupon" class="select-coupon">我的折價券</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>選擇要使用的折價券</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mydata mb-3">
                <label for="member-data" class="member-data">訂購人資料</label>
            </div>
            <div class="form">
                <form>
                    <div class="name-phone">
                        <div class="name mb-3">
                            <label for="name" class="form-label">訂購人姓名</label>
                            <input type="text" class="form-control" id="name" disabled>
                        </div>
                        <div class="phone mb-3">
                            <label for="phone" class="form-label">手機</label>
                            <input type="text" class="form-control" id="phone" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="car-num" class="form-label">電子郵件信箱</label>
                        <input type="text" class="form-control" id="car-num" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="special-need" class="form-label">備註</label>
                        <textarea class="form-control" aria-label="With textarea" id="special-need"></textarea>
                    </div>
                </form>
            </div>
            
            <!------- 付款方式按鈕 ------->
            <div class="cart-btn">
                <div class="credit-card-btn">
                    <a class="napBtn_fixed_filled" href="#">
                        <span>信用卡付款</span>
                    </a>
                </div>
                <div class="atm-btn">
                    <a class="napBtn_fixed_filled" href="#">
                        <span>ATM 轉帳付款</span>
                    </a>
                </div>
            </div>


        </div>
    </div>




<?php include __DIR__. '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<!-- 自己的js放在這 -->


<?php include __DIR__. '/parts/html-foot.php'; ?>


