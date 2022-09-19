// ----------menu---------
$(".topNav_mobile .menu, .menu_lightBox_pc").click(function () {
  $('.nap_menu, .menu_lightBox_pc').toggleClass("nap_menu_open");
});

// ----------like_Btn---------

// 寵物卡片
$('.napBtn_likeBtn').click(function(event){
  event.stopPropagation()
  $(this).toggleClass('likeBtn_activated');
  $(this).find('#white').toggle();
})


// 留言區
// 因為卡片有三層(cardWrap & 卡片本身(以迴圈產生) & likeBtn), 為防止冒泡事件, 所以交流區卡片 & 貼文光箱內的likeBtn點擊事件方開寫
$('.comtCard_wrap').on('click', '.napBtn_likeBtn_comt' ,function(e){
  e.stopPropagation()
  $(this).find('#napActivate').toggle()
})
$('.napBtn_likeBtn_comt').on('click',function(e){
  e.stopPropagation()
  $(this).find('#napActivate').toggle()
})


// ----------switch---------

// --兩格
const backmask_two = $('.napSwitch_two .backmask');
const switch_two_num1 = $('.napSwitch_two .num1');
const switch_two_num2 = $('.napSwitch_two .num2');


$(switch_two_num1).click(function(){
  console.log('this',$(this));
  $(this).prev().css('left', '0%');
  $(this).css('color', 'var(--white)');
  $(this).next().css('color', 'var(--black_600)');
});

$(switch_two_num2).click(function(){
  $(this).prev().prev().css('left', '50%');
  $(this).prev().css('color', 'var(--black_600)');
  $(this).css('color', 'var(--white)');
});


// --三格
const backmask_three = $('.napSwitch_three .backmask');
const switch_three_num1 = $('.napSwitch_three .num1');
const switch_three_num2 = $('.napSwitch_three .num2');
const switch_three_num3 = $('.napSwitch_three .num3');

$('.napSwitch_three .num1').click(function(){
  $(backmask_three).css('left', '0%');
  $(switch_three_num1).css('color', 'var(--white)');
  $(switch_three_num2).css('color', 'var(--black_600)');
  $(switch_three_num3).css('color', 'var(--black_600)');
});

$('.napSwitch_three .num2').click(function(){
  $(backmask_three).css('left', '33.333333%');
  $(switch_three_num2).css('color', 'var(--white)');
  $(switch_three_num1).css('color', 'var(--black_600)');
  $(switch_three_num3).css('color', 'var(--black_600)');
});

$('.napSwitch_three .num3').click(function(){
  $(backmask_three).css('left', '66.666666%');
  $(switch_three_num3).css('color', 'var(--white)');
  $(switch_three_num1).css('color', 'var(--black_600)');
  $(switch_three_num2).css('color', 'var(--black_600)');
});


// --------頁數選擇器PC---------

$('.page_slec .page_indic').click(function(){
  $('.page_slec .page_indic').css('background-color', 'var(--white)');
  $('.page_slec .napPage').css('color','var(--primaryColor_dark)');


  $(this).css('background-color', 'var(--primaryColor_dark)');
  $(this).find('span').css('color', '#ffffff')
})


