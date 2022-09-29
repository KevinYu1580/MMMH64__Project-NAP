<?php
require __DIR__ . '/parts/connect_db_vera.php';
$pageName = 'field-guide'; // 頁面名稱
?>
<?php include __DIR__. '/parts/html-head.php'; ?>
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>


<?php include __DIR__ . '/parts/navbar.php'; ?>
<link rel="stylesheet" href="./nap_css/field_guide.css">
<!-- 手機版地圖 -->
<section class="nap-map-mobile">
    <div class="nap-map-container">
        <div class="nap-map-row">
            <h3>園區地圖｜Field Guide</h3>
            <!-- <h4>Field Guide</h4> -->
            <!-- 地圖按鈕  -->
            <div class="button-group">
                <div class="button button-doghouse-2">狗勾宿舍</div>
                <div class="button button-cat-2">貓貓宿舍</div>
                <div class="button button-room-2">N.A.P.園區住宿</div>
                <div class="button button-run-2 active">奔跑大草原</div>
                <div class="button button-pool-2">漂漂戲水區</div>
                <div class="button button-playground-2">活動體驗區</div>
                <div class="button button-wash-2">戶外梳洗區</div>
                <div class="button button-food-2">快樂餐車屋</div>
                <div class="button button-parking-2">停車場</div>
                <div class="button button-sale-2">售價亭</div>
            </div>
        </div>
    </div>
</section>
<!-- pc版地圖 -->
<section class="nap-map-pc">
    <div class="nap-map-container">
        <div class="nap-map-row-pc">
            <!-- 左邊地圖 -->
            <div class="nap-map-col-left col-md-7 ">
            <h3>園區地圖｜Field Guide</h3>
            <!-- <h4>Field Guide</h4> -->
                <div class="button-group">
                    <div class="button button-doghouse">狗勾宿舍</div>
                    <div class="button button-cat">貓貓宿舍</div>
                    <div class="button button-room">N.A.P.園區住宿</div>
                    <div class="button button-run active">奔跑大草原</div>
                    <div class="button button-pool">漂漂戲水區</div>
                    <div class="button button-playground">活動體驗區</div>
                    <div class="button button-wash">戶外梳洗區</div>
                    <div class="button button-food">快樂餐車屋</div>
                    <div class="button button-parking">停車場</div>
                    <div class="button button-sale">售價亭</div>
                </div>
            </div>
            <!-- 右邊文字介紹 -->
            <div class="nap-map-col-rihgt col-md-5">
                <div class="mapBox-container">
                    <div class="mapBox-row">
                        <div class="mapBox-card-img">
                            <div class="lightBox-card-img">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./img/nap-intro/pet-outdoor/pet-outdoor-05.jpeg" class="d-block w-100 photo1 " alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./img/nap-intro/pet-outdoor/pet-outdoor-07.jpeg" class="d-block w-100 photo2" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./img/nap-intro/pet-outdoor/pet-outdoor-06.jpeg" class="d-block w-100 photo3" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                                        <span class="sr-only ">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="mapBox-card-info">
                            <div class="title">
                                <h4>奔跑大草原</h4>
                                <p>戶外狗狗運動公園，大約為400坪及200坪分開的獨立草地，可以放開牽繩讓狗狗盡情自由奔跑、玩樂。主人們盡情享受鄉間田園的寧謐感，聽得到風聲、水聲和鳥叫聲，及空氣裡源源不絕狗狗的歡笑聲。</p>
                            </div>

                            <div class="opentime">
                                <h5>開放時間</h5>
                                <p>週二至週六： 08:30 ~ 18:00</p>
                                <p>週日至週一： 09:00 ~ 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- bootstrap擇一使用 -->


<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script>
<script src="./nap_js/component.js"></script>

<!-- 自己的js放在這 -->
<script>
    // 替換照片
    $('.button-run').click(function() {
        $('.photo1').attr('src', './img/nap-intro/pet-outdoor/pet-outdoor-05.jpeg')
        $('.photo2').attr('src', './img/nap-intro/pet-outdoor/pet-outdoor-07.jpeg')
        $('.photo3').attr('src', './img/nap-intro/pet-outdoor/pet-outdoor-06.jpeg')
        $('.title h4').text('奔跑大草原')
        $('.title p').text('戶外狗狗運動公園，大約為400坪及200坪分開的獨立草地，可以放開牽繩讓狗狗盡情自由奔跑、玩樂。主人們盡情享受鄉間田園的寧謐感，聽得到風聲、水聲和鳥叫聲，及空氣裡源源不絕狗狗的歡笑聲。')
    })
    $('.button-run-2').click(function() {
        $('.lightBox').show();
        $('.photo1').attr('src', './img/nap-intro/pet-outdoor/pet-outdoor-05.jpeg')
        $('.photo2').attr('src', './img/nap-intro/pet-outdoor/pet-outdoor-07.jpeg')
        $('.photo3').attr('src', './img/nap-intro/pet-outdoor/pet-outdoor-06.jpeg')
        $('.title h4').text('奔跑大草原')
        $('.title p').text('戶外狗狗運動公園，大約為400坪及200坪分開的獨立草地，可以放開牽繩讓狗狗盡情自由奔跑、玩樂。主人們盡情享受鄉間田園的寧謐感，聽得到風聲、水聲和鳥叫聲，及空氣裡源源不絕狗狗的歡笑聲。')

    })
    $('.button-pool').click(function() {
        $('.photo1').attr('src', './img/nap-intro/waterpool/waterpool-04.jpg')
        $('.photo2').attr('src', './img/nap-intro/waterpool/waterpool-02.jpg')
        $('.photo3').attr('src', './img/nap-intro/waterpool/waterpool-03.jpg')
        $('.title h4').text('漂漂戲水區')

        $('.title p').text('泳池均有止滑設計、大面積緩坡，並有淺水灘區。過濾設備採用「銅銀離子殺菌消毒」，透過純銅與純銀離子的釋放，讓水殺菌、除垢並除藻，且讓原本的硬水轉換成電解水。')
    })
    $('.button-pool-2').click(function() {
        $('.lightBox').show();
        $('.photo1').attr('src', './img/nap-intro/waterpool/waterpool-04.jpg')
        $('.photo2').attr('src', './img/nap-intro/waterpool/waterpool-02.jpg')
        $('.photo3').attr('src', './img/nap-intro/waterpool/waterpool-03.jpg')
        $('.title h4').text('漂漂戲水區')
        $('.title p').text('泳池均有止滑設計、大面積緩坡，並有淺水灘區。過濾設備採用「銅銀離子殺菌消毒」，透過純銅與純銀離子的釋放，讓水殺菌、除垢並除藻，且讓原本的硬水轉換成電解水。')
    })
    $('.button-cat').click(function() {
        $('.photo1').attr('src', './img/nap-intro/pet-indoor/pet-indoor-01.jpg')
        $('.photo2').attr('src', './img/nap-intro/pet-indoor/pet-indoor-02.jpg')
        $('.photo3').attr('src', './img/nap-intro/pet-indoor/pet-indoor-03.jpg')
        $('.title h4').text('貓貓宿舍')
        $('.title p').text('聘請德國設計公司Goldtatze將室內空間改造成空中貓操場，在室內空間添加木橋，吊床，抓抓柱，小貓屋，讓貓咪們可以在觀察整個房子各角落與貓主人動線的同時還能盡情奔跑、翻滾、冒險與休憩。')
    })
    $('.button-cat-2').click(function() {
        $('.lightBox').show();
        $('.photo1').attr('src', './img/nap-intro/pet-indoor/pet-indoor-01.jpg')
        $('.photo2').attr('src', './img/nap-intro/pet-indoor/pet-indoor-02.jpg')
        $('.photo3').attr('src', './img/nap-intro/pet-indoor/pet-indoor-03.jpg')
        $('.title h4').text('貓貓宿舍')
        $('.title p').text('聘請德國設計公司Goldtatze將室內空間改造成空中貓操場，在室內空間添加木橋，吊床，抓抓柱，小貓屋，讓貓咪們可以在觀察整個房子各角落與貓主人動線的同時還能盡情奔跑、翻滾、冒險與休憩。')
    })
    $('.button-room').click(function() {
        $('.photo1').attr('src', './img/nap-intro/roomInfo/room-1.jpg')
        $('.photo2').attr('src', './img/nap-intro/roomInfo/room-2.jpg')
        $('.photo3').attr('src', './img/nap-intro/roomInfo/room-3.jpg')
        $('.title h4').text('N.A.P.園區住宿')
        $('.title p').text('屋白牆白就是要讓您來此享受心靈純白，二層樓極簡建築恣意悠閒上下，每間房型均配有觀景露台、部分房間並有獨立專屬草皮，園區為寵物友善民宿，配置寵物運動公園及寵物梳洗區梳洗區備有桌子、水龍頭及簡易梳洗工具。 ')
    })
    $('.button-room-2').click(function() {
        $('.lightBox').show();
        $('.photo1').attr('src', './img/nap-intro/roomInfo/room-1.jpg')
        $('.photo2').attr('src', './img/nap-intro/roomInfo/room-2.jpg')
        $('.photo3').attr('src', './img/nap-intro/roomInfo/room-3.jpg')
        $('.title h4').text('N.A.P.園區住宿')
        $('.title p').text('屋白牆白就是要讓您來此享受心靈純白，二層樓極簡建築恣意悠閒上下，每間房型均配有觀景露台、部分房間並有獨立專屬草皮，園區為寵物友善民宿，配置寵物運動公園及寵物梳洗區梳洗區備有桌子、水龍頭及簡易梳洗工具。 ')
    })
    $('.button-wash').click(function() {
        $('.photo1').attr('src', './img/nap-intro/bath-area/bath-area-02.jpg')
        $('.photo2').attr('src', './img/nap-intro/bath-area/bath-area-03.jpg')
        $('.photo3').attr('src', './img/nap-intro/bath-area/bath-area-05.jpg')
        $('.title h4').text('戶外梳洗區')
        $('.title p').text('園區內有專用的梳洗區，備有可調整高度的梳洗桌子，幫浪浪們洗澡時不用再彎腰駝背，並有冷熱水可以使用。梳洗區備有清洗檯面、蓮蓬頭、冷熱水、防滑墊，為了維護園區內的整潔，使用完後請務必將物品歸為原位，謝謝配合。')
    })
    $('.button-wash-2').click(function() {
        $('.lightBox').show();
        $('.photo1').attr('src', './img/nap-intro/bath-area/bath-area-02.jpg')
        $('.photo2').attr('src', './img/nap-intro/bath-area/bath-area-03.jpg')
        $('.photo3').attr('src', './img/nap-intro/bath-area/bath-area-05.jpg')
        $('.title h4').text('戶外梳洗區')
        $('.title p').text('園區內有專用的梳洗區，備有可調整高度的梳洗桌子，幫浪浪們洗澡時不用再彎腰駝背，並有冷熱水可以使用。梳洗區備有清洗檯面、蓮蓬頭、冷熱水、防滑墊，為了維護園區內的整潔，使用完後請務必將物品歸為原位，謝謝配合。')
    })
    $('.button-food').click(function() {
        $('.photo1').attr('src', './img/nap-intro/food/food1.jpg')
        $('.photo2').attr('src', './img/nap-intro/food/food2.jpg')
        $('.photo3').attr('src', './img/nap-intro/food/food3.jpg')
        $('.title h4').text('波波小餐車')
        $('.title p').text('波波小餐車選用手工自製的麵團、台灣純豬肉，製作出一個個美味的熱狗堡，每日限量現點現做，堅持原食物料理，沒有色素和防腐劑，讓偶爾想來點垃圾食物，又想吃得健康的朋友，吃得快樂又安心。')
    })

    $('.button-food-2').click(function() {
        $('.lightBox').show();
        $('.photo1').attr('src', './img/nap-intro/food/food1.jpg')
        $('.photo2').attr('src', './img/nap-intro/food/food2.jpg')
        $('.photo3').attr('src', './img/nap-intro/food/food3.jpg')
        $('.title h4').text('波波小餐車')
        $('.title p').text('波波小餐車選用手工自製的麵團、台灣純豬肉，製作出一個個美味的熱狗堡，每日限量現點現做，堅持原食物料理，沒有色素和防腐劑，讓偶爾想來點垃圾食物，又想吃得健康的朋友，吃得快樂又安心。')
    })

    // 燈箱關起來
    $('.close img').click(function() {
        $('.lightBox').hide();
    })

    // 顯示被點擊區域的顏色
    $('.button-group .button').click(function(){
        $(this).addClass('button-group active').siblings().removeClass('button-group active');
    })

</script>
<?php include __DIR__. '/parts/html-foot.php'; ?>