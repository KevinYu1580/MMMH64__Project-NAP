<?php
session_start();
// 如果已經登入會員


require __DIR__ . '/parts/connect_db.php';
$pageName = '重設密碼'; // 頁面名稱
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
                <div class="fires">
                        <img src="./img/self/n/game/fire-1.png" alt="" class="fire1">
                        <img src="./img/self/n/game/fire-2.png" alt="" class="fire2">
                        <img src="./img/self/n/game/fire-3.png" alt="" class="fire3">
                        <img src="./img/self/n/game/fire-4.png" alt="" class="fire4">
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
                        <h3>重設密碼</h3>
                    </div>
                </div>
                <form class="form" name="form1" onsubmit="checkForm(); return false;" method="post" novalidate>
                    <div class="  mb-3 password mx-5" style="display:block">
                        <label for="password" class="form-label mt-4 mb-2 ">密碼</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="請輸入6位數以上密碼">
                    </div>

                    <div class=" password mx-5 " style="display:block; margin: top 0px;">
                        <label for="password" class="form-label  mb-2 " >再次確認密碼</label>
                        <input type="password" class="form-control" id="password_check" name="password_check" placeholder="再次輸入6位數以上密碼">
                    </div>
                    <div class="msgerror mb-1 mx-5">
                        <p>密碼有誤請檢查--請大於7位數</p>
                    </div>
                    <div class="msgerror1 mb-1 mx-5">
                        <p>密碼有誤請檢查--密碼請與確認密碼一致</p>
                    </div>
                    <button type="submit" class="btn forget_change">
                        <p>送出驗證</p>
                    </button>


                </form>

                
            </div>










        </div>


    </div>
    </div>
    </div>






    <?php include __DIR__ . '/parts/scripts.php'; ?>
    <script>
        function checkForm() {
    // TODO: 檢查欄位資料格式是不是符合

    let isPass = true; // 預設表單的資料是沒問題的
        const x = document.forms["form1"]["password"].value;
        const y = document.forms["form1"]["password_check"].value;
            if(x.length<6){

                alert("密碼長度不足");
                
                

                return false;
            }
            if (x != y) {
                alert("請確認密碼");
                
                return false;
            }

    if (isPass) {
        // 送出表單資料

        $.post(
            './nap_api/change-pw-api.php',
            $(document.form1).serialize(),
            function(data) {
                // console.log(data);


                if(data.success){
                    Swal.fire({
                            icon: 'success',
                            title: '修改完成!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(()=>{
                            location.href ='./login.php';
                        })
                    // genAlert('修改完成', './img/self/n/fix.gif');
                } else {
                    Swal.fire({
                            icon: 'warning',
                            title: '尚未修改!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    // genAlert('尚未修改', './img/self/n/none.gif');
                }


            }, 'json');
    }
}

    </script>
    <?php include __DIR__ . '/parts/html-foot.php'; ?>