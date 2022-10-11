<?php
require __DIR__ . '/parts/connect_db.php';

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>


<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = '心理測驗'; // 頁面名稱
?>


<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<link rel="stylesheet" href="./nap_css/reset.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="./nap_css/game9.css?version=&lt;?php echo time(); ?&gt;">

<title><?= $title ?></title>

<audio preload autoplay loop id="vd" src="./img/self/n/game/Ziv Grinberg - I Dont Get the Lesson.mp3" allow="autoplay">
	<h3>遇到不支援的瀏覽器會出現這行字</h3>
<<<<<<< Updated upstream
=======
</audio>
<audio preload autoplay loop id="vd">
    <source src="./img/self/n/game/Ziv Grinberg - I Dont Get the Lesson.mp3" type="audio/mpeg">
>>>>>>> Stashed changes
</audio>
<!-- <audio preload autoplay loop id="vd">
    <source src="./img/self/n/game/Ziv Grinberg - I Dont Get the Lesson.mp3" type="audio/mpeg" >
</audio> -->

<div class="music">
    <i class="fa-solid fa-volume-off"></i>
    <i class="fa-solid fa-volume-high"></i>
</div>



<div class="start ">
    <div class="title">
        <h2>你屬於<span class="brown">狗派</span>還是<span class="green">貓派</span>呢?</h2>
        <h3>Are you a <span class="brown">dog person</span> or a <span class="green">cat person</span> ?</h3>
        <h4>START</h4>
    </div>
    <div class="cloud w-100 h-100">
        <img src="./img/self/n/game/game_cloud-1.png" alt="" class="cloud">
        <img src="./img/self/n/game/game_cloud-2.png" alt="" class="cloud2">
    </div>
</div>
<!-- ----------------------------->




<div class="wrap ">
    <div class="pic">
        <img src="./img/self/n/game/game_start.png" class="house">
        <img src="./img/self/n/game/game_pet-1.png" class="pet-1">
        <img src="./img/self/n/game/game_pet-2.png" class="pet-2">
        <img src="./img/self/n/game/game_pet-3.png" class="pet-3">
        <img src="./img/self/n/game/game_pet-4.png" class="pet-4">
        <img src="./img/self/n/game/game_pet-5.png" class="pet-5">
        <img src="./img/self/n/game/game_pet-6.png" class="pet-6">
        <img src="./img/self/n/game/game_pet-7.png" class="pet-7">
        <img src="./img/self/n/game/game_pet-8.png" class="pet-8">
        <img src="./img/self/n/game/game_pet-9.png" class="pet-9">
        <img src="./img/self/n/game/game_pet-10.png" class="pet-10">
        <img src="./img/self/n/game/game_butterfly.png" class="butterfly">
        <img src="./img/self/n/game/game_tree.png" class="tree">
    </div>

    <div class="que">
        <form name="see">
            <div class="qq1">
                <h2>Q1</h2>
                <h3 class="q-content">幻想現在你即將走入一片森林， <br>你覺得現在是白天還是夜晚?</h3>
                <div class="balls">
                    <div class="ball1  ">
                        <h5 class="choosewho">A</h5>
                        <input onclick="begintimer()" type="radio" name="a1" class="choose-ball" value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input onclick="begintimer()" type="radio" name="a1" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">藍天白雲的早晨</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">拉下帷幕的夜晚</p>
                    </div>
                </div>
            </div>
            <div class="qq2">
                <h2 class="q2">Q2</h2>
                <h3 class="q-content"> 前方有一隻狗狗咬著東西向你跑來， <br>你覺得牠咬的是什麼呢?</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a2" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a2" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">地上隨處可見的樹枝</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">通往神秘木屋的鑰匙</p>
                    </div>
                </div>
            </div>
            <div class="qq3">
                <h2 class="q2">Q3</h2>
                <h3 class="q-content"> 突然間！狗狗對你連環狂吠， <br>你內心的OS是?
                </h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a3" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a3" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">要指引我遊覽森林ヽ(*´∀`)ﾉﾟ</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">難道我身後有幽靈Σ(☉д⊙)</p>
                    </div>
                </div>
            </div>
            <div class="qq4">
                <h2 class="q4">Q4</h2>
                <h3 class="q-content">告別狗狗後，你看見有條岔路， <br>你會怎麼選擇呢?</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a4" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a4" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">身為探險活寶，<br>就是要更往深處冒險！！</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">我俗辣我驕傲，<br>還是轉身往回走好了～</p>
                    </div>
                </div>
            </div>
            <div class="qq5">
                <h2 class="q2">Q5</h2>
                <h3 class="q-content">此時身旁的草叢發出嚓嚓聲， <br>地上映出了一個龐大的身影，你的反應是?</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a5" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a5" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">媽阿～感覺是熊快逃R～</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">假裝鎮定，先確認情況</p>
                    </div>
                </div>
            </div>
            <div class="qq6">
                <h2 class="q6">Q6</h2>
                <h3 class="q-content"> 在內心天人交戰之時，忽然手機聲響起， <br>拿出手機一看.....</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a6" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a6" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">有陌生電話來電</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">原來只是鬧鐘呀</p>
                    </div>
                </div>
            </div>
            <div class="qq7">
                <h2 class="q7">Q7</h2>
                <h3 class="q-content">因為手機發出了聲響，讓原本也在森林裡探險的老人循著聲音找到了你，並給予了你...</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a7" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a7" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">一張地圖</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">一個手電筒</p>
                    </div>
                </div>
            </div>
            <div class="qq8">
                <h2 class="q8">Q8</h2>
                <h3 class="q-content">與老人分別後，往旁一看，在草叢裡發現了一隻剛出生的小貓，此時你會...?</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a8" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a8" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">放著不理，生命自會找到出路</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">湧出了想要收編的想法 <br>(*´∀`)~♥</p>
                    </div>
                </div>
            </div>
            <div class="qq9">
                <h2 class="q9">Q9</h2>
                <h3 class="q-content">經過一連串探險旅途的你，已經走得有點累又渴了，看見前方不遠處有一個湖泊，你會?</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a9" class="choose-ball " value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a9" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">不管三七二十一， <br> 先解渴再說</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">等等...這水乾淨嗎? <br>再忍忍好了</p>
                    </div>
                </div>
            </div>
            <div class="qq10">
                <h2 class="q10">Q10</h2>
                <h3 class="q-content"> 現在你正準備離開這個森林，你會願意下次再回到森林繼續未完成的探險嗎?</h3>
                <div class="balls">
                    <div class="ball1 " onclick=" processForm()">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a10" class="choose-ball " value="">
                    </div>
                    <div class="ball2 " onclick=" processForm()">
                        <h5 class="choosewho">B</h5>
                        <input type="radio" name="a10" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">這麼好玩當然會阿(ﾉ>ω<)ﾉ< /p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">這種經驗有過一次就好(｡ŏ_ŏ)</p>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>

<div class="end">
    <div class="title">
        <h3 id="endtitle">80％貓派＋20％狗</h3>
        <h4 id="endcontent">你喜歡自由的生活，給人不善交際、內向的感覺。嫉妒心理強，你認為自己就是世界中心，不允許他人將注意力轉到別的地方；倘若遇到不喜歡或不合意的人事物，你會頭也不回地拂袖而去。如果世界只有你，你的生活應該會很開心，但現實是，朋友們面對你這樣的性格需要極大的包容力喔！現在就去和他們說聲感謝吧！</h4>
    </div>
    <img class="flag" src="./img/self/n/game/game-32.png" alt="">
    <div class="recommend">
        <h5>【 推薦活動 】</h5>
    </div>
    <a href="./events_detail.php?sid=4">
        <img class="img1" id="img1" src="./img/self/n/game/event-all.svg" alt="">
    </a>
    <a id="goevent" href="./events_detail.php?sid=27">
        <img class="img2" id="img2" src="./img/self/n/game/event-dog.svg" alt="">
    </a>

    <div class="recommend-2">
        <h5> <button onclick="checkForm1()" class="btn1">領取獎勵</button> </h5>
    </div>
</div>


<div class="bg" style="position: fixed; top: 0; left: 0; z-index: 900;width: 100vw;height: 100vh;background-color: #4C4C4C;opacity: 0.5; display:none;">
</div>

<div id="msgContainer1" class="" style=" position: fixed; z-index: 1055;top: 0%; left: 0%; display:none;width: 100vw;height: 100vh;">
    <!-- <div class="alert modal-dialog modal-dialog-centered" role="alert" style="z-index: 1056;" >
            <p style=" position: absolute; z-index: 1057;top: 57%;left: 50%; transform: translate(-50%, -50%); ">修改完成
            </p> 
            <img id="myimg1" src="./img/self/n/fix.gif" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
        </div> -->
</div>






<script src="./nap_js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1.11.5/dayjs.min.js"></script>

<script type="text/javascript">
    window.onload = function() {
        setInterval("toggleSound()", 100);
    }

    function toggleSound() {
        var music = document.getElementById("vd"); //獲取ID  

        if (music.paused) { //判讀是否播放  
            music.paused = false;
            music.play(); //沒有就播放 
        }
    }
</script>
<script>

$('.music .fa-volume-off').click(function(s) {
    
        $('.fa-volume-off').css('display', 'none');
        $('.fa-volume-high').css('display', 'block');
        $('audio').attr('src', './img/self/n/game/Ziv Grinberg - I Dont Get the Lesson.mp3');
        

    })

    $('.music .fa-volume-high').click(function(s) {
        $('.fa-volume-high').css('display', 'none');
        $('.fa-volume-off').css('display', 'block');
        $('audio').attr('src', '123');
    

    })



    const msgc = $('#msgContainer1');
    const msgc1 = $('.bg');

    function genAlert(msg, ccc) {
        $('.bg').css('display', 'block');
        $(' #msgContainer1').css('display', 'block');


        const a = $(`
    
        <div class="alert modal-dialog modal-dialog-centered" role="alert" style="z-index: 1056;" >
            <p style=" position: absolute; z-index: 1057;top: 57%;left: 50%; transform: translate(-50%, -50%); ">${msg}
            </p> 
            <img id="myimg1" src="${ccc}" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);border-radius: 10px;">
        </div> 

    `);

        msgc.append(a);
        setTimeout(() => {
            a.fadeOut(400, function() {
                a.remove();
            });

        }, 2000);
        msgc.append(msgc);
        setTimeout(() => {
            msgc.fadeOut(400, function() {
                $(' #msgContainer1').css('display', 'none');
            });

        }, 2000);
        msgc.append(msgc1);
        setTimeout(() => {
            msgc.fadeOut(400, function() {
                $('#msgContainer1').css('display', 'none');
            });

        }, 2000);
    }


    function checkForm1() {
        // TODO: 檢查欄位資料格式是不是符合

        let isPass = true; // 預設表單的資料是沒問題的
        if (isPass) {
            // 送出表單資料

            $.post(
                'game-api.php',
                $(document.form1).serialize(),
                function(data) {
                    console.log(data);
                    if (data.success) {
                        genAlert('領取成功', './img/self/n/fix.gif');
                    } else {
                        genAlert('已領取優惠券, 無法再次領取', './img/self/n/none.gif');
                    }

                }, 'json');
        }
    }

    


    $('.start h4').click(function(s) {
        $('.start').css('display', 'none');
        $('.wrap').css('display', 'block');
        $('.qq1').css('display', 'block');

    })

    $('.qq1 input').click(function(s) {
        $('.qq1').css('display', 'none');
        $('.qq2').css('display', 'block');
        $('.pet-2').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-2.png)');
    })

    $('.qq2 input').click(function(s) {
        $('.qq2').css('display', 'none');
        $('.qq3').css('display', 'block');
        $('.pet-3').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-3.png)');
    })

    $('.qq3 input').click(function(s) {
        $('.qq3').css('display', 'none');
        $('.qq4').css('display', 'block');
        $('.pet-4').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-4.png)');
    })
    $('.qq4 input').click(function(s) {
        $('.qq4').css('display', 'none');
        $('.qq5').css('display', 'block');
        $('.pet-5').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-5.png)');
    })
    $('.qq5 input').click(function(s) {
        $('.qq5').css('display', 'none');
        $('.qq6').css('display', 'block');
        $('.pet-6').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-6.png)');
    })
    $('.qq6 input').click(function(s) {
        $('.qq6').css('display', 'none');
        $('.qq7').css('display', 'block');
        $('.pet-7').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-7.png)');
    })
    $('.qq7 input').click(function(s) {
        $('.qq7').css('display', 'none');
        $('.qq8').css('display', 'block');
        $('.pet-8').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-8.png)');
    })
    $('.qq8 input').click(function(s) {
        $('.qq8').css('display', 'none');
        $('.qq9').css('display', 'block');
        $('.pet-9').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-9.png)');
    })
    $('.qq9 input').click(function(s) {
        $('.qq9').css('display', 'none');
        $('.qq10').css('display', 'block');
        $('.pet-10').css('opacity', '1');
        $('.butterfly').css('opacity', '1');
        $('.wrap .pic').css('background-image', 'url(./img/self/n/game/game_bg-10.png)');
    })
    $('.qq10 input').click(function(s) {
        $('.qq10').css('display', 'none');
        $('.butterfly').css('display', 'none');
        $('.wrap').css('display', 'none');
        $('.pic').css('display', 'none');
        $('form').css('display', 'none');
        $('.end').css('display', 'block');
        $('.wrap .pic').css('background-image', 'none');
    })
</script>
<script language="JavaScript">
    function processForm() {
        var sum = 0;
        //创建数组
        hc = new Array(15);

        if (document.see.a1[0].checked == 1) sum += 0;
        if (document.see.a1[1].checked == 1) sum += 1;


        if (document.see.a2[0].checked == 1) sum += 0;
        if (document.see.a2[1].checked == 1) sum += 1;


        if (document.see.a3[0].checked == 1) sum += 0;
        if (document.see.a3[1].checked == 1) sum += 1;


        if (document.see.a4[0].checked == 1) sum += 0;
        if (document.see.a4[1].checked == 1) sum += 1;


        if (document.see.a5[0].checked == 1) sum += 0;
        if (document.see.a5[1].checked == 1) sum += 1;


        if (document.see.a6[0].checked == 1) sum += 0;
        if (document.see.a6[1].checked == 1) sum += 1;


        if (document.see.a7[0].checked == 1) sum += 0;
        if (document.see.a7[1].checked == 1) sum += 1;


        if (document.see.a8[0].checked == 1) sum += 0;
        if (document.see.a8[1].checked == 1) sum += 1;


        if (document.see.a9[0].checked == 1) sum += 0;
        if (document.see.a9[1].checked == 1) sum += 1;

        if (document.see.a10[0].checked == 1) sum += 0;
        if (document.see.a10[1].checked == 1) sum += 1;




        if (sum <= 0) document.getElementById("endtitle").innerHTML = "100％貓派";
        if (sum <= 0) document.getElementById("endcontent").innerHTML = "你喜歡自由的生活，給人不善交際、內向的感覺。嫉妒心理強，你認為自己就是世界中心，不允許他人將注意力轉到別的地方；倘若遇到不喜歡或不合意的人事物，你會頭也不回地拂袖而去。如果世界只有你，你的生活應該會很開心，但現實是，朋友們面對你這樣的性格需要極大的包容力喔！現在就去和他們說聲感謝吧！";
        if (sum <= 0) document.getElementById("img2").src = "./img/self/n/game/event-cat.svg";
        if (sum <= 0) document.getElementById("goevent").href = "./events_detail.php?sid=26";


        if (sum <= 3 && sum >= 1) document.getElementById("endtitle").innerHTML = "80％貓派20％狗派";
        if (sum <= 3 && sum >= 1) document.getElementById("endcontent").innerHTML = "你的外表給人很冷漠、偏激但又矜持的感覺。雖生性不合群，但在有需要時，你還是可以在人群中過著安靜的群體生活，優雅、自負、忠於自己，這些是你希望別人眼中所看到的你。至於藏在內心的那股熱情，則堅持等待適當的時間、遇見適當的人時才肯發揮出來，只是好像等了很久也沒能遇到對的那個人；若能偶爾將自己固有的行為與熱度改變一下，可能會有不錯的結果喔！";
        if (sum <= 3 && sum >= 1) document.getElementById("img2").src = "./img/self/n/game/event-cat.svg";
        if (sum <= 0) document.getElementById("goevent").href = "./events_detail.php?sid=26";


        if (sum <= 6 && sum >= 4) document.getElementById("endtitle").innerHTML = "50％貓派50％狗派";
        if (sum <= 6 && sum >= 4) document.getElementById("endcontent").innerHTML = "乾淨、衛生是你的習慣，這讓你很在意自己的房間與辦公室的擺設方式。雖然你的好奇心很強，對於周圍發生的變化相當在意，但由於你比較喜歡孤獨，因此不常將自己的感情表露出來；若可以選擇的話，你比較喜歡一個人獨處，或與1、2個朋友的小活動。集結貓與狗的特徵，你可以舒服地穿梭於交際工作之間，不慍不火地維繫氣氛，會被大家視為可交的朋友首選。";
        if (sum <= 9 && sum >= 7) document.getElementById("endtitle").innerHTML = "20％貓派80％狗派";
        if (sum <= 9 && sum >= 7) document.getElementById("endcontent").innerHTML = "個性隨和，給人一種開放、爽朗以及富有人情味的感覺，當遇到不如意的事情，時常容易遷就他人。外表敏捷和直率，個性自律甚嚴，會跟著規則行事，給人可以信任的印象。開心或不開心都會表現在臉上，從不掩飾；雖說坦率的性格並無不妥，但有時需適當地調節，可能會讓你的生活與工作更順暢。";
        if (sum >= 10) document.getElementById("endtitle").innerHTML = "100％狗派";
        if (sum >= 10) document.getElementById("endcontent").innerHTML = "個性外向的你能夠快速地與同儕打成一片，但跟著大部隊一同工作，舉凡上司吩咐你做的事情，可能想也不想便照著做，有時甚至會盲目地服從權力領袖，如此將會使自己的個性被掩蓋，上司也看不見你的獨特性。建議你可以適當地選擇不同的工作或不同的生活環境，避免自己沒頭沒腦地埋首苦幹，卻因而失去了專屬自己光彩。";

    }
</script>

</body>

</html>