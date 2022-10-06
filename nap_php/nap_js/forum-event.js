// 關閉光箱
$('.close_lightBox').click(function(){
    $('.lightBox_comtCard').hide();
    $('.lightBox_comtCard_mask').css({
        'pointer-events': 'none',
        'opacity':'0',
    })
    document.body.style.overflow='visible';
});





// -------------貼文卡片光相

// 貼文卡片展開後內部留言 以迴圈新增數量
// function postLightBox_messageNum(){
//     let messageHtml = document.getElementsByClassName('messageCard')

//     for (i=0; i<9; i++){
//         $('.lightBox_comtCard .comtSection .message_pack').append($(messageHtml).prop('outerHTML'))
//     }
// }
// postLightBox_messageNum();


// 打開留言卡片光箱
$('.comtCard_wrap').on('click','.comtCard', (function(e){
    $(this).find('.lightBox_comtCard').show();
    document.body.style.overflow='hidden'

    // 打開光箱mask
    $('.lightBox_comtCard_mask').css({
        'pointer-events': 'auto',
        'opacity':'1',
    })
}))
$('.lightBox_comtCard_mask').click(function(){
    $(this).css({
        'pointer-events': 'none',
        'opacity':'0',
    })
    document.body.style.overflow='visible'
    $('.lightBox_comtCard').hide()
})


// 右下發文提示

$(window).on('wheel', function(event){
    if(event.originalEvent.deltaY < 0){
      $('.postBtn_mb').css({
        'opacity': '1',
        'pointer-events':'auto'
    })
    }
    else {
        $('.postBtn_mb').css({
            'opacity': '0',
            'pointer-events':'none'
        })
 
    }
});



// ------lightBox_post 發文光箱

// 開啟光箱 

$('.postBtn_mb').click(function(){
    $('.lightBox_post').show()
    document.body.style.overflow='hidden'
})
$('.postBtn_pc').click(function(){
    $('.lightBox_post').show()
    $('.lightBox_post_mask').css({
        'opacity':'1',
        'pointer-events':'auto',
    })
    document.body.style.overflow='hidden'
})
// 關閉光箱
$('.lightBox_post_mask').click(function(){
    $(this).css({
        'opacity':'0',
        'pointer-events':'none',
    })
    $('.lightBox_post').hide()
    document.body.style.overflow='visible'
    $('#form_postInsert')[0].reset()
})



// 寵物類別選擇器
$('.lightBox_post .iconWrap').click(function(){
    $('.lightBox_post .iconWrap').find('#activated').hide();
    $('.lightBox_post .iconWrap').find('span').css('color', 'var(--black_500)');

    $(this).find('#activated').show();
    $(this).find('span').css('color', 'var(--primaryColor_dark)');
})
// 看板類別選擇器
$('.lightBox_post .boardSelec .selec').click(function(){
    $('.lightBox_post .boardSelec .selec span').css('color', 'var(--black_500)')
    $(this).find('span').css('color', 'var(--primaryColor_dark)');
    

    // 判斷是否已經點選活動討論區
    const eventBtn = $('.lightBox_post .boardSelec #event span')
    if(eventBtn.css('color') == 'rgb(124, 140, 56)'){
        $('.lightBox_post .eventSelec .comtLabel').css('background-color', '#F8EEE8');
        eventSelecClickable();
        // 判斷成功後先觸發下方function (使可點擊)
    }
    else{
        $('.lightBox_post .eventSelec .comtLabel').css('background-color', '#eeeeee');
        $('.lightBox_post .eventSelec .comtLabel span').css('color', '#bbbbbb')
        $('.lightBox_post .eventSelec .comtLabel').css('pointer-events', 'none')
    }
})

// 活動類別選擇器
function eventSelecClickable(){

        // 使button可點擊
        $('.lightBox_post .eventSelec .comtLabel').css('pointer-events', 'auto')
    
        // 背景顏色&文字顏色
    $('.lightBox_post .eventSelec .comtLabel').click(function(){
        $('.lightBox_post .eventSelec .comtLabel').css('background-color', '#F8EEE8');
        $('.lightBox_post .eventSelec .comtLabel span').css('color', '#bbbbbb')
    
        $(this).css('background-color', 'var(--primaryColor_tint)')
        $(this).find('span').css('color', 'var(--primaryColor_dark)')
    })
}






  












