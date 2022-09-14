// ---------------貼文卡片 以迴圈新增卡片數量
function runCardLoop (){
    let comtCardHtml =  document.getElementById('comtCard')

    for (i=0; i<9; i++){
        $('.comtCard_wrap').append($(comtCardHtml).prop('outerHTML'))
    }
}
runCardLoop(); 

// --------------卡片手機小menu 彈出效果

$('.pointMenu').click(function(){
    $(this).next().css({
        'transform': 'none',
    })
    $('.lightBox_mb_mask').show()
})

$('.lightBox_mb_mask').click(function(){
    $(this).hide()
    $('.lightBox_mb').css('transform', 'translateY(102%)')
})



// -------------貼文卡片光相
const post_lightBox = $('.lightBox_comtCard')

// 貼文卡片展開後內部留言 以迴圈新增數量
function postLightBox_messageNum(){
    let messageHtml = document.getElementsByClassName('messageCard')

    for (i=0; i<9; i++){
        $('.lightBox_comtCard .comtSection .message_pack').append($(messageHtml).prop('outerHTML'))
    }
}
postLightBox_messageNum();

// 光相返回(關閉)icon 

$('.close_lightBox_comtCard').click(function(){
    $(post_lightBox).hide()
})
$('.comtCard').click(function(){
    $(post_lightBox).show()
})