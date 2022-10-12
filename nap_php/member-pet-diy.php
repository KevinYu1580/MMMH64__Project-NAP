<?php session_start();
require __DIR__ . '/parts/connect_db.php';

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$id = $_SESSION['user']['id'];

// if(! isset($_GET['id'])){
//     header('Location: member-pet.php');
//     exit;
// }

$sid = intval($_GET['sid']);
$sql = "SELECT * FROM member_pet_card WHERE sid=$sid AND `member_sid` =$id ";
$rows = $pdo->query($sql)->fetch();

//如果沒有拿到資料
// if(empty($r)){
//     header('Location: member-pet.php');
//     exit;
// }
?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = '會員中心'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">


</head>

<?php include __DIR__ . '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav.css?version=&lt;?php echo time(); ?&gt;">


<link rel="stylesheet" href="./nap_css/pet.css?version=&lt;?php echo time(); ?&gt;">




<!------ menber-nav ------>
<div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
    <div class="titlebox  ">
        <h2>會員中心</h2>
    </div>
    <div class="line"></div>

    <div class="partname-mb w-100">
        <div class="titlemb d-flex justify-content-center align-items-center">
            <h2>會員中心</h2>
        </div>
    </div>
    <div class="container1 d-flex justify-content-center mt-4">
        <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
            <li class="bd">
                <a href="./info-info.php" class="">基本資料</a>
            </li>
            <li class="bd">
                <a href="./member-pet.php" class="inhere">毛孩資料</a>
            </li>
            <li class="bd bd-none">
                <a href="./list.php" class="#">訂單查詢</a>
            </li>
            <li class=" bd">
                <a href="./post.php" class="#">歷史發佈</a>
            </li>
            <li class=" bd">
                <a href="./love-pet.php" class="">我的關注</a>
            </li>
            <li class="">
                <a href="./gift.php" >優惠專區</a>
            </li>


        </ul>
    </div>

</div>


<!------ menber-nav ------>
<!-- 分頁 -->
<!-- <div class="top-pages">
    <div class="top-page d-flex w-100 justify-content-center">
        <button onclick="clickEvent()" class="plus-top">
            <div class=" page2 d-flex " >
                <img class="mx-2" src="./img/self/n/pet/plus+top.svg" alt=""> 
                <h5> 新增毛孩資料</h5>
            </div>
        </button>
    </div>
    
</div> -->



<!------ content ------>

<div class="album py-2 ">
    <div class="container m-auto">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-mb-3 d-flex  ">
            <div class="col mx-5 mb-4 col-pc ">
                <div class="outup">
                    <form name="form2" method="post" enctype="multipart/form-data" style="display: none;">
                        <input type="file" name="img" accept="image/png,image/jpeg">
                    </form>
                    <button class="photoup" onclick="document.form2.img.click()">
                        <img src="./img/self/n/pet/camera.svg" alt="" class="upload">
                    </button>
                    <img id="myimg" src="" alt="">
                </div>
                <form class="form needs-validation" name="form1" method="post" onsubmit="checkForm1(); return false;">
                    <input type="hidden" name="sid" value="<?= $sid ?>">
                    <div class="card1 ">
                        <div class="up-img">
                            <div class="imgbox">
                                <img src="./uploads/<?= $rows['img'] ?>" alt="" class="photo">
                            </div>
                        </div>
                        <div class="card-body1">
                            <div class="diypart">
                                <img src="./img/self/n/pet/<?= $rows['card_style'] ?>.svg" alt="" class="card-pc">
                                <div class="petname-box pet-box  mb-3  d-flex ">
                                    <label for="name" class="form-label d-flex align-items-center">毛孩姓名</label>
                                    <input type="name" class="form-control" id="name" name="name" value="<?= htmlentities($rows['name']) ?>" required>
                                </div>
                                <div class="petname-box pet-box pet-box3 mb-3  d-flex ">
                                    <label for="type" class="form-label d-flex align-items-center">種類</label>
                                    <input type="type" class="form-control" id="type" name="type" value="<?= htmlentities($rows['type']) ?>" required>
                                </div>
                                <div class="petname-box pet-box pet-box4  mb-3  d-flex ">
                                    <label for="gender" class="form-label d-flex align-items-center">性別</label>
                                    <input type="gender" class="form-control" id="gender" name="gender" value="<?= htmlentities($rows['gender']) ?>" required>
                                </div>
                                <div class="petname-box pet-box pet-box2  mb-3  d-flex ">
                                    <label for="age" class="form-label d-flex align-items-center">年齡</label>
                                    <input type="age" class="form-control" id="age" name="age" value="<?= htmlentities($rows['age']) ?>" required>
                                </div>
                            </div>
                            <div class="pet-color  d-flex  pb-3">
                                <div class="pet-color-gray d1 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball" value="d-color-1" required>
                                </div>
                                <div class="pet-color-brown d2 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball" value="d-color-2" required>
                                    <img src="" alt="">
                                </div>
                                <div class="pet-color-yellow d3 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball" value="d-color-3" required>
                                    <img src="" alt="">
                                </div>
                                <div class="pet-color-red d4 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball " value="d-color-4" required>
                                    <img src="" alt="">
                                </div>
                                <div class="pet-color-gray c1 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball-cat" value="c-color-1" required>
                                </div>
                                <div class="pet-color-brown c2 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball-cat" value="c-color-2" required>
                                    <img src="" alt="">
                                </div>
                                <div class="pet-color-yellow c3 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball-cat" value="c-color-3" required>
                                    <img src="" alt="">
                                </div>
                                <div class="pet-color-red c4 mx-3">
                                    <input type="radio" name="card_style" class="choose-ball-cat" value="c-color-4" required>
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class=" btn-group1 d-flex justify-content-end align-items-center mt-3">
                                <div class="btn-box">
                                    <button type="submit" name="save_radio" class="btn">確認修改</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <div class="col mx-5 mb-4 ">
            <div class="card2">
                <div class="control flex-column  align-items-center
              ">
                    <p class="pb-1">A 選擇卡片外觀樣式</p>
                    <div class="kind d-flex  py-3">
                        <div class="img-dog d-flex justify-content-center align-items-center mx-3">
                            <img src="./img/self/n/pet/diy/card-kind/Dog.svg" alt="">
                        </div>
                        <div class="img-cat d-flex justify-content-center align-items-center mx-3 ">
                            <img src="./img/self/n/pet/diy/card-kind/Cat.svg" alt="">
                        </div>
                    </div>
                    <p class="py-2 py-sm-4">B 選擇卡片顏色</p>


                </div>
            </div>




        </div>





    </div>
</div>
</div>







</div>


<div class="bg" style="position: fixed;
    top: 0;
     left: 0; 
    z-index: 900;
    width: 100vw;
    height: 100vh;
    background-color: #4C4C4C; opacity: 0.5; display:none;"></div>


<div id="msgContainer1" class="" style=" position: fixed; z-index: 1055;top: 0%; left: 0%; display:none;
  width: 100vw;
    height: 100vh;">
    <!-- <div class="alert modal-dialog modal-dialog-centered" role="alert" style="z-index: 1056;" >
            <p style=" position: absolute; z-index: 1057;top: 57%;left: 50%; transform: translate(-50%, -50%); ">修改完成
            </p> 
            <img id="myimg1" src="./img/self/n/fix.gif" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
        </div> -->
</div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>

<script>
    document.form2.img.addEventListener('change', function() {
        console.log(this.files);
        const fd = new FormData(document.form2);
        fetch('upload-img-api.php?sid=<?= $sid ?>', {
            method: 'POST',
            body: fd,
        }).then(r => r.json()).then(obj => {
            console.log(obj);
            if (obj.success) {
                myimg.src = './uploads/' + obj.filename;
            }
        })


    });


    $('.kind .img-dog').click(function(s) {
        $(this).parents().find('.control .img-dog ').css('background-color', '#E8E7D1');
        $(this).parents().find('.control .img-cat ').css('background-color', '#F7F5F0');
        $(this).parents().find(' .pet-color .c1').css('display', 'none');
        $(this).parents().find(' .pet-color .c2').css('display', 'none');
        $(this).parents().find(' .pet-color .c3').css('display', 'none');
        $(this).parents().find(' .pet-color .c4').css('display', 'none');

        $(this).parents().find(' .pet-color .d1').css('display', 'block');
        $(this).parents().find(' .pet-color .d2').css('display', 'block');
        $(this).parents().find(' .pet-color .d3').css('display', 'block');
        $(this).parents().find(' .pet-color .d4').css('display', 'block');
    })

    $('.img-cat img').click(function(s) {
        $(this).parents().find('.control .img-cat').css('background-color', '#E8E7D1');
        $(this).parents().find('.control .img-dog ').css('background-color', '#F7F5F0');
        $(this).parents().find(' .pet-color .d1').css('display', 'none');
        $(this).parents().find(' .pet-color .d2').css('display', 'none');
        $(this).parents().find(' .pet-color .d3').css('display', 'none');
        $(this).parents().find(' .pet-color .d4').css('display', 'none');

        $(this).parents().find(' .pet-color .c1').css('display', 'block');
        $(this).parents().find(' .pet-color .c2').css('display', 'block');
        $(this).parents().find(' .pet-color .c3').css('display', 'block');
        $(this).parents().find(' .pet-color .c4').css('display', 'block');

    })

    $('.pet-color .d1').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/d-color-1.svg');

    })
    $('.pet-color .d2').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/d-color-2.svg');

    })
    $('.pet-color .d3').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/d-color-3.svg');

    })
    $('.pet-color .d4').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/d-color-4.svg');

    })

    $('.pet-color .c1').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/c-color-1.svg');

    })
    $('.pet-color .c2').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/c-color-2.svg');

    })
    $('.pet-color .c3').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/c-color-3.svg');

    })
    $('.pet-color .c4').click(function(s) {
        $(this).parents().find('.diypart .card-pc').attr('src', './img/self/n/pet/c-color-4.svg');

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
            <img id="myimg1" src="${ccc}" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
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
        // const name = document.form1.name.value;
        // const email = document.form1.email.value;

        // if (name.length < 2) {
        //     genAlert('請填寫正確的姓名!');
        //     isPass = false;
        // }
        // if (!email) {
        //     genAlert('請填寫正確的 email!');
        //     isPass = false;
        // }

        if (isPass) {
            // 送出表單資料

            $.post(
                'pet-edit-api.php?sid=<?= $rows['sid'] ?>',
                $(document.form1).serialize(),
                function(data) {
                    console.log(data);
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: '已成功修改!',
                            timer: 1500,
                            showConfirmButton: false,
                        }).then((result) => {
                            location.href = './member-pet.php';
                        });

                    } else {
                        genAlert('尚未修改', './img/self/n/none.gif');
                    }


                }, 'json');
        }
    }
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>