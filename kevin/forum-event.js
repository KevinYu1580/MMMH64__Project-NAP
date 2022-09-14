

// 貼文卡片 以迴圈新增卡片數量
function runCardLoop (){
    let comtCardHtml =  document.getElementById('comtCard')

    for (i=0; i<9; i++){
        $('.comtCard_wrap').append($(comtCardHtml).prop('outerHTML'))
    }
}
runCardLoop(); 


