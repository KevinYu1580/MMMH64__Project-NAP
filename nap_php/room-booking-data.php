<?php
require __DIR__ . '/parts/connect_db.php';

$pageName = '訂房資料填寫'; // 頁面名稱
// $where = ' WHERE 1 ';  // 起頭

// 在 MySQL 中取得房間的資料表，並抓取(fetch)全部資料表的欄位
$rooms = $pdo->query("SELECT * FROM `room_info` ORDER BY `sid`")->fetchAll();



?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/room-booking-data(cy).css">


<div class="all-container">
    <!------ 活動 notice 這裡開始 ------>
    <div class="mobile-backpage">
        <svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8787 0.87868C19.0503 -0.292893 20.9497 -0.292893 22.1213 0.87868L39.1213 17.8787C40.2929 19.0503 40.2929 20.9497 39.1213 22.1213C37.9497 23.2929 36.0502 23.2929 34.8787 22.1213L20 7.24264L5.12132 22.1213C3.94975 23.2929 2.05025 23.2929 0.87868 22.1213C-0.292893 20.9497 -0.292893 19.0503 0.87868 17.8787L17.8787 0.87868Z" fill="#FFFFFF" />
        </svg>
        <a href="#">訂房資料填寫</a>
    </div>

    <!------ 上方返回 ------>
    <div class="backpage">
        <a href="./room_booking.php"><img src="./img/component/icon/Exclude.svg" alt=""></a>
        <a href="./room_booking.php">返回</a>
    </div>

    <!------ 套裝活動報名表頭 ------>
    <div class="booking-data-title">
        訂房資料填寫
    </div>

    <!------ 套裝下方內容 ------>
    <div class="data-content">
        <div class="booking-data-right col-md-5">
            <!------- 詳細訂房卡 ------->
            <div class="booking-detail-card">
                <div class="left-content">
                    <div class="booking-date">
                        <div class="date-icon">
                            <img src="./img/component/icon/calender.svg" alt="">
                        </div>
                        <div class="date-num">
                            <span><?= $_SESSION['order_day1'] ?>
                                <!--check-in-->
                            </span>
                            -
                            <span><?= $_SESSION['order_day2'] ?>
                                <!--check-out-->
                            </span>
                            (
                            <span class="night"></span>
                            晚 )
                            <!-- <p>2022/08/26 - 2022/08/27 ( 1 晚 )</p> -->
                        </div>
                    </div>
                    <div class="booking-room">
                        <div class="room-icon">
                            <img src="./img/component/icon/room.svg" alt="">
                        </div>
                        <div class="room-num">
                            <p><span class="totalRoom"><?= $_SESSION['total_num'] ?></span> 間房間</p>
                        </div>
                    </div>
                </div>
                <div class="down-expand-btn">
                    <img src="./img/component/icon/arrow_up.svg" alt="" class="up">
                </div>
            </div>
            <div class="booking-detail">
                <?php
                $total = 0;
                foreach ($_SESSION['room_order'] as $key => $value) :

                ?>
                    <div data-sid="<?= $key ?>" class="booking-detail-combine">
                        <div class="booking-detail-content">
                            <div class="room-name">
                                <?= $value['room_name'] ?>
                            </div>
                            <div class="room-count">
                                <div class="price">NT$ <span class="per_price" data-val="<?= $value['room_price'] ?>"></span></div>
                                <div class="per-room-night">
                                    <p>x <span class="days" data-val="<?= $_SESSION['days'] ?>"></span> 晚</p>
                                </div>
                                <div class="per-room-num">
                                    <p>x<span class="num" data-val="<?= $value['num'] ?>"></span> 間</p>
                                </div>
                            </div>
                            <div class="room-detail-num">
                                <div class="room-detail-text">總價</div>
                                <div class="room-detail-price">NT$ <span class="sub-total"></span></div>
                            </div>
                            <div class="price-include">
                                <p>(房價已包含稅金及其他費用)</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="booking-detail-content-final">
                    <div class="total-count">
                        <div class="total-price">
                            <p>總價</p>
                        </div>
                        <div class="total-num">
                            <p>NT$ <span id="total-price"></span></p>
                        </div>
                    </div>
                    <div class="deposit-count">
                        <div class="deposit-price">應付訂金金額</div>
                        <div class="deposit-num">NT$ <span id="deposit-price"></span></div>
                    </div>
                    <div class="rest-count">
                        <div class="rest-price">剩餘尾款</div>
                        <div class="rest-num">NT$ <span id="rest-price"></span></div>
                    </div>
                    <div class="rest-pay-notice">
                        <p>(請於現場付清)</p>
                    </div>
                </div>
            </div>



        </div>

        <!------- 左方訂房人資料 ------->
        <div class="booking-data-left col-md-6 order-first">
            <div class="booking-title">
                <h4>訂房人資料</h4>
                <div class="triangle">
                    <img src="./img/component/icon/down-triangle.svg" alt="">
                </div>
            </div>
            <div class="booking-content">
                <div class="member-note">
                    <div class="warn-img">
                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-9.53674e-07 16.9997C-9.53674e-07 7.61091 7.61124 -0.000244141 17 -0.000244141C26.3888 -0.000244141 34 7.61091 34 16.9997C34 19.7924 33.3248 22.4897 32.0537 24.9052L33.9515 32.1955C34.0136 32.4342 34.0136 32.6849 33.9514 32.9238C33.7503 33.6961 32.9611 34.159 32.1889 33.9579L24.8952 32.0588C22.4822 33.3265 19.7887 33.9997 17 33.9997C7.61124 33.9997 -9.53674e-07 26.3886 -9.53674e-07 16.9997ZM17 7.65224C16.2959 7.65224 15.725 8.22308 15.725 8.92724V19.5522C15.725 20.2564 16.2959 20.8272 17 20.8272C17.7041 20.8272 18.275 20.2564 18.275 19.5522V8.92724C18.275 8.22308 17.7041 7.65224 17 7.65224ZM15.3 24.6487C15.3 25.5874 16.0611 26.3487 17 26.3487C17.9389 26.3487 18.7 25.5874 18.7 24.6487C18.7 23.7098 17.9389 22.9487 17 22.9487C16.0611 22.9487 15.3 23.7098 15.3 24.6487Z" fill="var(--subColor_highLightRed)" />
                        </svg>
                    </div>
                    <div class="note-content">
                        <p>訂房人資料的姓名、手機及生日依照會員註冊自動帶入，如需修改請至會員中心。</p>
                    </div>
                </div>
                <div class="form">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">手機</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="birthdate" class="form-label">生日</label>
                            <input type="date" class="form-control" id="birthdate">
                        </div>
                        <div class="mb-3">
                            <label for="car-num" class="form-label">車號</label>
                            <input type="text" class="form-control" id="car-num">
                        </div>
                        <div class="mb-3">
                            <label for="id-num" class="form-label">攜帶寵物</label>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pet-true" id="pet-true" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">是</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pet-false" id="pet-false" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">否</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------- 加入購物車按鈕 ------->


    <div class="booking-card-btn row">
        <div class="col add-to-cart-btn">
            <button class="napBtn_fixed_filled" name="add-to-cart" form="" type="submit" data-sid="<?= $room['sid'] ?>" onclick="addToCart(event)">
                <span>前往結帳</span>
            </button>
        </div>
        <div class="col check-bill-btn">
            <button class="napBtn_fixed_outlined" name="add-to-cart" form="" type="submit" data-sid="<?= $room['sid'] ?>" onclick="addToCart(event)">
                <span>加入購物車</span>
            </button>
        </div>
    </div>
</div>
<div class="check-in-instructions">
    <h4>入住須知</h4>
</div>
<div class="check-in-instructions-content">
    <p>
        以下入住須知，訂房即為認同，請詳閱：<br>
        <li>▸ 尾款支付｜現金或匯款 。
        </li>
        <li>▸ 發票開立｜是否需要開立統一編號（三聯式手開發票）、個人發票（二聯式手開發票)。
        </li>
        <li>▸ 櫃檯服務時間｜08:00~21:00</li>
        <li>▸ 入住時間｜14:00~20:30，如需晚入住，請提早告知。（暑假期間進退房忙碌，恕無法提前入房）</li>
        <li>▸ 退房時間｜12:00 以前（超過退房時間將酌收延時費用，每小時 500 元，最長延至 13:00）</li>
        <li>▸ 迎賓點心｜10:00~17:00（依餐車提供餐點為主，每人一份）
        </li>
        <li>▸ 早餐時間｜預約時段 8:00 、8:30 、9:00 、9:30 (最後點餐 9:50)、外帶餐廳會酌收餐盒費 $20/份 。
        </li>
        <li>▸ 住宿包含每人一份早餐，若有蛋奶素、花生醬過敏，請於提前告知；此外餐點基本內容固定恕不接受調整，記得攜帶餐券於時段內至餐廳用餐。</li>
        <li>▸ 住宿品質｜晚上 22:00 後請降低音量，尊重他人休息時間。</li>
        <li>▸ 關於訪客｜為確保住客安全，房內謝絕訪客，如有訪客請主動告知管家，並至一樓大廳招待您的客人，會客時間為 10:00-18:00。
        </li>
        <li>▸ 續住整理｜請您出門前主動告知管家，基本整理為更換毛、浴巾，垃圾清潔，如有額外需求請您一併告知。</li>
        <li>▸ 入住人數｜超過原約定入住人數，請主動告知；於入住後發現超過原約定人數，將依超過人數罰款，每超過一人收費 $2,000；原房型若有兩位 120 公分以下孩童，將收取一位加人費用 600 元。
        </li>
        <li>▸ 客房維護｜房內禁止吸煙、檳榔、烹煮食物，如經發現將拒絕入住，訂金不退款 ; 退房時若發現在房內有上述行為，將收取清潔費 $3,000。
        </li>
        <li>▸ 物品損壞、遺失｜請勿將房內設備與重複性使用備品帶離園區（水瓶、拖鞋等），如有損壞或無法追回，將依原價造價賠償。
        </li>
        <li>▸ 友善大自然｜園區生物多樣性是在城市裡無法比擬的，偶有小生物誤闖，無法避免，請將他們送出門外，回到大自然的懷抱，讓生態永續；全區禁止任何明火與大小型煙火施放使用。
        </li>
        <li>▸ 維護住客隱私｜全區域未經申請禁止飛行空拍機。</li>
        <li>▸ 違法行為｜嚴禁嗑藥、毒品等，如經發現將報警處理。</li>
        <li>▸ 其他加購｜加被$100/條、枕頭 $50/個、早餐 $250/份、延遲退房 $500/小時。
        </li>
        <li>▸ 晚餐預約時段｜18:00、18:30、19:00 請於入住前提早預約（ 訂位後當天時間到僅保留五分鐘 ，或現場候位 ，最後點餐時間 19:30 以前 ）</li>
        <li>▸ 晚餐用餐時間｜18:00~20:00</li>
    </p>
</div>
<div class="cancellation-policy">
    <h4>取消政策</h4>
</div>
<div class="cancellation-policy-content">
    <p>
        本園區訂房訂金之收取，依照觀光局頒佈《定型化契約》規定，並依法令規定比率進行取消訂房之扣款如下：<br>
        <li>▸ 旅客住宿日當日取消訂房扣預付訂金金額 100%</li>
        <li>▸ 旅客於住宿日前 1 日內取消訂房扣房價預付訂金金額 80%
        </li>
        <li>▸ 旅客於住宿日前 2-3 日內取消訂房扣房價預付訂金金額 70%
        </li>
        <li>▸ 旅客於住宿日前 4-6 日內取消訂房扣房價預付訂金金額 60%
        </li>
        <li>▸ 旅客於住宿日前 7-9 日內取消訂房扣房價預付訂金金額 50%
        </li>
        <li>▸ 旅客於住宿日前 10-13 日內取消訂房扣房價預付訂金金額 30%
        </li>
        <li>▸ 旅客於住宿日前 14 日前(含 14 日)取消訂房扣房價預付訂金金額 0% (或可延期半年以一次為限)
        </li>
        <li>▸ 如遇天災(如地震、颱風)導致交通中斷無法前來，經主管單位發佈之訊息，可退還訂金 100% (或可延期半年，以一次為限)。</li>
        <li>▸ 若因颱風交通受阻而導致無法離開，滯留本民宿期間之住宿以六折計算。 </li>

    </p>
</div>

<!-- <手機版>入住須知及取消政策 -->
<div class="check-in-instructions-mobile">
    <h4>入住須知</h4>
    <div class="expand-btn1">
        <img src="./img/component/icon/arrow_down.svg" alt="" class="down">
    </div>
</div>
<div class="check-in-instructions-content-mobile">
    <p>
        以下入住須知，訂房即為認同，請詳閱：<br>
        <li>▸ 尾款支付｜現金或匯款 。
        </li>
        <li>▸ 發票開立｜是否需要開立統一編號（三聯式手開發票）、個人發票（二聯式手開發票)。
        </li>
        <li>▸ 櫃檯服務時間｜08:00~21:00</li>
        <li>▸ 入住時間｜14:00~20:30，如需晚入住，請提早告知。（暑假期間進退房忙碌，恕無法提前入房）</li>
        <li>▸ 退房時間｜12:00 以前（超過退房時間將酌收延時費用，每小時 500 元，最長延至 13:00）</li>
        <li>▸ 迎賓點心｜10:00~17:00（依餐車提供餐點為主，每人一份）
        </li>
        <li>▸ 早餐時間｜預約時段 8:00 、8:30 、9:00 、9:30 (最後點餐 9:50)、外帶餐廳會酌收餐盒費 $20/份 。
        </li>
        <li>▸ 住宿包含每人一份早餐，若有蛋奶素、花生醬過敏，請於提前告知；此外餐點基本內容固定恕不接受調整，記得攜帶餐券於時段內至餐廳用餐。</li>
        <li>▸ 住宿品質｜晚上 22:00 後請降低音量，尊重他人休息時間。</li>
        <li>▸ 關於訪客｜為確保住客安全，房內謝絕訪客，如有訪客請主動告知管家，並至一樓大廳招待您的客人，會客時間為 10:00-18:00。
        </li>
        <li>▸ 續住整理｜請您出門前主動告知管家，基本整理為更換毛、浴巾，垃圾清潔，如有額外需求請您一併告知。</li>
        <li>▸ 入住人數｜超過原約定入住人數，請主動告知；於入住後發現超過原約定人數，將依超過人數罰款，每超過一人收費 $2,000；原房型若有兩位 120 公分以下孩童，將收取一位加人費用 600 元。
        </li>
        <li>▸ 客房維護｜房內禁止吸煙、檳榔、烹煮食物，如經發現將拒絕入住，訂金不退款 ; 退房時若發現在房內有上述行為，將收取清潔費 $3,000。
        </li>
        <li>▸ 物品損壞、遺失｜請勿將房內設備與重複性使用備品帶離園區（水瓶、拖鞋等），如有損壞或無法追回，將依原價造價賠償。
        </li>
        <li>▸ 友善大自然｜園區生物多樣性是在城市裡無法比擬的，偶有小生物誤闖，無法避免，請將他們送出門外，回到大自然的懷抱，讓生態永續；全區禁止任何明火與大小型煙火施放使用。
        </li>
        <li>▸ 維護住客隱私｜全區域未經申請禁止飛行空拍機。</li>
        <li>▸ 違法行為｜嚴禁嗑藥、毒品等，如經發現將報警處理。</li>
        <li>▸ 其他加購｜加被$100/條、枕頭 $50/個、早餐 $250/份、延遲退房 $500/小時。
        </li>
        <li>▸ 晚餐預約時段｜18:00、18:30、19:00 請於入住前提早預約（ 訂位後當天時間到僅保留五分鐘 ，或現場候位 ，最後點餐時間 19:30 以前 ）</li>
        <li>▸ 晚餐用餐時間｜18:00~20:00</li>
    </p>
</div>
<div class="cancellation-policy-mobile">
    <h4>取消政策</h4>
    <div class="expand-btn2">
        <img src="./img/component/icon/arrow_down.svg" alt="" class="down">
    </div>
</div>
<div class="cancellation-policy-content-mobile">
    <p>
        本園區訂房訂金之收取，依照觀光局頒佈《定型化契約》規定，並依法令規定比率進行取消訂房之扣款如下：<br>
        <li>▸ 旅客住宿日當日取消訂房扣預付訂金金額 100%</li>
        <li>▸ 旅客於住宿日前 1 日內取消訂房扣房價預付訂金金額 80%
        </li>
        <li>▸ 旅客於住宿日前 2-3 日內取消訂房扣房價預付訂金金額 70%
        </li>
        <li>▸ 旅客於住宿日前 4-6 日內取消訂房扣房價預付訂金金額 60%
        </li>
        <li>▸ 旅客於住宿日前 7-9 日內取消訂房扣房價預付訂金金額 50%
        </li>
        <li>▸ 旅客於住宿日前 10-13 日內取消訂房扣房價預付訂金金額 30%
        </li>
        <li>▸ 旅客於住宿日前 14 日前(含 14 日)取消訂房扣房價預付訂金金額 0% (或可延期半年以一次為限)
        </li>
        <li>▸ 如遇天災(如地震、颱風)導致交通中斷無法前來，經主管單位發佈之訊息，可退還訂金 100% (或可延期半年，以一次為限)。</li>
        <li>▸ 若因颱風交通受阻而導致無法離開，滯留本民宿期間之住宿以六折計算。 </li>

    </p>
</div>

<div id="info"></div>


<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<!-- 自己的js放在這 -->
<script>
    updatePrices();
    
    // 手機版左方訂房人資料(預設展開)toggle
    $('.down-expand-btn').click(function() {
        $('.booking-detail').slideToggle('slow');
        $(".down-expand-btn .up").toggleClass("active");
    })


    // 手機版入住須知及取消政策(預設隱藏)toggle
    $('.expand-btn1').click(function() {
        $('.check-in-instructions-content-mobile').slideToggle('slow');
        $(".expand-btn1 .down").toggleClass("active");
    })
    $('.expand-btn2').click(function() {
        $('.cancellation-policy-content-mobile').slideToggle('slow');
        $(".expand-btn2 .down").toggleClass("active");
    })
    /*
    const localData = JSON.parse(sessionStorage.getItem('rooms_order'))

    $('.date-num span').eq(0).text(new Date(localData['1'].day1).toLocaleDateString()); //check-in日期
    $('.date-num span').eq(1).text(new Date(localData['1'].day2).toLocaleDateString()); //check-out日期
    $('.date-num span').eq(2).text(localData['1'].days); //計算共幾晚
    $('.room-num span').text(+(localData['1'].num ? localData['1'].num : 0) + +(localData['2'].num ? localData['2'].num : 0) + +(localData['3'].num ? localData['3'].num : 0)); //計算幾間房
    $('.total-num span').text(+(localData['1'].singlePrice ? localData['1'].singlePrice : 0) + +(localData['2'].doublePrice ? localData['2'].doublePrice : 0) + +(localData['3'].quadraPrice ? localData['3'].quadraPrice : 0)); //計算全部訂單的總價
    $('.deposit-num span').text(+$('.total-num span').text() / 2);
    $('.rest-num span').text(+$('.total-num span').text() / 2);


    if (localData['1'].num === 0) {
        $('.single-detail').hide();
    } else {

    }
    if (localData['2'].num === 0) {
        $('.double-detail').hide();
    } else {

    }
    if (localData['3'].num === 0) {
        $('.quadra-detail').hide();
    } else {

    }

    // 單人房
    $('.single-name').html(localData['1'].room_name); //抓取單人房名
    $('.single-detail span').eq(0).html(localData['1'].days); //抓取單人房明細，幾晚
    $('.single-detail span').eq(1).html(localData['1'].num); //抓取單人房明細，幾間
    $('.singlePrice span').html(localData['1'].singlePrice); //單人房明細總價


    // 雙人房
    $('.double-name').html(localData['2'].room_name); //抓取雙人房名
    $('.double-detail span').eq(0).html(localData['2'].days); //抓取雙人房明細，幾晚
    $('.double-detail span').eq(1).html(localData['2'].num); //抓取雙人房明細，幾間
    $('.doublePrice span').html(localData['2'].doublePrice); //雙人房明細總價

    // 四人房
    $('.quadra-name').html(localData['3'].room_name); //抓取四人房名
    $('.quadra-detail span').eq(0).html(localData['3'].days); //抓取四人房明細，幾晚
    $('.quadra-detail span').eq(1).html(localData['3'].num); //抓取四人房明細，幾間
    $('.quadraPrice span').html(localData['3'].quadraPrice); //四人房明細總價

*/
    


    function updatePrices() {
        let total = 0; //總價
        let select_night = 0; //晚
        let select_num = 0; //房間數

        $('.booking-detail-combine').each(function() {
            const item = $(this);
            const item_price = item.find('.per_price'); //單價
            const price = +item_price.attr('data-val');
            // console.log('price:', price); //ok
            const item_num = item.find('.num');
            // console.log('item_num:', item_num);
            const num = +item_num.attr('data-val');
            // console.log('room-num:', num); //ok

            const item_days = item.find('.days');
            // console.log('item_days:', item_days);

            const item_sub = item.find('.sub-total');
            // console.log('item_sub:', item_sub);

            const days = +item_days.attr('data-val');
            // console.log('days:',days); //ok


            item_num.html(num);
            item_price.html(price);
            item_days.html(days);
            item_sub.html(price * num * days);
            total += price * num * days;
            select_night = days;


        });
        $('#total-price').html(total);
        $('#deposit-price').html(total / 2);
        $('#rest-price').html(total - (total / 2));
        $('.night').html(select_night);



    };
    updatePrices();

    function addToCart(event) {
        const btn = $(event.currentTarget);
        const num = +item_num.attr('data-val');


        // const qty = btn.closest('.card-body').find('select').val();
        const sid = btn.attr('data-sid');
        //在送出btn上下屬性


        $.get(
            'handle-room-order.php', {
                day1: dayjs(day1).format('YYYY/MM/DD'), 
                day2: dayjs(day2).format('YYYY/MM/DD'), 
                totalNum,
                room_id,
                num,
                days,
            },
            function(data) {
                console.log('RETURN DATA:', data);
                showCartCount(data);
            },
            'json');
    }
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>