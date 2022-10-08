<?php
session_start();
// 如果已經登入會員


require __DIR__ . '/parts/connect_db.php';
$pageName = '忘記密碼'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


<!-- <link rel="stylesheet" href="./nap_css/component_mobile2.css"> -->


<link rel="stylesheet" href="./nap_css/forget.css?version=&lt;?php echo time(); ?&gt;">
<title><?= 'N.A.P. | ' . $pageName ?></title>
</head>

<body>

    <div class="wrap">
        <div class="login-pc d-flex justify-content-end">
            <div class="textbox d-flex  align-items-center justify-content-center ">
                <div class="stars">

                    <div class="star star11"> </div>
                    <div class="star star12"> </div>
                    <div class="star star13"> </div>
                    <div class="star star14"> </div>
                    <div class="star star15"> </div>
                    <div class="star star16"> </div>
                    <div class="star star17"> </div>
                    <div class="star star18"> </div>
                    <div class="star star19"> </div>
                    <div class="star star20"> </div>
                    <div class="star star21"> </div>
                    <div class="star star22"> </div>
                    <div class="star star23"> </div>
                    <div class="star star24"> </div>
                    <div class="star star25"> </div>
                    <div class="star star26"> </div>
                </div>
                <img src="./img/self/n/member/bg/logo-white.png" alt="" class="people-logo">
            </div>




            <div class="content content1 d-flex flex-column my-auto" id="content1">
                <a href="./homepage.php">
                    <div class="close"><img src="./img/self/n/close.png" alt=""></div>
                </a>
                <div class="part part1 ">
                    <div class="logo d-flex justify-content-center mb-2"><img src="./img/self/n/logo.png" alt=""></div>
                    <div class="title d-flex justify-content-center mx-5 pb-2">
                        <h3>忘記密碼</h3>
                    </div>
                </div>
                <form class="form mt-3 " name="form1" onsubmit="checkForm(); return false;" method="post" novalidate>
                    <div class=" mb-3 email mx-5">
                        <label for="email" class="form-label mb-2 ">輸入帳號</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="請輸入電子信箱">
                    </div>
                    <div class="msgerror3 mx-5">
                        <p>帳號請輸入電子郵件有誤請檢查--</p>
                    </div>
                    <button type="submit" class="btn forget" onclick="">
                        <p>送出驗證</p>
                    </button>


                    <!-- <div class="  mb-3 password mx-5">
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
                    </div> -->



                    <!-- <div class="msgerror2 mb-1 mx-2">
                        <p>請填寫完整資訊</p>
                    </div>
                    <div id="msgContainer "> -->
                    <!-- <div class="alert alert-danger" role="alert">
                                    A simple danger alert—check it out!
                            </div> -->
                    <!-- </div> -->
                    <!-- <button type="submit" class="btn endbtn">
                        <p>確認</p>
                    </button> -->
                </form>

                <div class="alldown mt-2">
                    <div class="line mx-5">
                        <div class="title-sm d-flex align-items-center justify-content-center " style="pointer-events:none">
                            <p>快速登入</p>
                        </div>
                    </div>
                    <div class="community d-flex flex
                                justify-content-center align-items-center">

                        <div class="btn">
                            <a href="#" class="d-flex  ">
                                <div class="pic"><img src="./img/self/n/google.png" alt=""></div>
                                <div class="text" style="pointer-events:none">
                                    <p>Google</p>
                                </div>
                            </a>
                        </div>
                        <div class="btn">
                            <a href="#" class="d-flex  ">
                                <div class="pic "><img src="./img/self/n/fb.png" alt=""></div>
                                <div class="text" style="pointer-events:none">
                                    <p>Facebook</p>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="say d-flex pt-4 justify-content-center">
                        <div class="left " style="pointer-events:none">
                            <p>等不及想見到園區的毛孩嗎？</p>
                        </div>
                        <div class="right"><a href="./login.php">
                                <p>立即登入</p>
                            </a></div>
                    </div>
                </div>
            </div>










        </div>


    </div>
    </div>
    </div>






    <?php include __DIR__ . '/parts/scripts.php'; ?>
    <script>
        function checkForm() {
            // TODO: 欄位檢查
            // if (!$('#email').val()) {
            //     form.classList.add('was-validated')
            //     return;
            // }
            // console.log('email',$('#email').val());

            $.post(
                    './nap_api/forget-api.php',
                    $(document.form1).serialize(),
                    function(data) {
                        if (data.success) {
                            // location.href = './forget_back.php';
                            $.post('./nap_api/emailcatch-api.php', {
                                    email: $('#email').val()
                                }, function() {
                                    // console.log('res');
                                    $.post('../forget_email.php', {
                                        email: $('#email').val()
                                    });
                                    Swal.fire({
                                        icon: 'success',
                                        title: '已發送重設信件',
                                        text: "快去信箱收信吧！信件可能會稍微延遲，請耐心等候..._〆(°▽°*)",
                                        showConfirmButton: false,
                                        timer: 3000,

                                    });
                                });
                            }
                            
                    else {
                        Swal.fire({
                            icon: 'warning',
                            title: '你的信箱還沒註冊過喔！',
                            text: "N.A.P. 期待你的加入！！",
                            showConfirmButton: false,
                            timer: 3000,
                            // console.log('get----email');
                        });
                    }
                },
                'json'
        );

        }

        // function getemail(){
        //     location.href = './forget_email.php';
        // }
    </script>
    <?php include __DIR__ . '/parts/html-foot.php'; ?>