<?php
require __DIR__ . '/parts/connect_db.php';

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$member_id = $_SESSION['user']['id'];

// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";
$sql = "SELECT * FROM `chat` Inner join member01 on member01.id = chat.po_sid WHERE `po_sid`= $member_id";


$rows = $pdo->query($sql)->fetchAll();

// $genderArray=['男生','女生'];

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


<link rel="stylesheet" href="./nap_css/love.css?version=&lt;?php echo time(); ?&gt;">
<link rel="stylesheet" href="./nap_css/loveCard_DeleteBtn.css?version=&lt;?php echo time(); ?&gt;">



<!------ menber-nav ------>
<!------ menber-nav ------>
<div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
    <div class="titlebox ">
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
                <a href="./post.php" class="inhere">歷史發佈</a>
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
<!-- <div class="top-pages">
    <div class="top-page d-flex w-100 justify-content-center">
        <a href="./love-pet.html" >
            <div class="page  " >
                
                <h5>園區孩子</h5>
            </div>
        </a>
        <a href=".">
            <div class="page " >
            
                <h5>活動</h5>
            </div>
        </a>
        <a href="./gift-used.html">
            <div class="page atpage" >
            <img class="decorate-big" src="./img/self/n/member/triangle.svg" alt="">
                <img class="decorate-sm" src="./img/self/n/member/triangle-s.svg" alt="">
                <h5>文章</h5>
            </div>
        </a>
        
    </div>
    
</div> -->

<!------ content ------>

<div class="container ">
    <?php foreach ($rows as $r) : ?>

        <div class="love-card d-flex flex-column flex-sm-row align-items-center mb-5" data-post_sid="<?= $r['sid'] ?>">
            <div class="pic">
                <img src="./img/chatchat/event/<?= $r['articlePic_id'] ?>" alt="">

            </div>
            <div class="card-info card-info-chat d-flex flex-column justify-content-center">
                <div class="person d-flex mb-2">
                    <div class="avatar">
                        <img src="./img/member/profile-image/<?= $r['avatar'] ?>" alt="">
                    </div>
                    <p><?= $r['name'] ?></p>
                </div>
                <h4><?= $r['title'] ?></h4>
                <h5 class="my-1 my-sm-2 "><?= $r['date'] ?></h5>
                <div class="summarybox summarybox-chat">
                    <p><?= $r['content'] ?></p>
                </div>
            </div>
            <button class="deletePostBtn">
                <img src="./img/component/icon/Trash can.svg" alt="">
            </button>
        </div>
    <?php endforeach ?>

</div>




<!------ content ------>


<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script>
    function removeItem(likes_sid) {
        if (confirm(`是否要刪除編號為 ${likes_sid} 的資料?`)) {
            location.href = `./nap_api/chatlove-del.php?sid=${likes_sid}`;
        }
    }

    $('.love-card .deletePostBtn').on('click', (e) => {
        let postSid = $(e.target).closest('.love-card').data('post_sid')


        Swal.fire({
            title: '忍心刪除這則貼文?',
            text: "汪喵提醒：刪除後就不能復原囉～",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f67557',
            cancelButtonColor: '#bfbd4a',
            confirmButtonText: '那再考慮一下',
            cancelButtonText: '直接果斷刪除',
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.cancel) {
                // 點選確認後執行以下功能(範例是post功能)
                $.post(
                    './nap_api/forum_delete-api.php', {
                        post_sid: postSid
                    }
                );
                // 以下為執行成功框框
                Swal.fire({
                    icon: 'success',
                    title: '已成功刪除',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    window.location.reload();
                });

            }
        })
    })
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>