<?php
require __DIR__ . '/parts/connect_db.php';
// require __DIR__ . '/parts/connect_db_cy.php';
// require __DIR__ . '/parts/connect_db_penny.php';
$pageName = '房型介紹'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/room_info.css">


<!-- 房型介紹banner | room-banner -->
<section class="room-banner">
    <div class="room-banner-container">
        <div class="room-banner-imgbox">
            <img src="./img/nap-intro/field-guide/field_guide-02.jpg" alt="">
        </div>
        <div class="room-banner-textbox">
            <h2>房型介紹<br>Room Info</h2>
            <p>請參考房間照片及說明<br>依需求再預訂<span>，</span>
                訂房前請詳讀訂房規則與須知<span></span><br>訂房即代表完全同意規定</p>
            <h3>本訂房專頁供旅客平日訂房
                假日則為園區認養活動時間不開放訂房及入園活動<span>如欲參與假日認養活動<span>，</span>請點擊下方按鈕前往活動報名</span></h3>
            <p class="room-banner-textbox-btn"><a href="events_page.php" target="_blank">前往活動報名</a></p>
        </div>
        <div class="room-banner-ai01-imgbox">
            <img src="./img/component/illustration/illustration-75.png" alt="">
        </div>
        <div class="room-banner-ai02-imgbox">
            <img src="./img/component/illustration/illustration-02.png" alt="">
        </div>
    </div>
</section>

<!-- 房內設施介紹卡片 | room-info -->
<section class="room-info">
    <div class="room-info-card-container">
        <div class="room-info-card-row">
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/Paw.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>寵物友善</h5>
                        <p class="room-info-text-p-pc">提供寵物床、飲食碗及梳洗設備</p>
                    </div>
                </div>
            </div>
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/Wifi.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>WIFI</h5>
                        <p class="room-info-text-p-pc">房間提供<br>免費WIFI</p>
                    </div>
                </div>
            </div>
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/Balcony.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>獨立陽台</h5>
                        <p class="room-info-text-p-pc">讓毛孩及您有更多空間一起玩耍</p>
                    </div>
                </div>
            </div>
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/TV.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>TV</h5>
                        <p class="room-info-text-p-pc">所有房間均有<br>中華電信MOD</p>
                    </div>
                </div>
            </div>
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/Playground.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>遊憩場所</h5>
                        <p class="room-info-text-p-pc">給毛孩最舒適的<br>遊憩場所</p>
                    </div>
                </div>
            </div>
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/Pool.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>寵物泳池</h5>
                        <p class="room-info-text-p-pc">提供毛孩專屬<br>玩水空間</p>
                    </div>
                </div>
            </div>
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/Coffee.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>免費茶飲</h5>
                        <p class="room-info-text-p-pc">再忙也要一起<br>喝杯咖啡</p>
                    </div>
                </div>
            </div>
            <div class="room-info-card-col col-3">
                <div class="room-info-card d-flex flex-column justify-content-center align-items-center">
                    <div class="room-info-imgbox">
                        <img src="./img/component/icon/Shower.svg" alt="">
                    </div>
                    <div class="room-info-text">
                        <h5>淋浴設備</h5>
                        <p class="room-info-text-p-pc">提供高級<br>沐浴用品</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 房型介紹卡片 | room-intoduce -->
<section class="room-introduce">
    <div class="room-introduce-container">
        <div class="room-introduce-row row row-cols-md-3">
            <div class="room-introduce-col">
                <div class="room-introduce-card">
                    <div class="room-introduce-imgbox">
                        <img src="./img/nap-intro/roomInfo/single-room/single-02.jpg" alt="">
                    </div>
                    <div class="room-introduce-textbox">
                        <h5>單人房 呼嚕嚕</h5>
                        <p>房價$2,600/晚<br>*此房不提供加人服務</p>
                        <p class="room-introduce-btn"><a href="each_room_single.php" target="_blank">查看詳情</a></p>
                    </div>
                </div>
            </div>
            <div class="room-introduce-col">
                <div class="room-introduce-card">
                    <div class="room-introduce-imgbox double-room-imgbox">
                        <img src="./img/nap-intro/roomInfo/double-room/double-04.jpg" alt="">
                    </div>
                    <div class="room-introduce-textbox">
                        <h5>雙人房 皺皺鼻</h5>
                        <p>房價$3,600/晚<br>*此房不提供加人服務</p>
                        <p><a href="each_room_double.php" target="_blank">查看詳情</a></p>
                    </div>
                </div>
            </div>
            <div class="room-introduce-col">
                <div class="room-introduce-card">
                    <div class="room-introduce-imgbox quadra-room-imgbox">
                        <img src="./img/nap-intro/roomInfo/quadra-room/quadra-05.jpg" alt="">
                    </div>
                    <div class="room-introduce-textbox">
                        <h5>四人房 撓癢癢</h5>
                        <p>房價$6,600/晚<br>*此房不提供加人服務</p>
                        <p><a href="./Each_Room_quadra.html" target="_blank">查看詳情</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<!-- 自己的js放在這 -->


<?php include __DIR__ . '/parts/html-foot.php'; ?>