<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'insert'; // 頁面名稱
$title = '新增資料';
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>
                    <form name="form1" onsubmit="checkForm(); return false;" novalidate>
                    <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">email</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        

                        <div class="mb-3">
                            <label for="mobile" class="form-label">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>

                        <div class="mb-3">
                            <label for="birthdate" class="form-label">birthday</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                        </div>

                        <div id="msgContainer">
                            <!--
                            <div class="alert alert-danger" role="alert">
                                A simple danger alert—check it out!
                            </div>
-->
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
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



    function checkForm() {
        // TODO: 檢查欄位資料格式是不是符合

        let isPass = true; // 預設表單的資料是沒問題的
        const name = document.form1.name.value;
        const email = document.form1.email.value;

        if (name.length < 2) {
            genAlert('請填寫正確的姓名!');
            isPass = false;
        }
        if (!email) {
            genAlert('請填寫正確的 email!');
            isPass = false;
        }

        if (isPass) {
            // 送出表單資料

            $.post(
                '50.data-insert-api.php',
                $(document.form1).serialize(),
                function(data) {
                    console.log(data);
                    if(data.success){
                        genAlert('新增完成', 'success');
                    } else {
                        genAlert(data.error);
                    }


                }, 'json');
        }
    }
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>