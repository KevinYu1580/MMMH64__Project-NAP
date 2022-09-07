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
const backmask = $('.napSwitch_two .backmask');
$('.napSwitch_two .num2').click(function(){
  const num1 = $('.napSwitch_two .num1');
  const num2 = $('.napSwitch_two .num2');

  $(backmask).css('left', '50%');
  $(num1).css('color', 'var(--black_600)')
  $(num2).css('color', 'var(--white)')
})
$('.napSwitch_two .num1').click(function(){
  const num1 = $('.napSwitch_two .num1');
  const num2 = $('.napSwitch_two .num2');

  $(backmask).css('left', '0%');
  $(num1).css('color', 'var(--white)')
  $(num2).css('color', 'var(--black_600)')
})


// --三格




