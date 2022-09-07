// ----------menu---------
$(".topNav_mobile .menu").click(function () {
  $(".nap_menu ").toggleClass("nap_menu_open");
});

// ----------like_Btn---------
$('.napBtn_likeBtn').click(function(){
  $(this).toggleClass('likeBtn_activated');
  $('.napBtn_likeBtn #white').toggle();
})

// ----------switch---------

// --兩格
const backmask_two = $('.napSwitch_two .backmask');
const switch_two_num1 = $('.napSwitch_two .num1');
const switch_two_num2 = $('.napSwitch_two .num2');

$('.napSwitch_two .num1').click(function(){
  $(backmask_two).css('left', '0%');
  $(switch_two_num1).css('color', 'var(--white)');
  $(switch_two_num2).css('color', 'var(--black_600)');
});

$('.napSwitch_two .num2').click(function(){
  $(backmask_two).css('left', '50%');
  $(switch_two_num1).css('color', 'var(--black_600)');
  $(switch_two_num2).css('color', 'var(--white)');
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


// --------留言區區塊選擇---------

$('.chat_bordSlec_PC .top').click(function(){
  $(this).css('font-weight', 'bold');
  $('.chat_bordSlec_PC .bot').css('font-weight', 'normal')
})
$('.chat_bordSlec_PC .bot').click(function(){
  $(this).css('font-weight', 'bold');
  $('.chat_bordSlec_PC .top').css('font-weight', 'normal')
})

// --------頁數選擇器---------


