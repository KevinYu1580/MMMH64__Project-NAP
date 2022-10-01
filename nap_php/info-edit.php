<?php
require __DIR__ . '/parts/connect_db_nora.php';

// if(! isset($_GET['id'])){
//     header('Location: info-info.php');
//     exit;
// }




// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";



$id = $_SESSION['user']['id'];
// echo json_encode([
//     '$id'=>$id,
// ]);
$sql = "SELECT * FROM member01 WHERE id=$id";
$r = $pdo->query($sql)->fetch();

//如果沒有拿到資料
if(empty($r)){
    header('Location: info-info.php');
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

<?php include __DIR__. '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav2.css">

<link rel="stylesheet" href="./nap_css/info2.css">



 <!------ menber-nav ------>
 <div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
     
         
         <div class="titlebox pb-2 "><h2>會員中心</h2></div>
         <div class="line"></div>
     
     <div class="partname-mb w-100">
        <div class="titlemb d-flex justify-content-center align-items-center"><h2>會員中心</h2></div>
    </div>
     <div class="container1 d-flex justify-content-center mt-4">
        <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
            <li class="">
                <a href="./info-info.php" class="inhere" >基本資料</a>  
            </li>
            <li class="">
                <a href="./member-pet.php" class="">毛孩資料</a>  
            </li>
            <li class="bd-none1">
                <a href="./list.php" class="#">訂單查詢</a>  
            </li>
            <li class="">
                <a href="./post.php" class="#">歷史發佈</a>  
            </li>
            <li class="">
                <a href="./love-pet.php" class="#">我的關注</a>  
            </li>
            <li class="bd-none">
                <a href="./gift.php" class="">優惠專區</a>  
            </li>
            

        </ul>
     </div>
     
 </div>
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
        <img id="myimg" src="" alt=""  >


                <img src="./img/member/profile-image/<?= $r['avatar'] ?>" alt="" class="old-avatar">
            </div>
            <form class="form needs-validation" name="form1" method="post" onsubmit="checkForm1(); return false;">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="name"><?=$r['name'] ?></div>
        </div>
        <ul class="d-flex flex-sm-column flex-row justify-content-center ">
            <li class="bdr"> <a href="./info-info.php?" class="texthover">返回上頁</a> </li>
            <li > <a href="./info-pw.php" class="texthover">修改密碼</a> </li>
        </ul>
    </div>
    <div class="list mt-auto mb-auto">
        
            <div class="up-part d-flex flex-column align-items-center ">
                <div class="name-box inlong mb-3 ">
                    <label for="name" class="form-label">姓名</label>
                    <input type="name" class="form-control" id="name" name="name" value="<?=htmlentities($r['name']) ?>  "required>
                    
                    <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                    </div>
                </div>
                <div class="email-box inlong mb-3 ">
                <label for="email" class="form-label">帳號 (email)</label>
                <input type="email "  class="form-control "  id="email" name="email" value="<?=htmlentities($r['email']) ?> "required>
                <div class="invalid-feedback">
                    此處不可空值
                </div>


                    
                </div>
                <div class="mobile-box inlong mb-3">
                    <label for="mobile" class="form-label">手機</label>
                    <input type="mobile" class="form-control" id="mobile" name="mobile" value="<?=htmlentities( $r['mobile']) ?> "required>
                    <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                    </div>
                    
                </div>
                <div class="birthdate-box inlong mb-3 ">
                    <label for="birthdate" class="form-label">生日</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= htmlentities($r['birthdate']) ?>"  required>
                    <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                    </div>
                    
                </div>
                <div id="msgContainer">
            <!--
                <div class="alert alert-danger" role="alert">
                     新增成功
                </div>
                -->
            </div>
                
                <div class="btn-box d-flex flex-column  ">
                    <button type="submit" class="btn btn-primary">修改</button>
                    
                </div>
                
            </div>
            
          </form> 
    </div>
    
 </div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script>

document.form2.avatar.addEventListener('change', function(){
        console.log(this.files);
        const fd = new FormData(document.form2);
        fetch('upload-avatar-api.php?id=<?= $id ?>', {
            method: 'POST',
            body: fd,
        }).then(r => r.json()).then(obj => {
            console.log(obj);
            if(obj.success){
                myimg.src = './img/member/profile-image/' + obj.filename;
            }
        })


    });



        const msgc = $('#msgContainer');

function genAlert(msg, type='danger') {
    const a = $(`
    <div class="alert alert-${type}" role="alert">
        ${msg}
    </div>
    `);

    msgc.append(a);
    setTimeout(()=>{
        a.fadeOut(400, function(){
            a.remove();
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
            'info-edit-api.php',
            $(document.form1).serialize(),
            function(data) {
                console.log(data);
                if(data.success){
                    genAlert('修改完成', 'success');
                } else {
                    genAlert(data.error);
                }


            }, 'json');
    }
}
</script>
<?php include __DIR__. '/parts/html-foot.php'; ?>


