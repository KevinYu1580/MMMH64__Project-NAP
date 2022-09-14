// ------ 留言板selector 文字顏色
$('.selector_wrap .secSelec #num1').click(function(){
    $(this).css('color', 'var(--secondaryColor_default)');
    $(this).next().next().css('color', 'var(--subColor_text)');
})
$('.selector_wrap .secSelec #num2').click(function(){
    $(this).css('color', 'var(--secondaryColor_default)');
    $(this).prev().prev().css('color', 'var(--subColor_text)');
})



// 貼文卡片 以迴圈新增卡片數量
function runCardLoop (){
    let comtCardHtml =  document.getElementById('comtCard')

    for (i=0; i<9; i++){
        $('.comtCard_wrap').append($(comtCardHtml).prop('outerHTML'))
    }
}
runCardLoop(); 


