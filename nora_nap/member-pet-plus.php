<?php
require __DIR__ . '/parts/connect_db.php';


$id = $_SESSION['user']['id'];
// echo json_encode([
//     '$id'=>$id,
// ]);
$sql = "SELECT * FROM member01 WHERE id=$id";
$r = $pdo->query($sql)->fetch();

//如果沒有拿到資料
// if(empty($r)){
//     header('Location: info-info.php');
//     exit;
// }
?>



<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__. '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


    <link rel="stylesheet" href="./nap_css/component_mobile2.css">
    <link rel="stylesheet" href="./nap_css/member-nav.css">
    <link rel="stylesheet" href="./nap_css/pet7.css">
    
</head>
<?php include __DIR__. '/parts/navbar.php'; ?>



 <!------ menber-nav ------>
 <div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
     
         
     <div class="titlebox  "><h2>會員中心</h2></div>
     <div class="line"></div>
 
 <div class="partname-mb w-100">
    <div class="titlemb d-flex justify-content-center align-items-center"><h2>會員中心</h2></div>
</div>
 <div class="container1 d-flex justify-content-center mt-4">
    <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
        <li class="">
            <a href="./info-index.html" class="" >基本資料</a>  
        </li>
        <li class="">
            <a href="" class="">毛孩資料</a>  
        </li>
        <li class="bd-none1"">
            <a href="" class="#">訂單查詢</a>  
        </li>
        <li class="">
            <a href="" class="#">歷史發佈</a>  
        </li>
        <li class="">
            <a href="./gift.html" class="">我的關注</a>  
        </li>
        <li class="bd-none ">
            <a href="" class="inhere">優惠專區</a>  
        </li>
        

    </ul>
 </div>
 
</div>
<!-- 分頁 -->
<div class="top-pages">
    <div class="top-page d-flex w-100 justify-content-center">
    <div class="page2 d-flex backtopet mx-2" style="margin-top: 1px; background-color:#7C8C38; border-radius: 20px; " >
                <a href="member-pet.php" class="d-flex ">
                <img class="back mx-2 " src="./img/self/n/pet/arrow_back.svg" alt=""> 
                <h5 class="bye" style="color: #fff;"> 保留此次新增</h5>
                </a>
            </div>
        <button onclick="clickEvent()" class="plus-top px-0 mx-2"  >
            <div class=" page2 d-flex "style="  border-radius: 20px; border: 1px solid #7C8C38; width: 200px;"  >
                <img class="mx-2" src="./img/self/n/pet/edit-plus.svg" alt=""> 
                <h5 style="color:#7C8C38;"> 新增更多毛孩</h5>
            </div>
        </button>
        
    </div>
    
</div>



<!------ content ------>

<div class="album3 py-2 ">
    <div class="container  d-flex" style="overflow: hidden; overflow-x: auto; ">
<div id="source" class="d-flex">
  
    <div id="name" class="col mx-5 mb-4 ">
          <div class="card ">
            <div class="up-img">
                <div class="imgbox">
                    <img src="./uploads/photo.png" alt="" class="photo" >
                </div>
                <div class="plusbox d-flex flex-column align-items-center">
                
    <!-- </div> -->
                </div>
                <form class="form needs-validation" name="form1" method="post" onsubmit="checkForm1(); return false;">
                <div class="input-group mb-3">
                
                
                <!-- <label for="fileinp">
                <input type="file" id="file_path" name="file_path" onchange="theimage();">
                <input type="text" name="img" id="img" disabled="disabled">
                </label> -->
            
            </div>

            <div class="card-body1">
                

                    <div class="diypart">
                        <img src="./img/self/n/pet/d-color-1.svg" alt="" class="card-plus">
                        <div class="petname-box pet-box  mb-3  d-flex ">
                            <label for="name" class="form-label d-flex align-items-center">毛孩姓名</label>
                            <input type="name"  class="form-control" id="name" name="name" placeholder="李菜菜"  required>
  
                        </div>
                        
                        <div class="petname-box pet-box pet-box3 mb-3  d-flex ">
                            <label for="type" class="form-label d-flex align-items-center">種類</label>
                            <input type="type"  class="form-control" id="type" name="type" placeholder="狗狗"  required>
                        </div>
                        <div class="petname-box pet-box pet-box4  mb-3  d-flex ">
                            <label for="gender" class="form-label d-flex align-items-center">性別</label>
                            <input type="gender"  class="form-control" id="gender" name="gender" placeholder="女生"  required>
                        </div>
                        <div class="petname-box pet-box pet-box2  mb-3  d-flex ">
                            <label for="age" class="form-label d-flex align-items-center">年齡</label>
                            <input type="age" class="form-control" id="age" name="age" placeholder="成年"  required>
                        </div>
                        <!-- <div class="petname-box pet-box  mb-3  d-flex ">
                            <label for="img" class="form-label d-flex align-items-center">毛孩姓名</label>
                            <input type="file"  class="form-control" id="img" name="img" placeholder="李菜菜"  required> -->
  
                        </div>
                        
                    </div>

                    <div class="d-flex justify-content-end align-items-center mt-3">
                        <div class="btn-group2">
                          <div class="btn-box   ">
                            <button type="submit" class="btn btn-primary">儲存</button>
                        </div>
                        </div>
                        
                      </div>
                </form>
                <div id="msgContainer">
            <!--
                <div class="alert alert-danger" role="alert">
                     新增成功
                </div>
                -->
            </div>
              
            </div>
          </div>
        </div>
    </div>
    <div id="target" class="d-flex">
    </div>
</div>


        
        

       
</div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js" integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM=" crossorigin="anonymous"></script>
<script>
function theimage(){
 var filename = document.getElementById("imgfile-id").files[0].name; 
 document.getElementById('img').value = filename;
//  alert(filename);
}
    async function clickEvent() {
      var extendObject = $('#source').children().clone(true);
      extendObject.find('div[id="name"]').remove();
      await howardSleep(1000);
      $('#target').append(extendObject);
    }
    
    function howardSleep(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

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
    if (isPass) {
        // 送出表單資料

        $.post(
            'member-pet-api.php',
            $(document.form1).serialize(),
            function(data) {
                console.log(data);
                if(data.success){
                    genAlert('修改完成', 'success');
                    // location.href = './member-pet.php';
                } else {
                    genAlert(data.error);
                }


            }, 'json');
    }
}
    
        </script>

<?php include __DIR__. '/parts/html-foot.php'; ?>


