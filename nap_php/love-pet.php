<?php
require __DIR__ . '/parts/connect_db.php';

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$member_id = $_SESSION['user']['id'];

// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";
$sql = "SELECT * FROM `likes` Inner join pet_card on pet_card.sid = likes.item_sid WHERE `member_sid`= $member_id AND `like_type` = 1";


$rows = $pdo->query($sql)->fetchAll();

$genderArray = ['男生', '女生'];

?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = '會員中心'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


<!-- <link rel="stylesheet" href="./nap_css/component_mobile.css"> -->
<!-- <link rel="stylesheet" href="./nap_css/member-nav.css">
    <link rel="stylesheet" href="./nap_css/love3.css"> -->

</head>

<?php include __DIR__ . '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav.css?version=&lt;?php echo time(); ?&gt;">


<link rel="stylesheet" href="./nap_css/love.css?version=&lt;?php echo time(); ?&gt;">


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
                <a href="./member-pet.php" class="">毛孩資料</a>
            </li>
            <li class="bd bd-none">
                <a href="./list.php" class="#">訂單查詢</a>
            </li>
            <li class=" bd">
                <a href="./post.php" class="">歷史發佈</a>
            </li>
            <li class=" bd">
                <a href="./love-pet.php" class="inhere">我的關注</a>
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
        <a href="./love-pet.php">
            <div class="page atpage ">
                <img class="decorate-big" src="./img/self/n/member/triangle.svg" alt="">
                <img class="decorate-sm" src="./img/self/n/member/triangle-s.svg" alt="">
                <h5>園區孩子</h5>
            </div>
        </a>
        <a href="./love-event.php">
            <div class="page ">

                <h5>活動</h5>
            </div>
        </a>
        <a href="./love-chat.php">
            <div class="page ">
                <h5>文章</h5>
            </div>
        </a>

    </div>

</div>

<!------ content ------>

<div class="container "style="min-height:300px">
    <?php foreach ($rows as $r) : ?>
        <div class="love-card love-card-pet d-flex flex-column flex-sm-row align-items-center mb-5">
            <a id="gowhere" href="javascript: removeItem(<?= $r['likes_sid'] ?>)">
                <img style="cursor: pointer" class="love-close" src="./img/self/n/close.png" alt="">
            </a>
            <a id="number" class="d-none" href="javascript: removeItem(<?= $r['likes_sid'] ?>)"></a>
            <div class="pic">
                <img class="pic-size" src="./img/pet/<?= $r['pet_id'] ?>.jpg" alt="">
            </div>
            <div class="card-info card-info-pet">
                <h4><?= $r['name'] ?> <span><?= $genderArray[$r['gender']] ?></span> </h4>
                <h5 class="who d-none"><?= $r['likes_sid'] ?></h5>
                <h5 class="mt-3 mb-2">個性：<?= $r['personality'] ?></h5>
                <h5 class="mb-2">年齡：<?= $r['age'] ?>歲</h5>

            </div>
        </div>
        <!-- <div class="lightbox-del"  id="exampleModal1">
            <div class="modal-dialog modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header" style="border:none">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <img class="end-close" src="./img/self/n/love/close.svg" alt=""> 
                    </div>
                    
                    <div class="modal-body">確定刪除?</div>
                    <div class="modal-footer" style="border:none ">
                        <p class="white">取消</p>
                        <a id="gowhere" href="javascript: removeItem(<?= $r['likes_sid'] ?>)" >
                            <p >確定</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"></div> -->
    <?php endforeach ?>
</div>



<!-- Modal -->



<!------ content ------>


<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script>
    // $('.end-close').click(function(s){
    // $(this).parents().find('#exampleModal1').css('display','block');
    // $('.lightbox-del').css('display','none');
    // $('.bg').css('display','none');
    // })

    // $('.white').click(function(s){
    // // $(this).parents().find('#exampleModal1').css('display','block');
    // $('.lightbox-del').css('display','none');
    // $('.bg').css('display','none');
    // })

    // function showBox(event) {
    //         const me = event.currentTarget;


    //         // $('.modal-body span').text($(me).parent().find('.card-info .vvv').text());
    //         // $('.modal-body1').text($(me).parent().find('.card-info .who').text());
    //         // $('.lightbox-del a').text($(me).parent().find('.card-info .who').text());
    //         $(' #gowhere').attr('href', $(me).parent().find('#number').attr('href'));
    //         $('.lightbox-del').parents().find('.lightbox-del').css('display','block');
    //         $('.bg').css('display','block');
    //     }


    // function removeItem(likes_sid){
    //         location.href = `./nap_api/petlove-del.php?sid=${likes_sid}`;
    //     }

    function removeItem(likes_sid) {
        if (confirm(`是否要刪除編號為 ${likes_sid} 的資料?`)) {
            location.href = `./nap_api/eventlove-del.php?sid=${likes_sid}`;
        }
    }
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>