// 關閉光箱
$('.close_lightBox').click(function(){
    $(this).parent().hide()
    document.body.style.overflow='visible'
})


// ---------------貼文卡片 以迴圈新增卡片數量
function runCardLoop (){
    let comtCardHtml =  document.getElementById('comtCard')

    for (i=0; i<19; i++){
        $('.comtCard_wrap').append($(comtCardHtml).prop('outerHTML'))
    }
}
runCardLoop(); 

// --------------卡片手機小menu 彈出效果

$('.pointMenu').click(function(e){
    e.stopPropagation();
    const post_lightBox = $('.lightBox_comtCard')
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


// 打開留言卡片光箱
$('.comtCard_wrap').on('click', '.comtCard' ,function(e){
    $(post_lightBox).show();
    document.body.style.overflow='hidden'
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


// ------lightBox_post 

// 開啟光箱 

$('.postBtn_mb').click(function(){
    $('.lightBox_post').show()
    document.body.style.overflow='hidden'
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
    $('.lightBox_post .boardSelec .selec').css('color', 'var(--black_500)')
    $(this).css('color', 'var(--primaryColor_dark)');

    // 判斷是否已經點選活動討論區
    const eventBtn = $('.lightBox_post .boardSelec #event')
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



// ------發文光箱  
// 上傳圖片功能  預覽&新增div

let picNum = 0
imgInp.onchange = evt => {

    picNum += 1

    const [file] = imgInp.files
    

    if (file) {
        
        $('.lightBox_post .inputArea .imgInsert').append(`<img id="postPic${picNum}" src="" alt="" />`);

        document.getElementById(`postPic${picNum}`).src = URL.createObjectURL(file)
    }
  }
















