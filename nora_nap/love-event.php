<?php
require __DIR__ . '/parts/connect_db.php';


// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";
$sql = "SELECT * FROM `likes` Inner join event_detail on event_detail.sid = likes.item_sid WHERE `member_sid`= 1 AND `like_type` = 2";


$rows = $pdo->query($sql)->fetchAll();

// $genderArray=['男生','女生'];

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
    <link rel="stylesheet" href="./nap_css/love3.css">
    
</head>
<?php include __DIR__. '/parts/navbar.php'; ?>



 <!------ menber-nav ------>
 <div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
     
         
     <div class="titlebox "><h2>會員中心</h2></div>
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
        <a href="./love-pet.html" >
            <div class="page  " >
                
                <h5>園區孩子</h5>
            </div>
        </a>
        <a href=".">
            <div class="page atpage" >
            <img class="decorate-big" src="./img/self/n/member/triangle.svg" alt="">
                <img class="decorate-sm" src="./img/self/n/member/triangle-s.svg" alt="">
                <h5>活動</h5>
            </div>
        </a>
        <a href="./gift-used.html">
            <div class="page " >
                <h5>文章</h5>
            </div>
        </a>
        
    </div>
    
</div>

 <!------ content ------>

 <!-- <div class="container ">
    <?php foreach($rows as $r): ?>
    <div class="love-card love-card-pet d-flex flex-column flex-sm-row align-items-center mb-5">
    <a href="javascript: removeItem(<?= $r['likes_sid'] ?>)"
                     data-onclick="event.currentTarget.closest('tr').remove()">
                     <img class="love-close" src="./img/self/n/love/close.svg" alt="">
    </a>
        
        <div class="pic">
            <img class="pic-size" src="./img/pet/<?= $r['pet_id'] ?>.jpg" alt="">
            
        </div>
        <div class="card-info card-info-pet">
            <h4><?= $r['name'] ?> <span><?= $genderArray[$r['gender']] ?></span> </h4>
            <h5>個性： <span>活潑外向</span> </h5>
            <h5>年齡： <span><?= $r['age'] ?>歲</span> </h5>
            
        </div>
    </div>
    <?php endforeach ?>
    
 </div> -->
 <div class="container ">
 <?php foreach($rows as $r): ?>
    <div class="love-card d-flex flex-column flex-sm-row align-items-center mb-5">
    <a href="javascript: removeItem(<?= $r['likes_sid'] ?>)"
                     data-onclick="event.currentTarget.closest('tr').remove()">
                     <img class="love-close" src="./img/self/n/love/close.svg" alt="">
    </a>
        <div class="pic">
            <img src="./img/events/<?= $r['event_img'] ?>.jpg" alt="">
            <div class="time">
                <h5><?= $r['event_date'] ?></h5>
            </div>
        </div>
        <div class="card-info">
            <h4><?= $r['event_name'] ?></h4>
            <div class="summarybox ">
                <p><?= $r['event_outline'] ?></p>
            </div>
            <div class="btn-box d-flex flex-column  ">        
                <button type="button" class="btn btn-primary" onclick="location.href='#'"><p>立即報名</p> </button>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>



<!------ content ------>


<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script>
    function removeItem(likes_sid){
        if(confirm(`是否要刪除編號為 ${likes_sid} 的資料?`)){
            location.href = `./nap_api/eventlove-del.php?sid=${likes_sid}`;
        }
    }

</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>


