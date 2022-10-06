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