<?php
require __DIR__ . '/parts/connect_db.php';

if(empty($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
?>


<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>


<?php include __DIR__. '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">

    
</head>

<link rel="stylesheet" href="./nap_css/reset.css">
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="./nap_css/game5.css?version=&lt;?php echo time(); ?&gt;">
    
    <title><?= $title ?></title>



<div class="start ">
    <div class="title">
        <h2>你屬於<span class="green">貓派</span>還是<span class="brown">狗派</span>呢?</h2>
        <h3>Are you a dog person or a cat person ?</h3>
        <h4>START</h4>
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
                <h3 class="q-content"> 當去應徵一份新工作時，<br>當面試官詢問你的性格是內向還是外向，<br>你的反應是？</h3>
                <div class="balls">
                    <div class="ball1  ">
                        <h5 class="choosewho">A</h5>
                        <input onclick="begintimer()" type="radio" name="a1" class="choose-ball"  value="">
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input  onclick="begintimer()" type="radio" name="a1" class="choose-ball" value=""></div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">很容易回答<br>
                            直接給出答案</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">很難抉擇啊！<br>
                            有時是內向，有時是外向</p>
                    </div>
                </div>
            </div>
            <div class="qq2">
                <h2 class="q2">Q2</h2>
                <h3 class="q-content"> 你正在家中客廳看電視，<br>
                    聽到家人開門回到家的聲音，你的反應是？</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a2" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input  type="radio" name="a2" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">家人進來後<br>很快點個頭再繼續看電視</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">跑到門口給他一個大大的擁抱<br>開心地說：你回來啦!</p>
                    </div>
                </div>
            </div>
            <div class="qq3">
                <h2 class="q2">Q3</h2>
                <h3 class="q-content"> 如果可以選擇，你會比較喜歡與哪一類人做朋友？
                </h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input  type="radio" name="a3" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input type="radio" name="a3" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">藝術氣息、帶點個性 <br> 又有些怪的人</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">沉穩、有義氣<br>簡單且直接的人 </p>
                    </div>
                </div>
            </div>
            <div class="qq4">
                <h2 class="q4">Q4</h2>
                <h3 class="q-content">放假時，你會一個人找個地方 <br> 安靜地吃飯，或是看看書、發發呆，休息一下午？
                    </h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a4" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input   type="radio" name="a4" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">放假當然是見朋友啦<br>一個人寂寞耶~</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">這就是我的生活寫照 <br> 太充實了！</p>
                    </div>
                </div>
            </div>
            <div class="qq5">
                <h2 class="q2">Q5</h2>
                <h3 class="q-content">你某個朋友很喜歡爬到屋頂上 <br> 在黃昏看日落、晚上看星星，如果你剛好在現場 <br> 你會選擇？
                    </h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input type="radio" name="a5" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input  type="radio" name="a5" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">爬到屋頂<br>坐在他旁邊與他一起看天空</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">站在地面，做自己的事<br>但不時的也抬頭陪他看看天空</p>
                    </div>
                </div>
            </div>
            <div class="qq6">
                <h2 class="q6">Q6</h2>
                <h3 class="q-content"> 在下班後的朋友聚會中，你的角色通常是？</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input  type="radio" name="a6" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input  type="radio" name="a6" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">坐在一角看朋友互動 <br> 偶爾插一句嘴</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">社交小能手，與每個人 <br> 都能聊上幾句十分合群 </p>
                    </div>
                </div>
            </div>
            <div class="qq7">
                <h2 class="q7">Q7</h2>
                <h3 class="q-content"> 你有否想過自己可能是外星人，<br>
                    對生活中很多事物感到抽離，覺得與你無關？
                    </h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input  type="radio" name="a7" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input   type="radio" name="a7" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">不，我對生活充滿熱誠 <br> 並期待每天都能活得充實</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">或許，有時覺得自己<br>與這世界格格不入</p>
                    </div>
                </div>
            </div>
            <div class="qq8">
                <h2 class="q8">Q8</h2>
                <h3 class="q-content"> 上司交辦一項新的工作給你，<br>但其內容與性質都不是你所喜歡做的<br>你會怎麼做呢？</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input  type="radio" name="a8" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input   type="radio" name="a8" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">照樣接受、繼續工作 <br> 懷著不情願的心將工作完成</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">鼓起勇氣<br>與上司坦白自己的看法</p>
                    </div>
                </div>
            </div>
            <div class="qq9">
                <h2 class="q9">Q9</h2>
                <h3 class="q-content">你喜歡與在身邊不停轉、大叫大哭，<br>
                    又不斷想和你互動的2、3歲小朋友玩耍嗎？</h3>
                <div class="balls">
                    <div class="ball1">
                        <h5 class="choosewho">A</h5>
                        <input  type="radio" name="a9" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 ">
                        <h5 class="choosewho" >B</h5>
                        <input   type="radio" name="a9" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">很喜歡<br>小朋友嘛~習慣就好</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">不多說，地球太危險，<br> 請把他們帶到我看不見的地方</p>
                    </div>
                </div>
            </div>
            <div class="qq10">
                <h2 class="q10">Q10</h2>
                <h3 class="q-content"> 認識多年的朋友遇到了苦難並極需幫助，<br>而你又有能力的話，你會？</h3>
                <div class="balls">
                    <div class="ball1 " onclick=" processForm()" >
                        <h5 class="choosewho">A</h5>
                        <input  type="radio" name="a10" class="choose-ball " value="" >
                    </div>
                    <div class="ball2 " onclick=" processForm()" >
                        <h5 class="choosewho" >B</h5>
                        <input   type="radio" name="a10" class="choose-ball" value="">
                    </div>
                </div>
                <div class="ans d-flex ">
                    <div class="a1 w-100">
                        <p class="a-text">毫不猶豫、兩肋插刀，義不容辭
                            <br> 且不問原因，馬上就出手幫忙</p>
                    </div>
                    <div class="a2 w-100">
                        <p class="a-text">想先問問他的難點<br> 再考慮幫不幫他</p>
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
        <h5>推薦活動</h5>
    </div>
    <img class="img1" src="./img/self/n/game/event2.svg" alt="">
    <img class="img2" src="./img/self/n/game/event2.svg" alt="">
    
    <div class="recommend-2">
        <h5> <button onclick="checkForm1()" class="btn1" >領取獎勵</button> </h5>
    </div> 
</div>



<div class="bg" style="position: fixed;
    top: 0;
     left: 0; 
    z-index: 900;
    width: 100vw;
    height: 100vh;
    background-color: #4C4C4C; opacity: 0.5; display:none;"
></div>


<div id="msgContainer1" class="" style=" position: fixed; z-index: 1055;top: 0%; left: 0%; display:none;
  width: 100vw;
    height: 100vh;">
        <!-- <div class="alert modal-dialog modal-dialog-centered" role="alert" style="z-index: 1056;" >
            <p style=" position: absolute; z-index: 1057;top: 57%;left: 50%; transform: translate(-50%, -50%); ">修改完成
            </p> 
            <img id="myimg1" src="./img/self/n/fix.gif" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
        </div> -->
     </div> 

   




<script src="./nap_js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1.11.5/dayjs.min.js"></script>
<script>


const msgc = $('#msgContainer1');
    const msgc1 = $('.bg');

function genAlert(msg,ccc) {
    $('.bg').css('display','block');
    $(' #msgContainer1').css('display','block');
    

    const a = $(`
    
        <div class="alert modal-dialog modal-dialog-centered" role="alert" style="z-index: 1056;" >
            <p style=" position: absolute; z-index: 1057;top: 57%;left: 50%; transform: translate(-50%, -50%); ">${msg}
            </p> 
            <img id="myimg1" src="${ccc}" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
        </div> 

    `);

    msgc.append(a);
    setTimeout(()=>{
        a.fadeOut(400, function(){
            a.remove();
        });
        
    }, 2000);
    msgc.append(msgc);
    setTimeout(()=>{
        msgc.fadeOut(400, function(){
            $(' #msgContainer1').css('display','none');
        });
        
    }, 2000);
    msgc.append(msgc1);
    setTimeout(()=>{
        msgc.fadeOut(400, function(){
            $('#msgContainer1').css('display','none');
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
                if(data.success){
                    genAlert('修改完成', './img/self/n/fix.gif');
                } else {
                    genAlert('尚未修改', './img/self/n/none.gif');
                }


            }, 'json');
    }
}
    


$('.start h4').click(function(s){
    $('.start').css('display','none');
    $('.wrap').css('display','block');
    $('.qq1').css('display','block');
    
})

$('.qq1 input').click(function(s){
    $('.qq1').css('display','none');
    $('.qq2').css('display','block');
    $('.pet-2').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-2.png)');
})

$('.qq2 input').click(function(s){
    $('.qq2').css('display','none');
    $('.qq3').css('display','block');
    $('.pet-3').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-3.png)');
})

$('.qq3 input').click(function(s){
    $('.qq3').css('display','none');
    $('.qq4').css('display','block');
    $('.pet-4').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-4.png)');
})
$('.qq4 input').click(function(s){
    $('.qq4').css('display','none');
    $('.qq5').css('display','block');
    $('.pet-5').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-5.png)');
})
$('.qq5 input').click(function(s){
    $('.qq5').css('display','none');
    $('.qq6').css('display','block');
    $('.pet-6').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-6.png)');
})
$('.qq6 input').click(function(s){
    $('.qq6').css('display','none');
    $('.qq7').css('display','block');
    $('.pet-7').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-7.png)');
})
$('.qq7 input').click(function(s){
    $('.qq7').css('display','none');
    $('.qq8').css('display','block');
    $('.pet-8').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-8.png)');
})
$('.qq8 input').click(function(s){
    $('.qq8').css('display','none');
    $('.qq9').css('display','block');
    $('.pet-9').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-9.png)');
})
$('.qq9 input').click(function(s){
    $('.qq9').css('display','none');
    $('.qq10').css('display','block');
    $('.pet-10').css('display','block');
    $('.butterfly').css('display','block');
    $('.wrap .pic').css('background-image','url(./img/self/n/game/game_bg-10.png)');
})
$('.qq10 input').click(function(s){
    $('.qq10').css('display','none');
    $('.butterfly').css('display','none');
    $('.wrap').css('display','none');
    $('.pic').css('display','none');
    $('form').css('display','none');
    $('.end').css('display','block');
    $('.wrap .pic').css('background-image','none');
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
                    
                   


                    if (sum <= 0) document.getElementById("endtitle").innerHTML= "100％貓派";
                    if (sum <= 0) document.getElementById("endcontent").innerHTML= "你喜歡自由的生活，給人不善交際、內向的感覺。嫉妒心理強，你認為自己就是世界中心，不允許他人將注意力轉到別的地方；倘若遇到不喜歡或不合意的人事物，你會頭也不回地拂袖而去。如果世界只有你，你的生活應該會很開心，但現實是，朋友們面對你這樣的性格需要極大的包容力喔！現在就去和他們說聲感謝吧！";
                    if (sum <= 3  && sum >= 1) document.getElementById("endtitle").innerHTML= "80％貓派＋20％狗派";
                    if (sum <= 3  && sum >= 1) document.getElementById("endcontent").innerHTML= "你的外表給人很冷漠、偏激但又矜持的感覺。雖生性不合群，但在有需要時，你還是可以在人群中過著安靜的群體生活，優雅、自負、忠於自己，這些是你希望別人眼中所看到的你。至於藏在內心的那股熱情，則堅持等待適當的時間、遇見適當的人時才肯發揮出來，只是好像等了很久也沒能遇到對的那個人；若能偶爾將自己固有的行為與熱度改變一下，可能會有不錯的結果喔！";
                    if (sum <= 6 && sum >= 4)document.getElementById("endtitle").innerHTML= "50％貓派＋50％狗派";
                    if (sum <= 6 && sum >= 4) document.getElementById("endcontent").innerHTML= "乾淨、衛生是你的名字，這讓你很在意自己的房間與辦公室的擺設方式。雖然你的好奇心很強，對於周圍發生的變化相當在意，但由於你比較喜歡孤獨，因此不常將自己的感情表露出來；若可以選擇的話，你比較喜歡一個人獨處，或與1、2個朋友的小活動。集結貓與狗的特徵，你可以舒服地穿梭於交際工作之間，不慍不火地維繫氣氛，會被大家視為可交的朋友首選。";
                    if (sum <= 9 && sum >= 7) document.getElementById("endtitle").innerHTML= "20％貓派＋80％狗派";
                    if (sum <= 9 && sum >= 7) document.getElementById("endcontent").innerHTML= "個性隨和，給人一種開放、爽朗以及富有人情味的感覺，當遇到不如意的事情，時常容易遷就他人。外表敏捷和直率，個性自律甚嚴，會跟著規則行事，給人可以信任的印象。開心或不開心都會表現在臉上，從不掩飾；雖說坦率的性格並無不妥，但有時需適當地調節，可能會讓你的生活與工作更順暢。";
                    if (sum >= 10 ) document.getElementById("endtitle").innerHTML= "100％狗派";
                    if (sum >= 10) document.getElementById("endcontent").innerHTML= "個性外向的你能夠快速地與同儕打成一片，但跟著大部隊一同工作，舉凡上司吩咐你做的事情，可能想也不想便照著做，有時甚至會盲目地服從權力領袖，如此將會使自己的個性被掩蓋，上司也看不見你的獨特性。建議你可以適當地選擇不同的工作或不同的生活環境，避免自己沒頭沒腦地埋首苦幹，卻因而失去了專屬自己光彩。";

                }

</script>

</body>
</html>



