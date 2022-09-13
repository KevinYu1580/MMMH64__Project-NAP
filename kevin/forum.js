// ------ 留言板selector 文字顏色
$('.selector_wrap .secSelec #num1').click(function(){
    $(this).css('color', 'var(--secondaryColor_default)');
    $(this).next().next().css('color', 'var(--subColor_text)');
})
$('.selector_wrap .secSelec #num2').click(function(){
    $(this).css('color', 'var(--secondaryColor_default)');
    $(this).prev().prev().css('color', 'var(--subColor_text)');
})