//收藏按鈕
$('.card-like-pc').click(function(){
    // $('.card-like-pc img').removeClass('card-like-pc cover');
    // $(this).addClass('card-like-pc cover').toggle();
    $('.card-like-pc .cover').toggle();
})

// 活動頁面banner | events-banner
$(".events-banner").mousemove(function(e){
    if(e.pageX >=960 ){
        $('.banner-package-pc-box').css('width', 0+'%')
    }
    if(e.pageX <= 960){
        $('.banner-package-pc-box').css('width', 100+'%');
    }
})        

// 選擇器 | filter
$('.special-switch , .events-banner-special-btn').click(function(){
    $('.events-switch-frame').css('borderColor', 'var(--secondaryColor_default)');
        $('.special-switch').css({
            'backgroundColor':'var(--secondaryColor_default)',
            'color':'var(--white)',
        });
        $('.package-switch').css({
            'backgroundColor':'transparent',
            'color':'var(--secondaryColor_default)'
        });
    })
$('.package-switch , .events-banner-package-btn').click(function(){
    $('.events-switch-frame').css('borderColor', 'var(--primaryColor_dark)');
        $('.package-switch').css({
            'backgroundColor':'var(--primaryColor_dark)',
            'color':'var(--white)'
        });
        $('.special-switch').css({
            'backgroundColor':'transparent',
            'color':'var(--primaryColor_dark)'
        })
    })

// 活動卡片 | events-card
// TO DO：當進入瀏覽器時，如果卡片(.events-card-mb)有n張，那卡片盒子(.events-card-row-mb)的寬度是n*90%
        

$('.events-card-row-mb').css('width', `${$('.events-card-mb').outerWidth(true) * $('.events-card-mb').length}px`)