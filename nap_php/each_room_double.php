<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = '房型介紹 - 雙人房皺皺鼻'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/each_room_double.css">


<!-- 各房型介紹 | each-room -->
<section class="each-room">
    <div class="each-room-container">
        <div class="each-room-row d-md-flex">
            <div class="each-room-col col-md-6">
                <div class="room-btn-group d-flex justify-content-sm-around justify-content-md-end">
                    <div class="single-btn d-flex">
                        <a href="each_room_single.php">單人房 呼嚕嚕</a>
                    </div>
                    <div class="double-btn default d-flex">
                        <a href="#">雙人房 皺皺鼻</a>
                    </div>
                    <div class="four-btn d-flex">
                        <a href="each_room_quadra.php">四人房 撓癢癢 </a>
                    </div>
                </div>
                <div class="room-imgbox">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/nap-intro/roomInfo/double-room/double-02.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/nap-intro/roomInfo/double-room/double-09.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/nap-intro/roomInfo/double-room/double-07.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="each-room-title">
                    <h5>雙人房 皺皺鼻</h5>
                </div>
            </div>
            <div class="each-room-col col-md-6 d-md-flex ">
                <div class="room-textbox">
                    <p>皺皺鼻雙人房型位於一樓，室內約10坪大小，兩張6尺加大單人床(6×6.2尺)，室外有專用的獨立圍籬草地及露台房型，深受住宿旅客喜愛。<br><br>靠近山邊四月及五月桐花季時，打開窗戶就可以看到滿山遍野雪白的油桐花。<br><br> <span>(房型樣式每房空間格局略有不同，以實際排房為主)</span></p>
                    <div class="check-time">
                        <p class="line">
                            全館全面禁菸<br>
                            入住時間：14:00後<br>
                            退房時間：12:00前<br>
                            住宿人數：2人 (歡迎攜帶寵物一同入住，上限2隻)
                        </p>
                    </div>
                    <div class="room-textbox-row d-md-flex">
                        <div class="room-text-col col-md-6">
                            <div class="room-detail-row d-flex">
                                <div class="room-detail-col col-6">
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/File-1.svg" alt="">
                                        </div>
                                        <small>加大單人床*2</small>
                                    </div>
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/Towel.svg" alt="">
                                        </div>
                                        <small>附衛浴用品</small>
                                    </div>
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/Frige.svg" alt="">
                                        </div>
                                        <small>冰箱</small>
                                    </div>
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/Bottle.svg" alt="">
                                        </div>
                                        <small>免費瓶裝水</small>
                                    </div>
                                </div>
                                <div class="room-detail-col col-6">
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/Coffee.svg" alt="">
                                        </div>
                                        <small>含早餐兩客</small>
                                    </div>
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/Ice.svg" alt="">
                                        </div>
                                        <small>獨立空調</small>
                                    </div>
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/Hair dryer.svg" alt="">
                                        </div>
                                        <small>吹風機</small>
                                    </div>
                                    <div class="each-detail d-flex align-items-center">
                                        <div class="detail-imgbox">
                                            <img src="./img/component/icon/Paw.svg" alt="">
                                        </div>
                                        <small>可提供寵物餐食</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-text-col col-md-6 d-md-flex align-items-md-center justify-content-md-end price">
                            <h3>NT$ <h2>3,600</h2> 元 / 晚</h3>
                        </div>
                    </div>
                    <div class="booking-btn d-md-flex justify-content-md-end">
                        <a href="room_booking.php">前往訂房</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 入住須知/取消政策 | check-in-instructions/cancellation-policy -->
<!-- <桌機版>入住須知及取消政策 -->
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




<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script src="./nap_js/each_room.js"></script>
<!-- 自己的js放在這 -->


<?php include __DIR__ . '/parts/html-foot.php'; ?>