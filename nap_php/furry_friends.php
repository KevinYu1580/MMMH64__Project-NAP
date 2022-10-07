<?php
require __DIR__ . '/parts/connect_db.php';

$pageName = '園區內的毛孩'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">





</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/furry_friends.css">


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
                            <img src="./img/self/h/illustration-17.png" alt="">
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
            <h3>Our Furry Friends</h3>
        </div>
        <div class="filter-title-pc">
            <h2>園區內的毛孩｜Our Furry Friends</h2>
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
                <a class="num1 sec fur" onclick="getData({fur:1})">
                    長毛
                </a>
                <a class="num2 sec fur" onclick="getData({fur:0})">
                    短毛
                </a>
            </div>
            <!-- 三格 -->
            <div class="napSwitch_three my-option old" data-val="1">
                <div class="backmask"></div>
                <a class="num1 sec old" onclick="getData({old:0})">
                    幼年 (0~1)
                </a>
                <a class="num2 sec old" onclick="getData({old:1})">
                    成年 (2~7)
                </a>
                <a class="num3 sec old" onclick="getData({old:2})">
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

                </div>
            </div>




        </div>

</section>

</div>


<!-- bootstrap擇一使用 -->
<script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>

<!-- 自己的js放在這 -->
<script>
    // 為什麼要領養浪浪toggle
    $('.banner-block-up').click(function() {
        $('.banner-block-down-mobile').slideToggle('slow')
        $(".banner-block-icon").toggleClass("active");
    })
    $('.button-block-pc').click(function() {
        $('.banner-button-container-pc').slideToggle('slow');
        $(".button-block-icon-pc").toggleClass("active");


        if ($(".button-block-icon-pc").hasClass("active")) {
            $('.button-block-pc').addClass("changeBackground");
        } else {
            $('.button-block-pc').removeClass("changeBackground")
        }

    })

    // 手機輪播牆
    $('.why-card-box-fram').scroll(function() {
        console.log('left:', $('.why-card-box-fram').scrollLeft())
        console.log('left:', $('.why-card-box-fram').scrollLeft() > 375)
        if ($('.why-card-box-fram').scrollLeft() > -1 && $('.why-card-box-fram').scrollLeft() < 300) {
            $('.dot1').css('background', '#D6D48A')
        } else {
            $('.dot1').css('background', 'none')
        }
        if ($('.why-card-box-fram').scrollLeft() > 300 && $('.why-card-box-fram').scrollLeft() < 600) {
            $('.dot2').css('background', '#D6D48A')
        } else {
            $('.dot2').css('background', 'none')
        }
        if ($('.why-card-box-fram').scrollLeft() > 600 && $('.why-card-box-fram').scrollLeft() < 900) {
            $('.dot3').css('background', '#D6D48A')
        } else {
            $('.dot3').css('background', 'none')
        }
        if ($('.why-card-box-fram').scrollLeft() > 900 && $('.why-card-box-fram').scrollLeft() < 1275) {
            $('.dot4').css('background', '#D6D48A')
        } else {
            $('.dot4').css('background', 'none')
        }
    })
</script>
<script>
    $('.napBtn_likeBtn').click(function(event) {
        event.stopPropagation();
        $(this).toggleClass('likeBtn_activated');
        $(this).find('#white').toggle();
    })

    $('.napBtn_likeBtn_comt').on('click', function(e) {
        e.stopPropagation()
        $(this).find('#napActivate').toggle()
    })

    const petCard = $('#petCard');

    const card_tpl_func = ({
        sid,
        pet_id,
        name,
        age,
        gender,
        fur,
        personality
    }) => {
        return `
<div class="pet-card-col col-6 col-md-4">
    <div class="pet-card-content" >
        <div class="pet-card-img" onclick="showBox(event);" >
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
            
            <button name="showBox1" type="submit" class="napBtn_likeBtn" onclick="<?= empty($_SESSION['user']) ? 'loginNotice()' : 'showBox1(event);' ?>" data-id="${sid}" >
                <div class="svgs">
                    <svg id='gray' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                    <path class="gray" d="M0 7.08414V6.86891C0 4.27496 1.87477 2.0625 4.43086 1.63649C6.08965 1.35483 7.84492 1.90627 9.05469 3.11789L9.5 3.56246L9.91191 3.11789C11.1551 1.90627 12.877 1.35483 14.5691 1.63649C17.126 2.0625 19 4.27496 19 6.86891V7.08414C19 8.62418 18.3617 10.0974 17.2336 11.1476L10.5279 17.408C10.2496 17.6677 9.88223 17.8125 9.5 17.8125C9.11777 17.8125 8.75039 17.6677 8.47207 17.408L1.76604 11.1476C0.639395 10.0974 1.11328e-05 8.62418 1.11328e-05 7.08414H0Z" />
                </div>
                <span>關注</span>
            </button>
        </div>
    </div>
</div>`;
    };

    // 未登入收藏按鈕提醒
    function loginNotice() {
        Swal.fire({
            title: '尚未登入會員',
            text: "快帶我去登入，我好喜歡這位可愛的孩子(✪ω✪)",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#bfbd4a',
            cancelButtonColor: '#f67557',
            confirmButtonText: '立馬快速登入',
            cancelButtonText: '先去註冊會員',
            reverseButtons:true,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "register.php"
            }
            else if(result.dismiss === Swal.DismissReason.cancel){
                window.location.href = "login.php"
            }    
        })
    }

    // 收藏按鈕
    function showBox1(event) {
        // const div = $(event.currentTarget).closest('.napBtn_likeBtn').find('#white');
        // div.toggle();
        // const div1 = $(event.currentTarget).closest('.napBtn_likeBtn');
        // div1.toggleClass('likeBtn_activated');

        const btn = $(event.currentTarget);
        const sid = btn.attr('data-id');
        $.get(
            `like-api.php?like_type=1&item_sid=${sid}`,
            function(data) {
                if (btn.hasClass('likeBtn_activated')) {
                    btn.removeClass('likeBtn_activated');
                    $(`button[data-id="${sid}"] path`).removeClass('white');
                } else {
                    btn.addClass('likeBtn_activated');
                    $(`button[data-id="${sid}"] path`).addClass('white');
                }
            }, 'json');
    }

    // 收藏按鈕，判斷顯示已收藏過的
    function likeData() {
        $.get('furry_friends-api.php', function(data) {
            console.log('data', data);
            for (let i of data.myLikes) {
                const pet_sid = i.pet_sid;
                const selectedBtn = $(`button[data-id="${pet_sid}"]`);

                if (selectedBtn.length) {
                    selectedBtn.addClass('likeBtn_activated');
                    $(`button[data-id="${pet_sid}"] path`).addClass('white');
                }
            }
        }, 'json')
    }
    




    // default selections
    $('.my-option').each(function() {
        const val = +$(this).attr('data-val');
        $(this).find('a').eq(val).click();
    });

    let defaultVals = {
        type: 1, // dog
        gender: 0, // boy
        fur: 0, // short
        old: 1,
    }

    function getData(obj) {
        try {
            if (typeof defaultVals === 'undefined') {
                return;
            }
        } catch (ex) {
            return;
        }


        if (obj.type !== undefined) {
            defaultVals.type = obj.type;
        }
        if (obj.gender !== undefined) {
            defaultVals.gender = obj.gender;
        }
        if (obj.fur !== undefined) {
            defaultVals.fur = obj.fur;
        }
        if (obj.old !== undefined) {
            defaultVals.old = obj.old;
        }


        $.get('furry_friends-api.php', defaultVals, function(data) {
            console.log(data);
            let str = '';

            if (data.rows && data.rows.length) {
                data.rows.forEach(function(obj) {
                    str += card_tpl_func(obj);
                });
            }
            petCard.html(str);
            likeData();

        }, 'json');

    }


    getData({}); // first get data

    //光箱彈出
    function showBox(event) {
        const me = event.currentTarget;

        $('.lightBox-card-img img').attr('src', $(me).parent().find('.pet-card-img img').attr('src'));
        $('.lightBox-card-name').text($(me).parent().find('.pet-info .name').text());
        $('.lightBox-card-age span').text($(me).parent().find('.pet-info .age').text());
        $('.lightBox-card-personality span').text($(me).parent().find('.pet-info .personality').text());
        $('.lightBox').show();
    }


    // //光箱關閉
    $('.close img').click(function() {
        $('.lightBox').hide();
    })
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>