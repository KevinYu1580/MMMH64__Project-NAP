<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'Homepage'; // 頁面名稱
?>
<?php include __DIR__. '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

<link rel="stylesheet" href="./nap_css/home_page.css">
    

</head>
<?php include __DIR__. '/parts/navbar.php'; ?>



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
        <div class="bot_img">
            <div id="hand">
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
                <a class="napBtn_padding_filled" href="#">
                    <span>查看更多</span>
                </a>
            </div>
            <div class="box">
                <h3>寵物知識課程
                </h3>
                <p>我們提供完善專業的貓狗教育課程，協助建立貓狗飼養知識與訓練，讓新手第一次飼養，也能輕鬆上手，另外我們也提供手作鮮食。</p>
                <a class="napBtn_padding_filled" href="#">
                    <span>查看更多</span>
                </a>
            </div>
            <div class="box">
                <h3>寵物友善環境
                </h3>
                <p>我們園區平日為休憩時間，並不提供相關領養活動與流程，但園區依然有開放場地與部分館舍，還是很歡迎大家可以平日來訪。</p>
                <a class="napBtn_padding_filled" href="#">
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
            <div class="sec1">
                <p>
                    統計退養<br>
                    <span class="hintNum">
                        牽強 <span class="changeNum1">3</span>大理由<br>
                    </span>
                    搬家、過敏、沒時間<br>
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
            <div class="sec3">
                <p>
                    每年約有<br>
                    <span class="hintNum">
                        <span class="changeNum3">155869</span> 隻<br>
                    </span>
                    毛孩等待領養<br>
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
                            什麼是陪睡
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
            <img src="./img/k/paws.gif" alt="">
            <!-- start from here 0919 -->
        </div>
        <div class="bush">
            <img src="./img/k/illustration-69.png" alt="">
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
                    <img id="front" src="./img/k/stepPic-1.svg" alt="">
                    <img id="back" src="./img/k/stepPic-1_back.svg" alt="">
                </div>
                <div id="num2" class="napCard">
                    <img id="front" src="./img/k/stepPic-2.svg" alt="">
                    <img id="back" src="./img/k/stepPic-2_back.svg" alt="">
                </div>
                <div id="num3" class="napCard">
                    <img id="front" src="./img/k/stepPic-3.svg" alt="">
                    <img id="back" src="./img/k/stepPic-3_back.svg" alt="">
                </div>
                <div id="num4" class="napCard">
                    <img id="front" src="./img/k/stepPic-4.svg" alt="">
                    <img id="back" src="./img/k/stepPic-4_back.svg" alt="">
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
                        <img id="front" src="./img/k/stepPic-1.svg" alt="">
                        <img id="back" src="./img/k/stepPic-1_back.svg" alt="">
                    </div>
                </div>
                <div id="num2" class="size">
                    <div class="napCard">
                        <img id="front" src="./img/k/stepPic-2.svg" alt="">
                        <img id="back" src="./img/k/stepPic-2_back.svg" alt="">
                    </div>
                </div>
                <div id="num3" class="size">
                    <div class="napCard">
                        <img id="front" src="./img/k/stepPic-3.svg" alt="">
                        <img id="back" src="./img/k/stepPic-3_back.svg" alt="">
                    </div>
                </div>
                <div id="num4" class="size">
                    <div class="napCard">
                        <img id="front" src="./img/k/stepPic-4.svg" alt="">
                        <img id="back" src="./img/k/stepPic-4_back.svg" alt="">
                    </div>
                </div>

            </div>
            <p class="line">
                飼養後可以多想想貓狗牠們真正需要的是什麼？<br>
                我們應該彼此互相理解、認同，因為動物的存在從不該建立在自身的利益上！
            </p>
        </div>
        <a class="napBtn_fixed_filled" href="#">
            <span>加入會員 Join Us!</span>
        </a>

    </div>





    <?php include __DIR__. '/parts/nap-footer.php'; ?>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script src="./nap_js/home_page.js"></script>
<!-- 自己的js放在這 -->

<?php include __DIR__. '/parts/html-foot.php'; ?>