// 貼文卡片 以迴圈新增卡片數量
function runCardLoop (){
    let comtCardHtml =  document.getElementById('comtCard')

    for (i=0; i<9; i++){
        $('.comtCard_wrap').append($(comtCardHtml).prop('outerHTML'))
    }
}
runCardLoop(); 

// 卡片手機小menu 彈出效果

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
