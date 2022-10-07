<?php
require __DIR__ . '/parts/connect_db.php';

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$sid = intval($_GET['id']);

$sql = "SELECT * FROM member_pet_card WHERE `member_sid` =$sid ";
$rows = $pdo->query($sql)->fetchAll();

$sql_t = "SELECT * FROM member01 WHERE `id` =$sid";
$rowsa = $pdo->query($sql_t)->fetchAll();


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
        <h2>毛孩分享</h2>
    </div>
    <div class="line"></div>

    <div class="partname-mb w-100">
        <div class="titlemb d-flex justify-content-center align-items-center">
            <h2>毛孩分享</h2>
        </div>
    </div>
    

</div>


<!------ menber-nav ------>
<!-- 分頁 -->
<?php foreach ($rowsa as $n) : ?>
<div class="top-pages">
    <div class="left-share m-auto w-100 pb-3">
        <div class="pic-share d-flex">
        <img src="./img/member/profile-image/<?= $n['avatar'] ?>" alt="" class="avatar m-auto">
        </div>
    </div>
    <div class="right-share d-flex flex-column">
        <h3 class=" m-auto share-name pb-3"><?= $n['name'] ?></h3>
        <h3 class=" m-auto share-text">歡迎來到我的毛孩空間~</h3>
    </div>

</div>
<?php endforeach ?>


<!------ content ------>

<div class="album py-2">
    <div class="container m-auto">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-mb-3 d-flex  ">
            <?php foreach ($rows as $r) : ?>
                <div class="col mx-5 mb-4 ">
                    <div class="card ">
                        <div class="up-img">
                            <div class="imgbox">
                                <img src="./uploads/<?= $r['img'] ?>" alt="" class="photo">
                            </div>
                            <!-- <div class="plusbox d-flex flex-column align-items-center">
                                <img src="./img_n/pet/plus.png" alt="">
                                <p>新增毛孩照片</p>
                            </div> -->

                        </div>
                        <div class="card-body1">
                            <form class="form needs-validation" name="form1" return false;">
                                <div class="diypart">
                                    <img src="./img/self/n/pet/<?= $r['card_style'] ?>.svg" alt="" class=" card-pc1">
                                    <div class="petname-box pet-box  mb-3  d-flex ">
                                        <label for="name" class="form-label d-flex align-items-center">毛孩姓名</label>
                                        <input type="name" disabled="disabled" class="form-control" id="name" name="name" value="<?= $r['name'] ?>" required>
                                    </div>
                                    <div class="petname-box pet-box pet-box3 mb-3  d-flex ">
                                        <label for="name" class="form-label d-flex align-items-center">種類</label>
                                        <input type="name" disabled="disabled" class="form-control" id="name" name="name" value="<?= $r['type'] ?>" required>
                                    </div>
                                    <div class="petname-box pet-box pet-box4  mb-3  d-flex ">
                                        <label for="name" class="form-label d-flex align-items-center">性別</label>
                                        <input type="name" disabled="disabled" class="form-control" id="name" name="name" value="<?= $r['gender'] ?>" required>
                                    </div>
                                    <div class="petname-box pet-box pet-box2  mb-3  d-flex ">
                                        <label for="name" class="form-label d-flex align-items-center">年齡</label>
                                        <input type="name" disabled="disabled" class="form-control" id="name" name="name" value="<?= $r['age'] ?>" required>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-end align-items-center mt-3">
                                    <div class="btn-group">

                                        <a href="member-pet-diy.php?sid=<?= $r['sid'] ?>">
                                            <img src="./img/component/icon/Pencil.svg" class="fixbox" alt="">
                                        </a>
                                        <div class="btn-box1 mx-3">
                                            <a href="javascript: removeItem(<?= $r['sid'] ?>)" data-onclick="event.currentTarget.closest('tr').remove()">
                                                <img src="./img/component/icon/Trash can.svg" class="fixbox" alt="">
                                            </a>
                                        </div>
                                    </div>

                                </div> -->
                            </form>

                        </div>
                    </div>
                </div>
            <?php endforeach ?>




        </div>
    </div>
</div>







</div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js" integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM=" crossorigin="anonymous"></script>
<script>
    function removeItem(sid) {
        Swal.fire({
            title: '是否刪除此毛孩卡片?',
            text: "刪除後將無法復原",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f67557',
            cancelButtonColor: '#bfbd4a',
            confirmButtonText: '刪除卡片!'
        }).then((result) => {
            if (result.isConfirmed) {
                // 點選確認後執行以下功能(範例是post功能)
                location.href = `./nap_api/memberpet-del.php?sid=${sid}`;
                // 以下為執行成功框框(出現1.5s後消失)
                Swal.fire({
                    icon: 'success',
                    title: '已成功刪除',
                    timer: 1500,
                    showConfirmButton: false,
                }).then((result) => {
                    window.location.reload();
                });

            }
        })
        // if (confirm(`是否要刪除編號為 ${sid} 的資料?`)) {
        //     location.href = `./nap_api/memberpet-del.php?sid=${sid}`;
        // }
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
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>