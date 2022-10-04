
<?php
session_start();
// 如果已經登入會員
if (!empty($_SESSION['user'])) {
    header('Location: ./');
    exit;
}

require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__. '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


    <!-- <link rel="stylesheet" href="./nap_css/component_mobile2.css"> -->
<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./nap_css/register.css?version=&lt;?php echo time(); ?&gt;">
    
    <title><?= $title ?></title>
</head>

<body>

<div class="wrap">
    <div class="login-pc d-flex justify-content-end">
        <div class="textbox d-flex  align-items-center justify-content-center ">


                
                <div class="bikegirl">
                    <div class="play-people">
                            <img src="./img/self/n/member/bg/girl.png" alt="" class="girl ">
                            <img src="./img/self/n/member/bg/bike-body.png" alt=""class="bike-body">
                            <!-- <img src="./img/self/n/member/bg/leg-01.png" alt=""class="leg-01"> -->
                            <!-- <img src="./img/self/n/member/bg/leg-02.png" alt=""class="leg-02"> -->

                            <img src="./img/self/n/member/bg/svg/leg-up-f_1.svg" alt=""class="legup-f">
                            <img src="./img/self/n/member/bg/svg/leg-down-f.svg" alt=""class="legdown-f">
                            <img src="./img/self/n/member/bg/svg/foot-f.svg" alt=""class="foot-f">

                            <img src="./img/self/n/member/bg/svg/leg-up.svg" alt=""class="legup-b">
                            <img src="./img/self/n/member/bg/svg/leg-down.svg" alt=""class="legdown-b">
                            <img src="./img/self/n/member/bg/svg/foot.svg" alt=""class="foot-b">
                            

                            <img src="./img/self/n/member/bg/wheel.png" alt=""class="wheel1">
                            <img src="./img/self/n/member/bg/wheel.png" alt=""class="wheel2">
                            <!-- <img src="./img/self/n/member/bg/shadow.png" alt=""class="shadow1"> -->
                            <!-- <img src="./img/self/n/member/bg/illustaror-81.png" alt=""class="people-dog"> -->
                            
                        </div>
                        
                    </div>
                    <img src="./img/self/n/member/bg/logo-white.png" alt=""class="people-logo">
                </div>
                
                
                   
                <div class="close"><img src="./img/self/n/close.png" alt=""></div>
                <div class="content content1 d-flex flex-column my-auto" id="content1">
                    <div class="part part1 ">
                        <div class="logo d-flex justify-content-center mb-2"><img src="./img/self/n/logo.png" alt=""></div>
                        <div class="title d-flex justify-content-center mx-5 pb-2"><h3>註冊</h3></div>
                    </div>
                    <div class="part2 w-100  ">
            
                        <div class="title d-flex justify-content-center "><h3>STEP1</h3></div>
                        <div class="stepbox mx-5  d-flex justify-content-center">
                            <div class="stepline"></div>
                            <div class="steps d-flex justify-content-between">
            
                                <div class="step step1 d-flex flex-column align-items-center">
                                    <div class="dot"></div>
                                    <div class="text">輸入密碼</div>
                                </div>
                                <div class="step step2 d-flex flex-column align-items-center">
                                    <div class="dot"></div>
                                    <div class="text">填寫資料</div>
                                </div>
                                <div class="step step3 d-flex flex-column align-items-center">
                                    <div class="dot"></div>
                                    <div class="text">完成註冊</div>
                                </div>
                            </div>
            
                        </div>
                    </div>
                    <div class="part3 w-100  ">
            
                        <div class="title d-flex justify-content-center "><h3>STEP2</h3></div>
                        <div class="stepbox mx-5 mb-4 d-flex justify-content-center">
                            <div class="stepline"></div>
                            <div class="steps d-flex justify-content-between">
            
                                <div class="step step1 d-flex flex-column align-items-center">
                                    <div class="dot"></div>
                                    <div class="text">輸入密碼</div>
                                </div>
                                <div class="step step2 d-flex flex-column align-items-center">
                                    <div class="dot"></div>
                                    <div class="text">填寫資料</div>
                                </div>
                                <div class="step step3 d-flex flex-column align-items-center">
                                    <div class="dot"></div>
                                    <div class="text">完成註冊</div>
                                </div>
                            </div>
            
                        </div>
                    </div>
                    <form class="form mt-3" name="form1" onsubmit="checkForm(); return false;" method="post" novalidate>
                        <div class=" mb-3 email mx-5">
                                <label for="email" class="form-label mb-2 ">註冊新帳號</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="請輸入電子信箱" >
                        </div>
                        <div class="msgerror3 mx-5">
                            <p>帳號請輸入電子郵件有誤請檢查--</p>
                        </div>
                        <p class="next ">註冊</p>
            
            
                        <div class="  mb-3 password mx-5">
                            <label for="password" class="form-label mt-4 mb-2 ">密碼</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="請輸入6位數以上密碼">
                        </div>
            
                        <div class="mb-3 password mx-5">
                            <label for="password" class="form-label  mb-2 ">再次確認密碼</label>
                            <input type="password" class="form-control" id="password_check" name="password_check" placeholder="再次輸入6位數以上密碼">
                        </div>
                        <div class="msgerror mb-1 mx-5">
                            <p>密碼有誤請檢查--請大於7位數</p>
                        </div>
                        <div class="msgerror1 mb-1 mx-5">
                            <p>密碼有誤請檢查--密碼請與確認密碼一致</p>
                        </div>
            
            
                        <p class="next2">確定</p>
                        <div class=" mb-3 name mx-5">
                            <label for="name" class="form-label  mb-2 ">姓名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="請輸入真實姓名" required>
                        </div>
                        <div class="mb-3 mobile mx-5">
                            <label for="mobile" class="form-label mb-2 ">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="請輸入連絡電話">
                        </div>
                        <div class="mb-3 birthdate mx-5 ">
                            <label for="birthdate" class="form-label  mb-2 ">生日</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                        </div>
                        <div class="msgerror2 mb-1 mx-2">
                            <p>請填寫完整資訊</p>
                        </div>
                        <div id="msgContainer ">
                            <!-- <div class="alert alert-danger" role="alert">
                                    A simple danger alert—check it out!
                            </div> -->
                        </div>
                        <button type="submit" class="btn endbtn">
                           <p>確認</p> </button>
                    </form>
            
                    <div class="alldown mt-4">
                        <div class="line mx-5">
                                <div class="title-sm d-flex align-items-center justify-content-center " style="pointer-events:none" ><p>快速註冊</p></div>
                        </div>
                        <div class="community d-flex flex
                                justify-content-center align-items-center">
            
                                        <div class="btn">
                                            <a href="#" class="d-flex  ">
                                                <div class="pic"><img src="./img/self/n/google.png" alt=""></div>
                                                <div class="text" style="pointer-events:none" ><p>Google</p></div>
                                            </a>
                                        </div>
                                        <div class="btn">
                                            <a href="#" class="d-flex  ">
                                                <div class="pic "><img src="./img/self/n/fb.png" alt=""></div>
                                                <div class="text" style="pointer-events:none" > <p>Facebook</p></div>
                                            </a>
                                        </div>
            
                        </div>
                        <div class="say d-flex pt-4 justify-content-center">
                                    <div class="left " style="pointer-events:none" > <p>等不及想見到園區的毛孩嗎？</p> </div>
                                    <div class="right"><a href="./login.php"><p>立即登入</p></a></div>
                        </div>
                    </div>
                </div>
            
            
            
            
                
            
    
            
            
            
            </div>
        
    
        </div>
    </div>
</div>






<?php include __DIR__ . './parts/scripts.php'; ?>
<script>

function checkForm() {
        // TODO: 欄位檢查
        if (!$('#email').val()) {
            $('.content1 .msgerror3').css('display','block');

            $('.content1 .email').css('display','block');
            $('.content1 .alldown').css('display','block');
            $('.content1 .next').css('display','block');
            $('.content1 .part1').css('display','block');


                $('.content1 .name').css('display','none');
                $('.content1 .mobile').css('display','none');
                $('.content1 .birthdate').css('display','none');
                $('.content1 .msgContainer').css('display','none');
                $('.content1 .endbtn').css('display','none');
                $('.content1 .part3').css('display','none');

            return;
        }
        // if (!$('#password').val()) {
        //     $("#myAlert").alert();
        //     return;
        // }
        // if (!$('#email').val()) {
        //     alert("請確認密碼");
        //     return;
        // }
        // if (!$('#password1').val()) {
        //     $("#myAlert").alert();
        //     return;
        // }

            const x = document.forms["form1"]["password"].value;
            const y = document.forms["form1"]["password_check"].value;
            if(x.length<6){

                // alert("密碼長度不足");
                $('.content1 .password').css('display','block');
                $('.content1 .next2').css('display','block');
                $('.content1 .part2').css('display','block');

                $('.content1 .name').css('display','none');
                $('.content1 .mobile').css('display','none');
                $('.content1 .birthdate').css('display','none');
                $('.content1 .msgContainer').css('display','none');
                $('.content1 .endbtn').css('display','none');
                $('.content1 .part3').css('display','none');

                $('.content1 .msgerror').css('display','block');
                

                return false;
            }
            if (x != y) {
                // alert("請確認密碼");
                $('.content1 .password').css('display','block');
                $('.content1 .next2').css('display','block');
                $('.content1 .part2').css('display','block');

                $('.content1 .name').css('display','none');
                $('.content1 .mobile').css('display','none');
                $('.content1 .birthdate').css('display','none');
                $('.content1 .msgContainer').css('display','none');
                $('.content1 .endbtn').css('display','none');
                $('.content1 .part3').css('display','none');
                $('.content1 .msgerror1').css('display','block');
                return false;
            }

            if (!$('#name').val()) {
            $('.content1 .msgerror2').css('display','block');

            return;
        }
        if (!$('#mobile').val()) {
            $('.content1 .msgerror2').css('display','block');

            return;
        }



        if (!$('#birthdate').val()) {
            $('.content1 .msgerror2').css('display','block');

            return;
        }

        $.post(
            './nap_api/register-insert-api.php',
            $(document.form1).serialize(),
            function(data) {
                if(data.success){
                    location.href = './welcome.php';
                } else {
                    alert(data.error);

                }
            },
            'json'
        );

    }



    $('.content1 .next').click(function(s){
$(this).parents().find('.content1 .password').css('display','block');
$(this).parents().find('.content1 .next2').css('display','block');
$(this).parents().find('.content1 .part2').css('display','block');


$(this).parents().find('.content1 .email').css('display','none');
$(this).parents().find('.content1 .alldown').css('display','none');
$(this).parents().find('.content1 .next').css('display','none');
$(this).parents().find('.content1 .part1').css('display','none');
$('.content1 .msgerror3').css('display','none');


})

$('.content1 .next2').click(function(s){

// $(this).parents().find('.content1 form').css('display','none');
$(this).parents().find('.content1 .password').css('display','none');
$(this).parents().find('.content1 .next2').css('display','none');
$(this).parents().find('.content1 .part2').css('display','none');

$(this).parents().find('.content1 .name').css('display','block');
$(this).parents().find('.content1 .mobile').css('display','block');
$(this).parents().find('.content1 .birthdate').css('display','block');
$(this).parents().find('.content1 .msgContainer').css('display','block');
$(this).parents().find('.content1 .endbtn').css('display','block');
$(this).parents().find('.content1 .part3').css('display','block');
$('.content1 .msgerror').css('display','none');
$('.content1 .msgerror1').css('display','none');
})


$('.part3 .step1').click(function(s){


$(this).parents().find('.content1 .password').css('display','block');
$(this).parents().find('.content1 .next2').css('display','block');
$(this).parents().find('.content1 .part2').css('display','block');

$(this).parents().find('.content1 .name').css('display','none');
$(this).parents().find('.content1 .mobile').css('display','none');
$(this).parents().find('.content1 .birthdate').css('display','none');
$(this).parents().find('.content1 .msgContainer').css('display','none');
$(this).parents().find('.content1 .endbtn').css('display','none');
$(this).parents().find('.content1 .part3').css('display','none');


})


</script>
<?php include __DIR__. '/parts/html-foot.php'; ?>