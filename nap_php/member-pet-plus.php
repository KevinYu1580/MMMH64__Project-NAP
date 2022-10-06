<?php
require __DIR__ . '/parts/connect_db.php';

if(empty($_SESSION['user'])){
    header('Location: login.php');
    exit;
}


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

    
</head>

<?php include __DIR__. '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav.css?version=&lt;?php echo time(); ?&gt;">


<link rel="stylesheet" href="./nap_css/pet.css?version=&lt;?php echo time(); ?&gt;">



<!------ menber-nav ------>
<div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
     <div class="titlebox  "><h2>會員中心</h2></div>
     <div class="line"></div>
 
 <div class="partname-mb w-100">
    <div class="titlemb d-flex justify-content-center align-items-center"><h2>會員中心</h2></div>
</div>
 <div class="container1 d-flex justify-content-center mt-4">
    <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
        <li class="bd">
            <a href="./info-info.php" class="" >基本資料</a>  
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
            <a href="./gift.php" class="">優惠專區</a>  
        </li>
        

    </ul>
 </div>
 
</div>


 <!------ menber-nav ------>
<!-- 分頁 -->
<div class="top-pages">
    <div class="top-page d-flex w-100 justify-content-center">
    <div class="page2 d-flex backtopet mx-2" style="margin-top: 1px; background-color:#7C8C38; border-radius: 20px; " >
                <a href="member-pet.php" class="d-flex ">
                <img class="back mx-2 " src="./img/self/n/pet/arrow_back.svg" alt=""> 
                <h5 class="bye" style="color: #fff;">返回上一頁</h5>
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
                        
                    </div>

                    <div class="d-flex justify-content-end align-items-center mt-3">
                        <div class="btn-group2">
                          <div class="btn-box   ">
                            <button type="submit" class="btn">儲存</button>
                        </div>
                        </div>
                        
                      </div>
                </form>
                
              
            </div>
          </div>
        </div>
    </div>
    <div id="target" class="d-flex">
    </div>
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
            'member-pet-api.php',
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
    
        </script>

<?php include __DIR__. '/parts/html-foot.php'; ?>


