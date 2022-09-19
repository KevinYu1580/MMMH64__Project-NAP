<?php
// require __DIR__ . '/parts/connect_db_cy.php';
$pageName = '活動檔期'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/events_page.css">



</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>



<!-- 活動頁面banner | events-banner -->
<section class="events-banner">
    <div class="events-banner-row-mb">
        <div class="events-banner-col col-lg-6">
            <div class="events-banner-package">
                <div class="events-banner-package-textbox">
                    <h3>PACKAGE EVENTS</h3>
                    <h2>浪浪套裝活動</h2>
                    <p>歡迎你來到N.A.P.園區，尋找你命定的另一「伴」！<span> N.A.P.透過各種活動與知識課程，</span>讓你與浪浪們在兩日的相處下能透過活動更加的了解彼此。</p>
                    <div class="events-banner-package-btn">
                        <a href="#package-switch">查看活動</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="events-banner-col col-lg-6">
            <div class="events-banner-special">
                <div class="events-banner-special-textbox">
                    <h3>SPECIAL EVENTS</h3>
                    <h2>每月特別活動</h2>
                    <p>每月有配合節慶的活動外，還有專業動物醫學講師開班舉辦講座課程，快帶家中毛孩來參加並留下美好回憶吧！</p>
                    <div class="events-banner-special-btn">
                        <a href="#special-switch">查看活動</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="events-banner-ai01-imgbox">
            <img src="./img/component/illustration/illustration-66.png" alt="">
        </div>
    </div>
    <div class="events-banner-row-pc">

        <div class="banner-special-pc">
            <div class="events-banner-special-textbox">
                <h3>SPECIAL EVENTS</h3>
                <h2>每月特別活動</h2>
                <p>N.A.P.精心準備的主題活動，不僅有配合節慶的每月活動外，還有專業動物醫學講師開班舉辦講座課程，快與您的毛孩子一同參加並留下美好回憶吧！</p>
                <div class="events-banner-special-btn">
                    <a href="#special-switch">查看活動</a>
                </div>
            </div>
        </div>

        <div class="banner-package-pc-box">
            <div class="banner-package-pc">
                <div class="events-banner-package-textbox">
                    <h3>PACKAGE EVENTS</h3>
                    <h2>浪浪套裝活動</h2>
                    <p>歡迎你來到N.A.P.園區，尋找你命定的另一「伴」！<span> N.A.P.透過各種活動與知識課程，</span>讓你與浪浪們在兩日的相處下能透過活動更加的了解彼此。</p>
                    <div class="events-banner-package-btn">
                        <a href="#package-switch">查看活動</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="events-banner-ai01-imgbox">
            <img src="./img/component/illustration/illustration-66.png" alt="">
        </div>
    </div>
</section>

<!-- 選擇器 | events-switch -->
<section class="events-switch">
    <div class="events-switch-frame">
        <div id="package-switch" class="package-switch d-flex justify-content-center align-items-center">
            浪浪套裝活動
        </div>
        <div id="special-switch" class="special-switch d-flex justify-content-center align-items-center">每月特別活動</div>
    </div>
</section>

<!-- 活動卡片 | events-card -->
<section class="events-card">
    <div class="events-card-container">
        <div class="evnets-card-group-mb">
            <div class="events-card-row-mb d-flex d-md-block">

                <div class="events-card-col-mb flex-shrink-0">
                    <div class="events-card-mb d-md-flex">
                        <div class="card-imgbox-mb">
                            <img src="./img/events/pack-pc-01.jpg" alt="">
                        </div>
                        <div class="card-textbox-mb">
                            <h4>10/15-10/16</h4>
                            <h3>汪汪大集合 | 兩日遊</h3>
                            <p>與汪汪寶貝們在園區內相處兩天一夜並參與各種好玩且知性的活動，目標找到彼此的靈魂伴侶並成功領養！</p>
                            <div class="people-cardBtn d-md-flex justify-content-md-between ">
                                <h5>剩餘名額：<span>9</span> / 20</h5>
                                <div class="card-btn">
                                    <a href="./Events_Detail.html">查看活動</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-like d-flex justify-content-center align-items-center ">
                            <img id="outline" src="./img/component/icon/red-Heart-outline.svg" alt="">
                            <img id="cover" class="cover" src="./img/component/icon/red-Heart-filled.svg" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>

<!------ 頁數選擇器 PC -------->

<div class="page_slec">
    <button class="page_click">
        <img width="" src="./img/component/icon/arrow_lastpage.svg" alt="">
    </button>
    <!-- 頁碼 -->
    <div class="indic_wrap">
        <button class="page_indic">
            <span class="napPage">1</span>
        </button>
        <button class="page_indic">
            <span class="napPage">2</span>
        </button>
        <button class="page_indic">
            <span class="napPage">3</span>
        </button>
    </div>
    <!---->
    <button class="page_click">
        <img width="" src="./img/component/icon/arrow_nextpage.svg">
    </button>
</div>


<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script src="./nap_js/events_page.js"></script>
<!-- 自己的js放在這 -->


<?php include __DIR__ . '/parts/html-foot.php'; ?>