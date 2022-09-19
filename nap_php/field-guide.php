<?php
require __DIR__ . '/parts/connect_db_vera.php';
$pageName = 'filed-guide'; // 頁面名稱

$perPage = 12;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;



// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM pet_card";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf("SELECT * FROM `pet_card` ORDER BY `pet_id` ASC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}

$genderArray = ['男生','女生'];
$furArray = ['短毛','長毛'];
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css">

<!-- 加自己的css -->
    <link rel="stylesheet" href="./nap_css/filed-guide.css">
    

    
</head>
<?php include __DIR__. '/parts/navbar.php'; ?>



    <!-- banner -->
    <div class="nav-white-block"></div>
    <div class="banner">
        <img src="./img/self/h/f01.jpg" alt="">
    </div>
    <!-- 下拉式彈出頁面--mobile -->
    <div class="banner-button-info">
        <div class="banner-block">
            <div class="banner-block-up m-auto">
                <div class="banner-block-up-container">
                    <p>為什麼要領養 N.A.P. 的浪浪 ｜</p>
                    <div class="banner-block-icon">
                        <img src="./img/component/icon/Exclude-1.svg" alt="">
                    </div>    
                </div>
            </div>
            <div class="banner-block-middle"></div>
            <div class="banner-block-down-mobile">
                <div class="why-card-box-fram">
                    <div class="why-card-box d-flex">
                        <div class="why-card why-card-offset1">
                            <div class="why-card-img">
                                <img src="./img/self/h/illustration-35.png" alt="">
                                <h4>社會化</h4>
                                <p>我們的狗狗都通過了N.A.P. 的訓練和社會化，透過各種相處與陪伴，讓他們能夠快速適應未來的家。</p>
                            </div>
                        </div>
                        <div class="why-card why-card-offset2">
                            <div class="why-card-img">
                                <img src="./img/self/h/illustration-64.png" alt="">
                                <h4>更多愛心</h4>
                                <p>在N.A.P.領養一隻狗狗時，實際上救了兩個生命。當您歡迎浪浪回家時，代表園區內能夠收容另一隻浪浪。︀</p>
                            </div>
                        </div>
                        <div class="why-card why-card-offset3">
                            <div class="why-card-img">
                                <img src="./img/self/h/illustration-17.png" alt="" >
                                <h4>很健康</h4>
                                <p>所有N.A.P 的浪浪都會定期打疫苗及驅蟲，每季也會吃除蚤點心或戴防蚤項圈及防蜱藥。︀</p>
                            </div>
                        </div>
                        <div class="why-card why-card-offset4">
                            <div class="why-card-img">
                                <img src="./img/self/h/illustration-68.png" alt="">
                                <h4>專業團隊</h4>
                                <p>N.A.P.有一個專業團隊，隨時準備協助您解決任何有關毛孩的問題，不論是行為或是健康方面的問題。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 四個點點 -->
                <div class="silder-dot">
                    <div class="dot dot1"></div>
                    <div class="dot dot2"></div>
                    <div class="dot dot3"></div>
                    <div class="dot dot4"></div>
                </div>
            </div>   
        </div>
    </div>
    <!-- 下拉式彈出頁面--pc -->
    <section class="banner-button-info-pc">
        <div class="button-block-pc changeBackground-d ">
            <div class="button-block-row-pc">
                <h3>為什麼要領養 N.A.P. 的浪浪 ｜</h3>
                <div class="button-block-icon-pc">
                    <img src="../img/component/icon/Exclude-1.svg" alt="">
                </div>
            </div>   
        </div>
        <div class="banner-button-container-pc">
            <div class="banner-button-container-row-pc">
                <div class="banner-why-card-pc col-3">
                    <div class="why-card-img-pc">
                        <img src="./img/self/h/illustration-35.png" alt="">
                    </div> 
                    <h3>社會化</h3>
                    <p>我們的狗狗都通過了N.A.P. 的訓練和社會化，透過各種相處與陪伴，讓他們能夠快速適應未來的家。</p>
                </div>
                <div class="banner-why-card-pc col-3">
                    <div class="why-card-img-pc">
                        <img src="./img/self/h/illustration-64.png" alt="">
                    </div> 
                    <h3>更多愛心</h3>
                    <p>在N.A.P.領養一隻狗狗時，實際上救了兩個生命。當您歡迎浪浪回家時，代表園區內能夠收容另一隻浪浪。︀</p>
                </div>
                <div class="banner-why-card-pc col-3">
                    <div class="why-card-img-pc">
                        <img src="./img/self/h/illustration-68.png" alt="">
                    </div> 
                    <h3>專業團隊</h3>
                    <p>N.A.P. 有一個專業團隊，隨時準備協助您解決任何有關毛孩的問題，不論是行為或是健康方面的問題。︀</p>
                </div>
                <div class="banner-why-card-pc col-3">
                    <div class="why-card-img-pc">
                        <img src="./img/self/h/illustration-17.png" alt="">
                    </div> 
                    <h3>很健康</h3>
                    <p>所有N.A.P 的浪浪都會定期打疫苗及驅蟲，每季也會吃除蚤點心或戴防蚤項圈及防蜱藥。︀</p>
                </div>   
            </div>   
        </div>
        

    </section>
    <!-- 篩選器標題 -->
    <section class="filter ">
        <div class="filter-container">
        <div class="filter-title-mobile">
            <h2>園區內的毛孩</h2>
            <h3>Field Guide</h3>
        </div>
        <div class="filter-title-pc">
            <h2>園區內的毛孩｜Field Guide</h2>
        </div>
        
        <div class="filter-group">
            <div class="napSwitch_two">
                <div class="backmask"></div>
                <div class="num1 sec type">
                    狗勾
                </div>
                <div class="num2 sec type">
                    貓貓
                </div>
            </div>
        
            <div class="napSwitch_two">
                <div class="backmask"></div>
                <div class="num1 sec gender">
                    男生
                </div>
                <div class="num2 sec gender">
                    女生
                </div>
            </div>
            <div class="napSwitch_two">
                <div class="backmask"></div>
                <div class="num1 sec fur">
                    長毛
                </div>
                <div class="num2 sec fur">
                    短毛
                </div>
            </div>
        
            <br>
            <!-- 三格 -->
            <div class="napSwitch_three">
                <div class="backmask"></div>
                <div class="num1 sec">
                    幼年 (0~1)
                </div>
                <div class="num2 sec">
                    成年 (1~8)
                </div>
                <div class="num3 sec">
                    老年 (8+)
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- 篩選卡片 -->
    <section class="pet-card">
        <div class="pet-card-cnotainer">
            <div class="pet-card-row d-flex flex-wrap">
                <?php foreach ($rows as $r) : ?>
                    <div class="pet-card-col col-6 col-md-4">
                        <div class="pet-card-content">
                            <div class="pet-card-img">
                                <img src="../img/pet/<?= $r['pet_id'] ?>.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="pet-info">
                                <div class="name"><?= $r['name'] ?></div>
                                    <div class="pet-info-up">
                                        <div class="age"><?= $r['age'].'歲' ?></div>
                                        <div> &nbsp / &nbsp</div>
                                        <div class="gender"><?= $genderArray[$r['gender']] ?></div>
                                    </div>
                                <div class="pet-info-down">
                                    <div class="fur"><?= $furArray[$r['fur']] ?></div>
                                    <div> &nbsp / &nbsp</div>
                                    <div class="personality"><?= $r['personality'] ?></div>
                                </div> 
                                <button class="napBtn_likeBtn">
                                    <div class="svgs">
                                        <svg id='gray' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                                        <path d="M0 7.08414V6.86891C0 4.27496 1.87477 2.0625 4.43086 1.63649C6.08965 1.35483 7.84492 1.90627 9.05469 3.11789L9.5 3.56246L9.91191 3.11789C11.1551 1.90627 12.877 1.35483 14.5691 1.63649C17.126 2.0625 19 4.27496 19 6.86891V7.08414C19 8.62418 18.3617 10.0974 17.2336 11.1476L10.5279 17.408C10.2496 17.6677 9.88223 17.8125 9.5 17.8125C9.11777 17.8125 8.75039 17.6677 8.47207 17.408L1.76604 11.1476C0.639395 10.0974 1.11328e-05 8.62418 1.11328e-05 7.08414H0Z" fill="#CCCCCC"/>
                                    </svg>
                                        <svg id='white' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                                        <path d="M0 7.08414V6.86891C0 4.27496 1.87477 2.0625 4.43086 1.63649C6.08965 1.35483 7.84492 1.90627 9.05469 3.11789L9.5 3.56246L9.91191 3.11789C11.1551 1.90627 12.877 1.35483 14.5691 1.63649C17.126 2.0625 19 4.27496 19 6.86891V7.08414C19 8.62418 18.3617 10.0974 17.2336 11.1476L10.5279 17.408C10.2496 17.6677 9.88223 17.8125 9.5 17.8125C9.11777 17.8125 8.75039 17.6677 8.47207 17.408L1.76604 11.1476C0.639395 10.0974 1.11328e-05 8.62418 1.11328e-05 7.08414H0Z" fill="#FFFFFF"/>
                                        </svg>
                                    </div>
                                    <span>關注</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>  
    </section>
    <!-- 黑色光箱 -->
    <section class="lightBox">
        <div class="lightBox-container">
            <div class="lightBox-container-bg"></div>
            <div class="lightBox-row">
                <div class="close">
                    <img src="../img/component/icon/xmark.svg" alt="">
                </div>
                <div class="lightBox-content">
                    <div class="lightBox-card-img col-md-6">
                        <img src="../img/nap-intro/pet-outdoor/pet-outdoor-04.jpg" alt="">
                    </div>
                    <div class="lightBox-card-info col-md-6">
                        <h3 class="lightBox-card-name">小白</h3>
                        <h6 class="lightBox-card-age">年齡：5</h6>
                        <h6 class="lightBox-card-fur">毛長：短毛</h6>
                        <h6 class="lightBox-card-personality">個性：活潑外向</h6>
                        <h6 class="lightBox-card-describe">背景：</h6>
                        <p class="lightBox-card-describe-text">每個人看到小桑的第一眼都會驚呼，他好像狼！但是是隻活潑、愛笑，又超黏人的狼。但一開始到巴克的小桑並不是披著一身這麼亮麗的皮毛，而是骨瘦如柴、濕搭搭，眼神充滿驚慌。除了一身像狼一般棕色斑斕的皮毛，還有不知原因的沒有尾巴，讓他在幾百隻狗中還是很有特色。</p>
                        <button class="napBtn_likeBtn">
                            <div class="svgs">
                            <svg id='gray' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                                <path d="M0 7.08414V6.86891C0 4.27496 1.87477 2.0625 4.43086 1.63649C6.08965 1.35483 7.84492 1.90627 9.05469 3.11789L9.5 3.56246L9.91191 3.11789C11.1551 1.90627 12.877 1.35483 14.5691 1.63649C17.126 2.0625 19 4.27496 19 6.86891V7.08414C19 8.62418 18.3617 10.0974 17.2336 11.1476L10.5279 17.408C10.2496 17.6677 9.88223 17.8125 9.5 17.8125C9.11777 17.8125 8.75039 17.6677 8.47207 17.408L1.76604 11.1476C0.639395 10.0974 1.11328e-05 8.62418 1.11328e-05 7.08414H0Z" fill="#CCCCCC"/>
                            </svg>
                            <svg id='white' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                                <path d="M0 7.08414V6.86891C0 4.27496 1.87477 2.0625 4.43086 1.63649C6.08965 1.35483 7.84492 1.90627 9.05469 3.11789L9.5 3.56246L9.91191 3.11789C11.1551 1.90627 12.877 1.35483 14.5691 1.63649C17.126 2.0625 19 4.27496 19 6.86891V7.08414C19 8.62418 18.3617 10.0974 17.2336 11.1476L10.5279 17.408C10.2496 17.6677 9.88223 17.8125 9.5 17.8125C9.11777 17.8125 8.75039 17.6677 8.47207 17.408L1.76604 11.1476C0.639395 10.0974 1.11328e-05 8.62418 1.11328e-05 7.08414H0Z" fill="#FFFFFF"/>
                            </svg>
                            </div>
                            <span>關注</span>
                        </button>
                        </div>
                </div>
                
                
                
            
        </div>
        
    </section>
        <!------ 頁數選擇器 PC -------->
        <div class="page_slec">
            <button class="page_click">
                <img width="" src="../components/img/arrow_lastpage.svg" alt="">
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
                <img width="" src="../components/img/arrow_nextpage.svg" alt="">
            </button>
        </div>


<!-- bootstrap擇一使用 -->
<script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>

<!-- 自己的js放在這 -->
<script>
        // 為什麼要領養浪浪toggle
        $('.banner-block-up').click(function(){
            $('.banner-block-down-mobile').slideToggle('slow')
            $(".banner-block-icon").toggleClass("active");
        })
        $('.button-block-pc').click(function(){
            $('.banner-button-container-pc').slideToggle('slow');
            $(".button-block-icon-pc").toggleClass("active");
            

            if ($(".button-block-icon-pc").hasClass("active")) {
                $('.button-block-pc').addClass("changeBackground");
            }else{
                $('.button-block-pc').removeClass("changeBackground")
            }
            
        })
        
        // 手機輪播牆
        $('.why-card-box-fram').scroll(function(){
            console.log('left:',$('.why-card-box-fram').scrollLeft())
            console.log('left:',$('.why-card-box-fram').scrollLeft() > 375)
            if($('.why-card-box-fram').scrollLeft() > -1 && $('.why-card-box-fram').scrollLeft() < 300 ){
                $('.dot1').css('background','#D6D48A')
            }
            else{
                    $('.dot1').css('background','none')    
                }
                if($('.why-card-box-fram').scrollLeft() > 300 && $('.why-card-box-fram').scrollLeft() < 600 ){
                $('.dot2').css('background','#D6D48A')
            }
            else{
                    $('.dot2').css('background','none')    
                }
                if($('.why-card-box-fram').scrollLeft() > 600 && $('.why-card-box-fram').scrollLeft() < 900 ){
                $('.dot3').css('background','#D6D48A')
            }
            else{
                    $('.dot3').css('background','none')    
                }
                if($('.why-card-box-fram').scrollLeft() > 900 && $('.why-card-box-fram').scrollLeft() < 1275 ){
                $('.dot4').css('background','#D6D48A')
            }
            else{
                    $('.dot4').css('background','none')    
                }
        })
        //光箱彈出
        $('.pet-card-content').click(function(){
            $('.lightBox').show();
        })
         //光箱關閉
        $('.close img').click(function(){
                $('.lightBox').hide();
            })
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>


