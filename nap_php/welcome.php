<?php
session_start();
// 如果已經登入會員
if (!empty($_SESSION['user'])) {
    header('Location: ./');
    exit;
}
?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


<!-- <link rel="stylesheet" href="./nap_css/component_mobile2.css"> -->
<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./nap_css/welcome1.css?version=&lt;?php echo time(); ?&gt;">

<title><?= $title ?></title>
</head>

<body>




    <div class="wrap">
        <div class="login-pc d-flex justify-content-end">
            <div class="textbox d-flex  align-items-center justify-content-center">

                <div class="close"><img src="./img/self/n/close.png" alt=""></div>
                <div class="bikegirl">
                    <div class="play-people">
                        <img src="./img/self/n/member/bg/girl.png" alt="" class="girl ">
                        <img src="./img/self/n/member/bg/bike-body.png" alt="" class="bike-body">


                        <img src="./img/self/n/member/bg/svg/leg-up-f_1.svg" alt="" class="legup-f">
                        <img src="./img/self/n/member/bg/svg/leg-down-f.svg" alt="" class="legdown-f">
                        <img src="./img/self/n/member/bg/svg/foot-f.svg" alt="" class="foot-f">

                        <img src="./img/self/n/member/bg/svg/leg-up.svg" alt="" class="legup-b">
                        <img src="./img/self/n/member/bg/svg/leg-down.svg" alt="" class="legdown-b">
                        <img src="./img/self/n/member/bg/svg/foot.svg" alt="" class="foot-b">


                        <img src="./img/self/n/member/bg/wheel.png" alt="" class="wheel1">
                        <img src="./img/self/n/member/bg/wheel.png" alt="" class="wheel2">


                    </div>

                </div>
                <img src="./img/self/n/member/bg/logo-white.png" alt="" class="people-logo">
                <div class="content content4 d-flex flex-column align-items-center  m-auto">
                    <div class="part  ">
                        <div class="title d-flex justify-content-center ">
                            <h3>STEP3</h3>
                        </div>
                        <div class="stepbox mx-5 d-flex justify-content-center">
                            <div class="stepline"></div>
                            <div class="steps d-flex justify-content-between">
                                <div class="step step1 d-flex flex-column align-items-center">
                                    <div class="dot mb-2"></div>
                                    <div class="text">輸入密碼</div>
                                </div>
                                <div class="step step2 d-flex flex-column align-items-center">
                                    <div class="dot mb-2"></div>
                                    <div class="text">填寫資料</div>
                                </div>
                                <div class="step step3 d-flex flex-column align-items-center">
                                    <div class="dot mb-2"></div>
                                    <div class="text">完成註冊</div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <form class="form needs-validation d-flex flex-column align-items-center">
                        <div class="up-part d-flex flex-column align-items-center   w-100">
                            <img src="./img/self/n/check.png" alt="">
                            <p>完成註冊</p>
                            <p class="say">你已獲得一張優惠券，趕緊登入吧</p>
                        </div>
                        <div class="btn-box d-flex flex-column  ">
                            <button type="button" class="btn btn-primary" onclick="location.href='./login.php'">
                                <p>確認</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- bootstrap擇一使用 -->
    <!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

    <?php include __DIR__ . '/parts/scripts.php'; ?>
    <!-- <script src="./nap_js/component.js"></script> -->
    <script>
        // -----------------------
        function checkForm() {

            $.post(
                'login-api.php',
                $(document.form1).serialize(),
                function(data) {
                    if (data.success) {
                        location.href = './';
                    } else {
                        alert(data.error);
                    }
                },
                'json'
            );

        }
    </script>
    <!-- <?php include __DIR__ . '/parts/html-foot.php'; ?> -->