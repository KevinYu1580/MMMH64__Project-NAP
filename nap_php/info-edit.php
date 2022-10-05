<?php
require __DIR__ . '/parts/connect_db.php';

// if(! isset($_GET['id'])){
//     header('Location: info-info.php');
//     exit;
// }

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}


// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";



$id = $_SESSION['user']['id'];
// echo json_encode([
//     '$id'=>$id,
// ]);
$sql = "SELECT * FROM member01 WHERE id=$id";
$r = $pdo->query($sql)->fetch();

//如果沒有拿到資料
if (empty($r)) {
    header('Location: info-info.php');
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


</head>

<?php include __DIR__ . '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav.css?version=&lt;?php echo time(); ?&gt;">

<link rel="stylesheet" href="./nap_css/info.css?version=&lt;?php echo time(); ?&gt;">



<div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
    <div class="titlebox  pb-2">
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
                <a href="./info-info.php" class="inhere">基本資料</a>
            </li>
            <li class="bd">
                <a href="./member-pet.php" class="">毛孩資料</a>
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
                <a href="./gift.php" class="">優惠專區</a>
            </li>


        </ul>
    </div>

</div>


<!------ menber-nav ------>
<!------ content ------>





<div class="info-content d-flex flex-column flex-sm-row">

    <div class="control d-flex flex-column justify-content-center align-items-center">
        <div class="person d-flex flex-sm-column flex-row justify-content-center align-items-center">

            <div class="imgbox">
                <form name="form2" method="post" enctype="multipart/form-data" style="display: none;">
                    <input type="file" name="avatar" accept="image/png,image/jpeg">
                </form>
                <button class="photoup" onclick="document.form2.avatar.click()">
                    <img src="./img/self/n/member/upload.svg" alt="" class="upload">
                </button>
                <img id="myimg" src="" alt="">


                <img src="./img/member/profile-image/<?= $r['avatar'] ?>" alt="" class="old-avatar">
            </div>
            <form class="form needs-validation" name="form1" method="post" onsubmit="checkForm1(); return false;">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="name"><?= $r['name'] ?></div>
        </div>
        <ul class="d-flex flex-sm-column flex-row justify-content-center ">
            <li class="bdr"> <a href="./info-info.php?" class="texthover">返回上頁</a> </li>
            <li> <a href="./info-pw.php" class="texthover">修改密碼</a> </li>
        </ul>
    </div>
    <div class="list mt-auto mb-auto">

        <div class="up-part d-flex flex-column align-items-center ">
            <div class="name-box inlong mb-3 ">
                <label for="name" class="form-label">姓名</label>
                <input type="name" class="form-control" id="name" name="name" value="<?= htmlentities($r['name']) ?>  " required>

                <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                </div>
            </div>
            <div class="email-box inlong mb-3 ">
                <label for="email" class="form-label">帳號 (email)</label>
                <input type="email " class="form-control " id="email" name="email" value="<?= htmlentities($r['email']) ?> " required>
                <div class="invalid-feedback">
                    此處不可空值
                </div>



            </div>
            <div class="mobile-box inlong mb-3">
                <label for="mobile" class="form-label">手機</label>
                <input type="mobile" class="form-control" id="mobile" name="mobile" value="<?= htmlentities($r['mobile']) ?> " required>
                <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                </div>

            </div>
            <div class="birthdate-box inlong mb-3 ">
                <label for="birthdate" class="form-label">生日</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= htmlentities($r['birthdate']) ?>" required>
                <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                </div>

            </div>


            <div class="btn-box d-flex flex-column  ">
                <button type="submit" class="btn btn-primary">修改</button>

            </div>

        </div>

        </form>
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



<!-- Modal -->
<!-- <div class="modal fade1 "  id="exampleModal" style="position: fixed; 
    top: 0;
    left: 0;
    z-index: 1055; " >
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script>
    document.form2.avatar.addEventListener('change', function() {
        console.log(this.files);
        const fd = new FormData(document.form2);
        fetch('upload-avatar-api.php?id=<?= $id ?>', {
            method: 'POST',
            body: fd,
        }).then(r => r.json()).then(obj => {
            console.log(obj);
            if (obj.success) {
                myimg.src = './img/member/profile-image/' + obj.filename;
            }
        })


    });



    const msgc = $('#msgContainer1');
    const msgc1 = $('.bg');

    // function genAlert(msg, ccc) {
    //     $('.bg').css('display', 'block');
    //     $(' #msgContainer1').css('display', 'block');


    //     const a = $(`
    
    //     <div class="alert modal-dialog modal-dialog-centered" role="alert" style="z-index: 1056;" >
    //         <p style=" position: absolute; z-index: 1057;top: 57%;left: 50%; transform: translate(-50%, -50%); ">${msg}
    //         </p> 
    //         <img id="myimg1" src="${ccc}" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
    //     </div> 

    // `);

    //     msgc.append(a);
    //     setTimeout(() => {
    //         a.fadeOut(400, function() {
    //             a.remove();
    //         });

    //     }, 2000);
    //     msgc.append(msgc);
    //     setTimeout(() => {
    //         msgc.fadeOut(400, function() {
    //             $(' #msgContainer1').css('display', 'none');
    //         });

    //     }, 2000);
    //     msgc.append(msgc1);
    //     setTimeout(() => {
    //         msgc.fadeOut(400, function() {
    //             $('.info-content #msgContainer').css('display', 'none');
    //         });

    //     }, 2000);
    // }



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
                'info-edit-api.php',
                $(document.form1).serialize(),
                function(data) {
                    console.log(data);
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: '修改完成!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(()=>{
                            location.href ='./info-info.php';
                        })
                        // genAlert('修改完成', './img/self/n/fix.gif');
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: '尚無修改',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        // genAlert('尚無修改', './img/self/n/none.gif');
                    }


                }, 'json');
        }
    }
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>