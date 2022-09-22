<?php
require __DIR__ . '/parts/connect_db_vera.php';
$pageName = 'filed-guide'; // 頁面名稱
?>
<?php include __DIR__. '/parts/html-head.php'; ?>
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    

    
</head>
<?php include __DIR__. '/parts/navbar.php'; ?>
<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/filed-guide.css">


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
                    <img src="./img/component/icon/Exclude-1.svg" alt="">
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
            <div class="napSwitch_two my-option type" data-val="0">
                <div class="backmask"></div>
                <a class="num1 sec type" onclick="getData({type:1})">
                    狗勾
                </a>
                <a class="num2 sec type" onclick="getData({type:0})">
                    貓貓
                </a>
            </div>
        
            <div class="napSwitch_two my-option gender" data-val="0">
                <div class="backmask"></div>
                <a class="num1 sec gender" onclick="getData({gender:0})">
                    男生
                </a>
                <a class="num2 sec gender" onclick="getData({gender:1})">
                    女生
                </a>
            </div>
            <div class="napSwitch_two my-option fur" data-val="1">
                <div class="backmask"></div>
                <a class="num1 sec fur"  onclick="getData({fur:1})">
                    長毛
                </a>
                <a class="num2 sec fur" onclick="getData({fur:0})">
                    短毛
                </a>
            </div>
        
            <br>
            <!-- 三格 -->
            <div class="napSwitch_three my-option old" data-val="1">
                <div class="backmask"></div>
                <a class="num1 sec old"  onclick="getData({old:0})">
                    幼年 (0~1)
                </a>
                <a class="num2 sec old"  onclick="getData({old:1})">
                    成年 (2~7)
                </a>
                <a class="num3 sec old"  onclick="getData({old:2})">
                    老年 (8+)
                </a>
            </div>
        </div>
    </div>
    </section>
    <!-- 篩選卡片 -->
    <section class="pet-card">
        <div class="pet-card-cnotainer">
            <div class="pet-card-row d-flex flex-wrap" id="petCard">

            </div>
        </div>  
    </section>
    <!-- 黑色光箱 -->
    <section class="lightBox">
        <div class="lightBox-container">
            <div class="lightBox-container-bg"></div>
            <div class="lightBox-row">
                <div class="close">
                    <img src="../nap_php/img/component/icon/xmark.svg" alt="">
                </div>
                <div class="lightBox-content">
                    <div class="lightBox-card-img col-md-6">
                        <img src="../nap_php/img/pet/c001.jpg" alt="">
                    </div>
                    <div class="lightBox-card-info col-md-6">
                        <h3 class="lightBox-card-name"></h3>
                        <h6 class="lightBox-card-age">年齡：<span></span></h6>
                        <h6 class="lightBox-card-fur"></h6>
                        <h6 class="lightBox-card-personality">個性：<span></span> </h6>
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
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="?<?php $qsp['page'] = $page - 1;
                                        echo http_build_query($qsp); ?>#petCard">
                <svg width="112" height="40" viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="arrow" d="M61.4 16.68V18.18H69.62V16.68H61.4ZM53.02 26.16V27.66H70.98V26.16H53.02ZM60.54 10.5V26.96H62.12V10.5H60.54ZM72.88 18.38V20.02H91.18V18.38H72.88ZM97.08 18.62H107.18V20.46H97.08V18.62ZM97.08 21.62H107.18V23.46H97.08V21.62ZM97.08 15.66H107.18V17.46H97.08V15.66ZM95.52 14.46V24.66H108.78V14.46H95.52ZM103.48 25.98C105.82 26.78 108.2 27.84 109.62 28.62L111.02 27.6C109.46 26.82 106.9 25.78 104.54 25L103.48 25.98ZM93.62 11.24V12.62H110.32V11.24H93.62ZM101.24 11.82C101.12 12.74 100.82 14.08 100.54 14.96L101.96 15.22C102.28 14.4 102.66 13.18 103 12.04L101.24 11.82ZM99.18 24.9C97.8 25.82 95.06 26.86 92.9 27.44C93.24 27.76 93.7 28.28 93.94 28.6C96.08 28 98.8 26.94 100.54 25.88L99.18 24.9Z" fill="#4C4C4C" />
                    <path class="arrow" d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7C8C38" />
                    <path d="M8.33075 18.6072C8.33075 18.6072 8.28695 18.6598 8.26943 18.6861C8.24315 18.7123 8.22562 18.7474 8.19934 18.7824C8.18182 18.8175 8.15554 18.8525 8.13802 18.8788C8.1205 18.9051 8.10298 18.9314 8.08546 18.9664C8.06794 19.0014 8.05042 19.0365 8.0329 19.0715C8.01538 19.0978 8.00661 19.1328 7.98909 19.1591C7.97157 19.1942 7.96281 19.2292 7.95405 19.2642C7.94529 19.2993 7.92777 19.3256 7.91901 19.3606C7.91025 19.3957 7.90149 19.4307 7.89273 19.4657C7.89273 19.5008 7.87521 19.5358 7.86645 19.5621C7.86645 19.6059 7.84893 19.6497 7.84893 19.6935C7.84893 19.7198 7.84017 19.7461 7.84017 19.7724C7.82265 19.9213 7.82265 20.0614 7.84017 20.2104C7.84017 20.2367 7.84017 20.2629 7.84893 20.2892C7.84893 20.333 7.85769 20.3768 7.86645 20.4206C7.86645 20.4557 7.88397 20.4907 7.89273 20.517C7.90149 20.552 7.91025 20.5871 7.91901 20.6221C7.92777 20.6572 7.94529 20.6834 7.95405 20.7185C7.96281 20.7535 7.98033 20.7886 7.98909 20.8236C7.99785 20.8586 8.01538 20.8849 8.0329 20.9112C8.05042 20.9462 8.06794 20.9813 8.08546 21.0163C8.10298 21.0426 8.1205 21.0689 8.13802 21.1039C8.15554 21.139 8.17306 21.174 8.19934 21.2003C8.21686 21.2353 8.24315 21.2616 8.26943 21.2967C8.28695 21.3229 8.30447 21.3492 8.33075 21.3755C8.37455 21.4281 8.42711 21.4894 8.47968 21.5332L15.4792 28.5328C16.3378 29.3913 17.7307 29.3913 18.5892 28.5328C19.4477 27.6742 19.4477 26.2813 18.5892 25.4228L15.3478 22.1815H29.9689C31.1866 22.1815 32.1678 21.1915 32.1678 19.9826C32.1678 18.7737 31.1779 17.7837 29.9689 17.7837H15.3478L18.5892 14.5424C19.4477 13.6839 19.4477 12.291 18.5892 11.4324C18.1599 11.0032 17.5993 10.7842 17.0298 10.7842C16.4604 10.7842 15.8997 11.0032 15.4705 11.4324L8.47092 18.432C8.41835 18.4846 8.37455 18.5371 8.32199 18.5897L8.33075 18.6072Z" fill="white" />
                </svg>
            </a>
        </li>
        <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
            if ($i >= 1 and $i <= $totalPages) :
                $qsp['page'] = $i;
        ?>
                <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                    <a class="page-link" href="?<?= http_build_query($qsp); ?>#petCard"><?= $i ?></a>
                </li>
        <?php endif;
        endfor; ?>
        <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
            <a class="page-link" href="?<?php $qsp['page'] = $page + 1;
                                        echo http_build_query($qsp); ?>#petCard">
                <svg width="112" height="40" viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="arrow" d="M1.1 11.68V13.2H18.9V11.68H1.1ZM8.8 12.88V28.58H10.38V12.88H8.8ZM9.68 17.62C12.1 18.86 15.22 20.76 16.76 22L17.82 20.64C16.22 19.44 13.06 17.62 10.66 16.46L9.68 17.62ZM20.88 18.38V20.02H39.18V18.38H20.88ZM45.08 18.62H55.18V20.46H45.08V18.62ZM45.08 21.62H55.18V23.46H45.08V21.62ZM45.08 15.66H55.18V17.46H45.08V15.66ZM43.52 14.46V24.66H56.78V14.46H43.52ZM51.48 25.98C53.82 26.78 56.2 27.84 57.62 28.62L59.02 27.6C57.46 26.82 54.9 25.78 52.54 25L51.48 25.98ZM41.62 11.24V12.62H58.32V11.24H41.62ZM49.24 11.82C49.12 12.74 48.82 14.08 48.54 14.96L49.96 15.22C50.28 14.4 50.66 13.18 51 12.04L49.24 11.82ZM47.18 24.9C45.8 25.82 43.06 26.86 40.9 27.44C41.24 27.76 41.7 28.28 41.94 28.6C44.08 28 46.8 26.94 48.54 25.88L47.18 24.9Z" fill="#4C4C4C" />
                    <path class="arrow" d="M92 40C80.9543 40 72 31.0457 72 20C72 8.9543 80.9543 0 92 0C103.046 0 112 8.9543 112 20C112 31.0457 103.046 40 92 40Z" fill="#7C8C38" />
                    <path d="M103.669 18.6072C103.669 18.6072 103.713 18.6598 103.73 18.6861C103.757 18.7123 103.774 18.7474 103.801 18.7824C103.818 18.8175 103.844 18.8525 103.862 18.8788C103.879 18.9051 103.897 18.9314 103.914 18.9664C103.932 19.0014 103.949 19.0365 103.967 19.0715C103.985 19.0978 103.993 19.1328 104.011 19.1591C104.028 19.1942 104.037 19.2292 104.046 19.2642C104.055 19.2993 104.072 19.3256 104.081 19.3606C104.09 19.3957 104.098 19.4307 104.107 19.4657C104.107 19.5008 104.125 19.5358 104.133 19.5621C104.133 19.6059 104.151 19.6497 104.151 19.6935C104.151 19.7198 104.16 19.7461 104.16 19.7724C104.177 19.9213 104.177 20.0614 104.16 20.2104C104.16 20.2367 104.16 20.2629 104.151 20.2892C104.151 20.333 104.142 20.3768 104.133 20.4206C104.133 20.4557 104.116 20.4907 104.107 20.517C104.098 20.552 104.09 20.5871 104.081 20.6221C104.072 20.6572 104.055 20.6834 104.046 20.7185C104.037 20.7535 104.02 20.7886 104.011 20.8236C104.002 20.8586 103.985 20.8849 103.967 20.9112C103.949 20.9462 103.932 20.9813 103.914 21.0163C103.897 21.0426 103.879 21.0689 103.862 21.1039C103.844 21.139 103.827 21.174 103.801 21.2003C103.783 21.2353 103.757 21.2616 103.73 21.2967C103.713 21.3229 103.695 21.3492 103.669 21.3755C103.625 21.4281 103.573 21.4894 103.52 21.5332L96.5206 28.5328C95.6621 29.3913 94.2692 29.3913 93.4107 28.5328C92.5522 27.6742 92.5522 26.2813 93.4107 25.4228L96.652 22.1815H82.0309C80.8132 22.1815 79.8321 21.1915 79.8321 19.9826C79.8321 18.7737 80.822 17.7837 82.0309 17.7837H96.652L93.4107 14.5424C92.5522 13.6839 92.5522 12.291 93.4107 11.4324C93.84 11.0032 94.4006 10.7842 94.97 10.7842C95.5395 10.7842 96.1001 11.0032 96.5294 11.4324L103.529 18.432C103.582 18.4846 103.625 18.5371 103.678 18.5897L103.669 18.6072Z" fill="white" />
                </svg>

            </a>
        </li>
    </ul>
</nav>
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
            console.log(321)
            $('.lightBox-card-img img').attr('src', $(this).find('.pet-card-img img').attr('src'));
            $('.lightBox-card-name').text( $(this).find('.pet-info .name').text());
            $('.lightBox-card-age span').text( $(this).find('.pet-info .age').text());
            $('.lightBox-card-personality span').text( $(this).find('.pet-info .personality').text());
            $('.lightBox').show();
        })
         //光箱關閉
        $('.close img').click(function(){
                $('.lightBox').hide();
            })
</script>
<script>
    const petCard = $('#petCard');
    const card_tpl_func = ({pet_id, name, age, gender, fur, personality})=>{
        return `
<div class="pet-card-col col-6 col-md-4">
    <div class="pet-card-content">
        <div class="pet-card-img">
            <img src="../nap_php/img/pet/${pet_id}.jpg" class="card-img-top" alt="...">
        </div>
        <div class="pet-info">
            <div class="name">${name}</div>
                <div class="pet-info-up">
                    <div class="age">${age} 歲</div>
                    <div> &nbsp / &nbsp</div>
                    <div class="gender">${gender==1 ? '女生' : '男生' }</div>
                </div>
            <div class="pet-info-down">
                <div class="fur">${fur==1 ? '長毛' : '短毛' }</div>
                <div> &nbsp / &nbsp</div>
                <div class="personality">${personality}</div>
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
</div>`;
    };

    // default selections
    $('.my-option').each(function(){
        const val = + $(this).attr('data-val');
        $(this).find('a').eq(val).click();
    });

    let defaultVals = {
        type: 1, // dog
        gender: 0, // boy
        fur: 0, // short
        old: 1, 
    }

    function getData(obj) {
        try{
            if(typeof defaultVals === 'undefined'){
                return;
            }
        }catch(ex){
            return;
        }


        if(obj.type !== undefined) {
            defaultVals.type = obj.type;
        }
        if(obj.gender !== undefined) {
            defaultVals.gender = obj.gender;
        }
        if(obj.fur !== undefined) {
            defaultVals.fur = obj.fur;
        }
        if(obj.old !== undefined) {
            defaultVals.old = obj.old;
        }


        $.get('field-guide-api.php', defaultVals , function(data){
            console.log(data);
            let str = '';

            if(data.rows && data.rows.length){
                data.rows.forEach(function(obj){
                    str += card_tpl_func(obj);
                });
            }
            petCard.html(str);
        }, 'json');

    }
    
     getData({}); // first get data
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>


