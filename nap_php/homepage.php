<?php
// require __DIR__ . '/parts/connect_db.php';
session_start();


// $pageName = 'Home'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<title><?= $title ?></title>
<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>
<link rel="stylesheet" href="./nap_css/home_page.css?version=&lt;?php echo time(); ?&gt;">



<!-- 跳過視覺動畫按鈕 -->
<button class="skipBtn  flex-column align-items-center justify-content-center gap-2">
    <span class="skipText">S K I P</span>
    <img class="skipIcon" width='24px' src="./img/component/icon/arrow_down-grey.svg" alt="">
</button>


<!-- 視覺動畫定位 -->
<div class="ani_anchor">
    <div class="aniCover">

        <div class="aniCover_mask">
            <div class="textWrap">
                <span>
                    <span>等待</span>能被你牽走<br>這雙<span>毛絨的手</span>
                </span>
                <img src="./img/self/k/visualText.png" alt="">
            </div>
        </div>
    </div>

</div>

<!-- first page -->
<div class="first_page">
    <div class="content_wrap">
        <!-- logo+text -->
        <div class="logo_content">
            <img src="./img/component/logo/logo-1.svg" alt="">
            <h1 class="line1 napText">
                N.A.P.
            </h1>
            <h2 class="line2 napText">
                <span id="first">N</span>ever
                <span id="mid">A</span>bandon
                <span id="last">P</span>et
            </h2>
        </div>
        <!-- logo+text -->
        <div class="botImg">
            <img class="" src="./img/self/k/bot-house.png" alt="">
        </div>
    </div>
</div>

<div class="home_info">
    <div class="content_wrap">
        <div class="story_wrap text-center">
            <div class="napHeadline ">
                N.A.P. 的故事
            </div>
            <div class="napText ">
                <p>我們以浪浪收容媒合起家，<br>
                    起初在小小的一個空間收容了第一批的浪浪，<br>
                    看著園區成為毛孩心中的感動，<br>
                    是傳遞幸福的開始。<br><br>

                    之後我們不斷完善浪浪們的中途之家，<br>
                    承載著大家的愛與支持，<br>
                    一點一點的發芽茁壯，轉型為以浪浪媒合為基礎的寵物友善園區，<br>
                    將這份幸福也分享出去。
                </p>
            </div>

        </div>
        <div class="field_intro text-center">
            <div class="napHeadline ">
                我們把N.A.P. <br>
                當成自己的家在經營
            </div>
            <div class="napText">
                <p>
                    “做一個能帶給別人幸福的人 ”<br>
                    是N.A.P.所有工作人員共同的理念，<br>
                    以改善臺灣的飼寵環境及建立飼主完善的飼養觀念為目標，<br>
                    把NAP當自己家，也給浪浪一個家。
                </p>
            </div>
        </div>
    </div>
    <div class="hand_aniWrap">
        <div class="hand">
            <img class="left" src="./img/self/k/hand_left.png" alt="">
            <img class="right" src="./img/self/k/hand_right.png" alt="">
        </div>
        <div class="bot_img">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/self/k/carousel-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/self/k/carousel-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/self/k/carousel-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/self/k/carousel-4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/self/k/carousel-5.jpg" class="d-block w-100" alt="...">
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
    </div>

</div>

<!-- info_points -->
<div class="info_points">
    <div class="infoBoxs">
        <div class="box">
            <h3>特別活動課程
            </h3>
            <p>園區提供完善專業的貓狗教育流程與專人陪同，也提供手作鮮食、浪浪回娘家...等等特別活動， 讓您學習之餘也能輕鬆玩樂。</p>
            <a class="napBtn_padding_filled" href="events_page.php">
                <span>查看更多</span>
            </a>
        </div>
        <div class="box">
            <h3>寵物知識課程
            </h3>
            <p>我們提供完善專業的貓狗教育課程，協助建立貓狗飼養知識與訓練，讓新手第一次飼養，也能輕鬆上手，另外我們也提供手作鮮食。</p>
            <a class="napBtn_padding_filled" href="events_page.php">
                <span>查看更多</span>
            </a>
        </div>
        <div class="box">
            <h3>寵物友善環境
            </h3>
            <p>我們園區平日為休憩時間，並不提供相關領養活動與流程，但園區依然有開放場地與部分館舍，還是很歡迎大家可以平日來訪。</p>
            <a class="napBtn_padding_filled" href="field_guide.php">
                <span>查看更多</span>
            </a>
        </div>
    </div>
    <div class="pool"></div>
    <div class="poolPeople"></div>
    <div class="fence"></div>
</div>

<!-- explain -->
<div class="explain">
    <div class="cause">
        <div class="sec3">
            <p>
                每年約有<br>
                <span class="hintNum">
                    <span class="changeNum3">155869</span> 隻<br>
                </span>
                毛孩等待領養<br>
            </p>
        </div>

        <div class="sec2">
            <p>
                卻因不符期待<br>
                <span class="hintNum">
                    平均 <span class="changeNum2">10</span>天<br>
                </span>
                而紛紛退養<br>
            </p>
        </div>

        <div class="sec1">
            <p>
                統計退養<br>
                <span class="hintNum">
                    牽強 <span class="changeNum1">3</span>大理由<br>
                </span>
                搬家、過敏、沒時間<br>
            </p>
        </div>

    </div>
    <div class="explainInfo">
        <div class="naptext">
            <div class="napHeadline"></div>
            <p></p>
        </div>
        <div class="naptext">
            <div class="napHeadline"></div>
            <p></p>
        </div>
        <div class="naptext">
            <div class="napHeadline font-weight-bold"></div>
            <p></p>
        </div>
        <div class="contentWrap">
            <div class="explainText">
                <div>
                    <h4 class="sec1">
                        退養理由百百種
                    </h4>
                    <p>在以「領養代替購買」的口號宣導下，2015 年時領養率達到了史上最高點 69.85%，但卻也因為許多的「不了解」而造就了多起惡質的退養案例。</p>

                </div>
                <div>
                    <h4 class="sec1">
                        降低退養率
                    </h4>
                    <p>
                        為了讓領養者不會因自我預期有落差而造成的退養問題，N.A.P. 園區決定透過陪伴及相處等活動讓彼此認識，進而解決退養的問題。
                    </p>
                </div>
                <div>
                    <h4 class="sec2">
                        什麼是浪浪陪睡
                    </h4>
                    <p>
                        陪睡的目地是透過白天參與園區內安排的相關活動及課程，了解相關知識與互動，夜晚與浪浪們在同個房間相處陪伴，進而更了解浪浪們的個性與習慣，增進彼此間的默契，提前讓彼此熟悉讓浪浪們能夠成為家庭中的一份子。
                    </p>
                </div>
            </div>
            <div class="sleepPic">
                <img id="num1" src="./img/self/k/sleepPic.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="paws">
        <img src="./img/self/k/paws.gif" alt="">
    </div>
    <div class="bush">
        <img src="./img/component/illustration/illustration-69.png" alt="">
    </div>
</div>

<!------ steps ------>
<div class="napSteps">
    <div class="wrap_mb">
        <p class="line">
            認養前，<br>
            可以先思考各種可能的問題或狀況，<br>
            同時重新檢視自己的個性及生活環境<br>
            和家庭成員，<br>
            再做出對彼此最合適的決定！
        </p>
        <div class="cardWrap">
            <div id="num1" class="napCard">
                <img id="front" src="./img/self/k/stepPic-1.svg" alt="">
                <img id="back" src="./img/self/k/stepPic-1_back.svg" alt="">
            </div>
            <div id="num2" class="napCard">
                <img id="front" src="./img/self/k/stepPic-2.svg" alt="">
                <img id="back" src="./img/self/k/stepPic-2_back.svg" alt="">
            </div>
            <div id="num3" class="napCard">
                <img id="front" src="./img/self/k/stepPic-3.svg" alt="">
                <img id="back" src="./img/self/k/stepPic-3_back.svg" alt="">
            </div>
            <div id="num4" class="napCard">
                <img id="front" src="./img/self/k/stepPic-4.svg" alt="">
                <img id="back" src="./img/self/k/stepPic-4_back.svg" alt="">
            </div>
        </div>
        <p class="line">
            飼養後可以多想想貓狗<br>
            牠們真正需要的是什麼？<br>
            我們應該彼此互相理解、認同，<br>
            因為動物的存在從不該建立在<br>
            自身的利益上！
        </p>
    </div>

    <div class="wrap_pc">
        <p class="line">
            認養前，可以先思考各種可能的問題或狀況，<br>
            同時重新檢視自己的個性及生活環境和家庭成員，<br>
            再做出對彼此最合適的決定！
        </p>
        <div class="cardWrap">
            <div id="num1" class="size">
                <div class="napCard">
                    <img id="front" src="./img/self/k/stepPic-1.svg" alt="">
                    <img id="back" src="./img/self/k/stepPic-1_back.svg" alt="">
                </div>
            </div>
            <div id="num2" class="size">
                <div class="napCard">
                    <img id="front" src="./img/self/k/stepPic-2.svg" alt="">
                    <img id="back" src="./img/self/k/stepPic-2_back.svg" alt="">
                </div>
            </div>
            <div id="num3" class="size">
                <div class="napCard">
                    <img id="front" src="./img/self/k/stepPic-3.svg" alt="">
                    <img id="back" src="./img/self/k/stepPic-3_back.svg" alt="">
                </div>
            </div>
            <div id="num4" class="size">
                <div class="napCard">
                    <img id="front" src="./img/self/k/stepPic-4.svg" alt="">
                    <img id="back" src="./img/self/k/stepPic-4_back.svg" alt="">
                </div>
            </div>

        </div>
        <p class="line">
            飼養後可以多想想貓狗牠們真正需要的是什麼？<br>
            我們應該彼此互相理解、認同，因為動物的存在從不該建立在自身的利益上！
        </p>
    </div>
    <a class="napBtn_fixed_filled"  onclick= loginCheck() >
        <span>加入會員 Join Us!</span>
    </a>

</div>
<a class="gameLink" href="./game.php" target="blank">
    <img src="./img/component/icon/joystick.svg" alt="">
</a>


<!-- Scroll Top Btn -->

<div class="backtop-btn">
    <img src="./img/component/icon/Exclude-white.svg" alt="">
</div>

<div class="footer-mobile">
    <div class="illustration">
        <img src="./img/component/illustration/illustration-65.png" alt="">
    </div>
    <div class="branch">
        <img src="./img/component/illustration/illustration-67.png" alt="">
    </div>
    <div class="top_sec">
        <div class="content">
            <p class="sec1">
                聯絡資訊 <br>
                地址： 313 新竹縣尖石鄉玉峰段900號<br>
                電話： 03-456 0202<br>
                傳真： 03-456 2266<br>
                客服信箱： service@nap.com.tw<br>
            </p>
            <p class="sec2">
                住宿服務：週日 ～ 週四　|　08:00 ～ 20:00
                <br>
                定期園區活動：週五 ～ 週六　|　08:00 ～ 18:00
            </p>
            <div class="logos">
                <svg style="margin-right:16px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 40" fill="none">
                    <g clip-path="url(#clip0_178_4963)">
                        <path d="M39.375 20C39.375 9.29688 30.7031 0.625 20 0.625C9.29688 0.625 0.625 9.29688 0.625 20C0.625 29.6703 7.71016 37.6859 16.9727 39.1406V25.6008H12.0508V20H16.9727V15.7312C16.9727 10.8758 19.8633 8.19375 24.2906 8.19375C26.4109 8.19375 28.6281 8.57188 28.6281 8.57188V13.3375H26.1844C23.7781 13.3375 23.0273 14.8312 23.0273 16.3633V20H28.4008L27.5414 25.6008H23.0273V39.1406C32.2898 37.6859 39.375 29.6703 39.375 20Z" fill="#ffffff" />
                    </g>
                    <defs>
                        <clipPath id="clip0_178_4963">
                            <rect width="40" height="40" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                    <g clip-path="url(#clip0_602_28668)">
                        <path d="M15.05 12.15C13.45 12.15 12.2 13.45 12.2 15C12.2 16.55 13.5 17.85 15.05 17.85C16.65 17.85 17.9 16.55 17.9 15C17.9 13.45 16.65 12.15 15.05 12.15Z" fill="white" />
                        <path d="M18.65 7.59998H11.35C9.29998 7.59998 7.59998 9.29998 7.59998 11.35V18.6C7.59998 20.65 9.29998 22.35 11.35 22.35H18.6C20.65 22.35 22.35 20.65 22.35 18.6V11.35C22.4 9.29998 20.7 7.59998 18.65 7.59998ZM15.05 19.5C12.6 19.5 10.55 17.5 10.55 15C10.55 12.55 12.55 10.5 15.05 10.5C17.5 10.5 19.55 12.5 19.55 15C19.55 17.45 17.55 19.5 15.05 19.5ZM19.8 11.3C19.2 11.3 18.75 10.8 18.75 10.25C18.75 9.64998 19.25 9.19998 19.8 9.19998C20.4 9.19998 20.85 9.69998 20.85 10.25C20.9 10.8 20.4 11.3 19.8 11.3Z" fill="white" />
                        <path d="M15 0C6.7 0 0 6.7 0 15C0 23.3 6.7 30 15 30C23.3 30 30 23.3 30 15C30 6.7 23.3 0 15 0ZM24.1 18.65C24.1 21.65 21.65 24.1 18.65 24.1H11.35C8.35 24.1 5.9 21.65 5.9 18.65V11.35C5.9 8.35 8.35 5.9 11.35 5.9H18.6C21.6 5.9 24.05 8.35 24.05 11.35V18.65H24.1Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_602_28668">
                            <rect width="30" height="30" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

    </div>
    <div class="bot_sec">
        <span>
            Copyright © 2022 N.A.P. Guide CO.,LTD All rights reserved.
        </span>
    </div>

</div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js?version=&lt;?php echo time(); ?&gt;"></script>
<script src="./nap_js/home_page.js"></script>
<!-- 自己的js放在這 -->
<script>

    function loginCheck() {
        console.log(8888)
        let logined = <?php  echo empty($_SESSION['user']) ? 'true' : 'false' ?>;

        if ( logined) {
            window.location.href = "register.php"
        }else{
            Swal.fire({
                icon: 'warning',
                title: '已登入會員!',
                timer: 1500,
                showConfirmButton: false,
                // 以下為框框消失後執行的功能(可不加)
            })
        }}

</script>



<?php include __DIR__ . '/parts/html-foot.php'; ?>