

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css_n/reset.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <link rel="stylesheet" href="./bootstrap-5.1.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap-5.1.1-dist/js/bootstrap.js">

    <link rel="stylesheet" href="./css_n/register3.css">
    <title><?= $title ?></title>
</head>
<body>

<div class="wrap">
    <div class="login-pc d-flex justify-content-end">
        <div class="textbox d-flex  align-items-center justify-content-center">
            <div class="close"><img src="./img_n/close.png" alt=""></div>
            <div class="content content1 d-flex flex-column" id="content1">
                <div class="part part1 ">
                    <div class="logo d-flex justify-content-center"><img src="./img_n/logo.png" alt=""></div>
                    <div class="title d-flex justify-content-center "><h3>註冊</h3></div>
                </div>
                <div class="part2 w-100  ">
                    
                    <div class="title d-flex justify-content-center "><h3>STEP1</h3></div>
                    <div class="stepbox mx-5 d-flex justify-content-center">
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
                    <div class="stepbox mx-5 d-flex justify-content-center">
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

                <form name="form1" onsubmit="checkForm(); return false;" novalidate>
                    <div class="mb-3 email mx-2">
                            <label for="email" class="form-label ">註冊新帳號</label>
                            <input type="text" class="form-control" id="email" name="email" >
                    </div>
                    <div class="msgerror3 mx-2">
                        <p>帳號請輸入電子郵件有誤請檢查--</p>
                    </div>

                    <p class="next">註冊</p>
                    
                    
                    <div class="mb-3 password mx-2">
                        <label for="password" class="form-label">密碼</label>
                        <input type="password" class="form-control" id="password" name="password">

                    </div>
                    
                    <div class="mb-2 password mx-2">
                        <label for="password" class="form-label">再次確認密碼</label>
                        <input type="password" class="form-control" id="password_check" name="password_check">
                    </div>

                    <div class="msgerror mb-1 mx-2">
                        <p>密碼有誤請檢查--請大於7位數</p>
                    </div>
                    <div class="msgerror1 mb-1 mx-2">
                        <p>密碼有誤請檢查--密碼請與確認密碼一致</p>
                    </div>
                    
                    

                    <p class="next2">下一位</p>

                    <div class="mb-3 name mx-2">
                        <label for="name" class="form-label">姓名</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3 mobile mx-2">
                        <label for="mobile" class="form-label">手機</label>
                        <input type="text" class="form-control" id="mobile" name="mobile">
                    </div>

                    <div class="mb-3 birthdate mx-2 ">
                        <label for="birthdate" class="form-label">生日</label>
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
                    <button type="submit" class="btn btn-primary endbtn">確認</button>
                </form>


                    
                <div class="alldown">
                    <div class="line">
                            <div class="title-sm d-flex flex-column align-items-center" style="pointer-events:none" ><p>快速註冊</p></div>
                    </div>
                    <div class="community d-flex flex
                            justify-content-center align-items-center">
                    
                                    <div class="btn">
                                        <a href="#" class="d-flex  ">
                                            <div class="pic"><img src="./img_n/google.png" alt=""></div>
                                            <div class="text" style="pointer-events:none" ><p>Google</p></div>
                                        </a>
                                    </div>
                                    <div class="btn">
                                        <a href="#" class="d-flex  ">
                                            <div class="pic "><img src="./img_n/fb.png" alt=""></div>
                                            <div class="text" style="pointer-events:none" > <p>Facebook</p></div>
                                        </a>
                                    </div>
                    
                    </div>
                    <div class="say d-flex pt-4 justify-content-center">
                                <div class="left " style="pointer-events:none" > <p>等不及想見到園區的毛孩嗎？</p> </div>
                                <div class="right"><a href="./login.html"><p>立即登入</p></a></div>
                    </div>
                </div>

            </div>
            
            
                
                
            </div>
        
        
                    
                
                
        </div>
    
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
// function validateForm() {
//             var x = document.forms["form1"]["password"].value;
//             var y = document.forms["form1"]["password_check"].value;
//             if(x.length<6){
//                 alert("密碼長度不足");
//                 return false;
//             }
//             if (x != y) {
//                 alert("請確認密碼是否輸入正確");
//                 return false;
//             }
//         }






// -----------------------
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
            '50.data-insert-api.php',
            $(document.form1).serialize(),
            function(data) {
                if(data.success){
                    location.href = './';
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
</body>

</html>