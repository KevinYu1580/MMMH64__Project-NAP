//收藏按鈕
$('.card-like').click(function(){
    $(this).find('.cover').toggle();
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

$('.events-banner').mouseleave(function(a){
    if(a.pageX >=760 || a.pageX <= 1160){
        $('.banner-package-pc-box').css('width', 50+'%')
    }
})

// 選擇器 | filter
$(document).on('click', '.package-switch a, .events-banner-package-btn', function () {
    $('.events-switch-frame').css('borderColor', 'var(--secondaryColor_default)');

    // 篩選按鈕換色
    $('.special-switch').css({
        'backgroundColor':'var(--secondaryColor_default)',
        'color':'var(--white)',
    });
    $('.package-switch').css({
        'backgroundColor':'transparent',
        'color':'var(--secondaryColor_default)'
    });

    // 文字換色
    $('.card-textbox-mb h4, .card-textbox-mb h3, .card-textbox-mb h5').css('color','var(--secondaryColor_default)');

    // 收藏邊框換色
    $('.card-like').css('borderColor','var(--secondaryColor_default)');

    // 查看活動按鈕換色
    $('.card-btn a').css('backgroundColor','var(--secondaryColor_default)');

    // hover時換色
    $('.card-btn a').mouseenter(function(){
        $(this).css('backgroundColor','#d6b07f');
    });
    $('.card-btn a').mouseleave(function(){
        $(this).css('backgroundColor','var(--secondaryColor_default)');
    });

});


// $('.special-switch , .events-banner-special-btn').click(function(){
//     // 框換色
//     $('.events-switch-frame').css('borderColor', 'var(--secondaryColor_default)');

//     // 篩選按鈕換色
//     $('.special-switch').css({
//         'backgroundColor':'var(--secondaryColor_default)',
//         'color':'var(--white)',
//     });
//     $('.package-switch').css({
//         'backgroundColor':'transparent',
//         'color':'var(--secondaryColor_default)'
//     });

//     // 文字換色
//     $('.card-textbox-mb h4, .card-textbox-mb h3, .card-textbox-mb h5').css('color','var(--secondaryColor_default)');

//     // 收藏邊框換色
//     $('.card-like').css('borderColor','var(--secondaryColor_default)');

//     // 查看活動按鈕換色
//     $('.card-btn a').css('backgroundColor','var(--secondaryColor_default)');

//     // hover時換色
//     $('.card-btn a').mouseenter(function(){
//         $(this).css('backgroundColor','#d6b07f');
//     });
//     $('.card-btn a').mouseleave(function(){
//         $(this).css('backgroundColor','var(--secondaryColor_default)');
//     });

// })

$(document).on('click', '.special-switch a, .events-banner-special-btn', function () {
    // 框換色
    $('.events-switch-frame').css('borderColor', 'var(--secondaryColor_default)');

    // 篩選按鈕換色
    $('.special-switch').css({
        'backgroundColor':'var(--secondaryColor_default)',
        'color':'var(--white)',
    });
    $('.package-switch').css({
        'backgroundColor':'transparent',
        'color':'var(--secondaryColor_default)'
    });

    // 文字換色
    $('.card-textbox-mb h4, .card-textbox-mb h3, .card-textbox-mb h5').css('color','var(--secondaryColor_default)');

    // 收藏邊框換色
    $('.card-like').css('borderColor','var(--secondaryColor_default)');

    // 查看活動按鈕換色
    $('.card-btn a').css('backgroundColor','var(--secondaryColor_default)');

    // hover時換色
    $('.card-btn a').mouseenter(function(){
        $(this).css('backgroundColor','#d6b07f');
    });
    $('.card-btn a').mouseleave(function(){
        $(this).css('backgroundColor','var(--secondaryColor_default)');
    });

});

// $('.package-switch , .events-banner-package-btn').click(function(){
//     // 框換色
//     $('.events-switch-frame').css('borderColor', 'var(--primaryColor_dark)');

//     // 篩選按鈕換色
//     $('.package-switch').css({
//         'backgroundColor':'var(--primaryColor_dark)',
//         'color':'var(--white)'
//     });
//     $('.special-switch').css({
//         'backgroundColor':'transparent',
//         'color':'var(--primaryColor_dark)'
//     });

//     // 文字換色
//     $('.card-textbox-mb h4, .card-textbox-mb h3, .card-textbox-mb h5').css('color','var(--primaryColor_dark)');

//     // 收藏邊框換色
//     $('.card-like').css('borderColor','var(--primaryColor_dark)');

//     // 查看活動按鈕換色
//     $('.card-btn a').css('backgroundColor','var(--primaryColor_dark)');

//     // hover時換色
//     $('.card-btn a').mouseenter(function(){
//         $(this).css('backgroundColor','var(--primaryColor_light)');
//     });
//     $('.card-btn a').mouseleave(function(){
//         $(this).css('backgroundColor','var(--primaryColor_dark)');
//     });

// })

// 活動卡片 | events-card
// TO DO：當進入瀏覽器時，如果卡片(.events-card-mb)有n張，那卡片盒子(.events-card-row-mb)的寬度是n*90%
        

$('.events-card-row-mb').css('width', `${$('.events-card-mb').outerWidth(true) * $('.events-card-mb').length}px`)