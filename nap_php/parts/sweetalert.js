
// ***** "確認", "取消" 框框

// exp如下
Swal.fire({
    title: '確認刪除貼文?',
    text: "刪除後將無法復原",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#f67557',
    cancelButtonColor: '#bfbd4a',
    confirmButtonText: '刪除貼文!'
}).then((result) => {
    if (result.isConfirmed) {
        // 點選確認後執行以下功能(範例是post功能)
        $.post(
            './nap_api/forum_delete-api.php', {
                post_sid: post_sid
            }
        )
        // 以下為執行成功框框(也可單獨使用,作為操作成功通知)
        Swal.fire({
            icon: 'success',
            title: '已成功刪除',
            showConfirmButton: false,
            timer: 1500
            // 以下為框框消失後執行的功能(可不加)
        }).then((result) => {
            window.location.reload();
        });

    }
})





















