//把錢的逗號移除變成字串
function dollarStr2Num(s) {
	return +s.split(',').join('');
}

// ---------------------選擇Check-in的日期---------------------
$('#datepicker-in').datepicker(); // 日曆初始化

$('#datepicker-in').change(function () {
	// console.log('now date:', $(this).val());
	changeShowDate(new Date($(this).val()));
});

function changeShowDate(today) {
	// const today = new Date();
	const yearOfToday = today.getFullYear();
	const monthOfToday = today.getMonth();
	const dateOfToday = today.getDate();
	console.log('today', today);

	const monthOfShortArray = [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'May',
		'Jun',
		'Jul',
		'Aug',
		'Sep',
		'Oct',
		'Nov',
		'Dec',
	];

	const myDate = `${monthOfShortArray[monthOfToday]}/${yearOfToday}`;
	const numberDate = `${yearOfToday}/${monthOfToday + 1}/${dateOfToday}`;

	$('.choose-textbox').eq(0).find('h6').text(dateOfToday);
	$('.choose-textbox').eq(0).find('p').eq(1).text(myDate);
	$('.date-num span').eq(0).text(`${numberDate}`);
}

changeShowDate(new Date());

// ---------------------選擇Check-out的日期---------------------
$('#datepicker-out').datepicker(); // 日曆初始化

$('#datepicker-out').change(function () {
	console.log('選到的日期:', $(this).val());
	changeShowDateTomorrow(new Date($(this).val()));
});

function changeShowDateTomorrow(tomorrow) {
	tomorrow.setDate(tomorrow.getDate());

	if (
		Number($('.choose-textbox').eq(0).find('h6').text()) ===
		tomorrow.getDate()
	) {
		tomorrow.setDate(tomorrow.getDate() + 1);
	}

	const yearOfTomorrow = tomorrow.getFullYear();
	const monthOfTomorrow = tomorrow.getMonth();
	const dateOfTomorrow = tomorrow.getDate();
	console.log('明天的日期:', tomorrow);

	const monthOfShortArrayTomorrow = [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'May',
		'Jun',
		'Jul',
		'Aug',
		'Sep',
		'Oct',
		'Nov',
		'Dec',
	];

	const myTomorrow = `${monthOfShortArrayTomorrow[monthOfTomorrow]}/${yearOfTomorrow}`;
	const numberDateTomorrow = `${yearOfTomorrow}/${
		monthOfTomorrow + 1
	}/${dateOfTomorrow}`;

	$('.choose-textbox').eq(1).find('h6').text(dateOfTomorrow);
	$('.choose-textbox').eq(1).find('p').eq(1).text(myTomorrow);
	$('.date-num span').eq(1).text(`${numberDateTomorrow}`);

	const day1 = new Date($('.date-num span').eq(0).text());
	const day2 = new Date($('.date-num span').eq(1).text());

	const difference = Math.abs(day2 - day1);
	days = difference / (1000 * 3600 * 24);
	$('.date-num span').eq(3).text(days); //計算共幾晚
}

changeShowDateTomorrow(new Date());

// ---------------------搜尋bar顯示間數選項---------------------
$('.selectRoom').click(function () {
	$('.customSelect-box').toggle();
});

// ---------------------選擇間數---------------------
$('li.select-li').click(function () {
	let pickone = $('li.select-li:nth-of-type(1)').html();
	let picktow = $('li.select-li:nth-of-type(2)').html();
	let pickthree = $('li.select-li:nth-of-type(3)').html();
	let pickfour = $('li.select-li:nth-of-type(4)').html();
	let pickfive = $('li.select-li:nth-of-type(5)').html();
	let picksix = $('li.select-li:nth-of-type(6)').html();

	// 選1間
	if ($(this).html() == pickone) {
		$('.selectRoom h6').html(pickone);
		// $('.room-num span').html(pickone);
	}
	// 選2間
	if ($(this).html() == picktow) {
		$('.selectRoom h6').html(picktow);
		// $('.room-num span').html(picktow);
	}
	// 選3間
	if ($(this).html() == pickthree) {
		$('.selectRoom h6').html(pickthree);
		// $('.room-num span').html(pickthree);
	}
	// 選4間
	if ($(this).html() == pickfour) {
		$('.selectRoom h6').html(pickfour);
		// $('.room-num span').html(pickfour);
	}
	// 選5間
	if ($(this).html() == pickfive) {
		$('.selectRoom h6').html(pickfive);
		// $('.room-num span').html(pickfive);
	}
	// 選6間
	if ($(this).html() == picksix) {
		$('.selectRoom h6').html(picksix);
		// $('.room-num span').html(picksix);
	}
});

// ---------------------按下查詢空房，出現訂房間數選項---------------------
$('.booking-box').click(function () {
	if ($('.selectRoom h6').html() <= 0) {
		// alert('尚未選擇間數');
		oopsAlert();
		$('.room-null').html();
	}

	if ($('.selectRoom h6').html() > 0) {
		$('.room-null').hide();
		$('.room-card-group').show();
	}

	// console.log('hi',rooms);
	const day1 = new Date($('.date-num span').eq(0).text());
	const day2 = new Date($('.date-num span').eq(1).text());

	const difference = Math.abs(day2 - day1);
	const days = difference / (1000 * 3600 * 24);

	for (let i of rooms) {
		rooms_dict[i.sid].day1 = day1;
		rooms_dict[i.sid].day2 = day2;
		rooms_dict[i.sid].days = days;
		rooms_dict[i.sid].num = 0;
	}
});

// ---------------------訂房明細點擊叉叉---------------------
$('.cancle-btn').click(function (e) {
	// 單人房明細刪除
	if ($(this).hasClass('single-cancle')) {
		$('#single-detail').hide();
		$('.singleNum').val(0);
		$('#single-minus svg circle').css('fill', 'var(--black_500)');
		$('.single-price span').html(0);
		$('.total-num span').html(
			+$('.double-price span').html() + +$('.quadra-price span').html()
		);
		$('.deposit-num span').html($('.total-num span').html() / 2);
		$('.rest-num span').html($('.total-num span').html() / 2);
		$('.room-num span').text(
			+$('input.singleNum').val() +
				+$('input.doubleNum').val() +
				+$('input.quadraNum').val()
		);
	}
	// 雙人房明細刪除
	if ($(this).hasClass('double-cancle')) {
		$('#double-detail').hide();
		$('.doubleNum').val(0);
		$('#double-minus svg circle').css('fill', 'var(--black_500)');
		$('.double-price span').html(0);
		$('.total-num span').html(
			+$('.single-price span').html() + +$('.quadra-price span').html()
		);
		$('.deposit-num span').html($('.total-num span').html() / 2);
		$('.rest-num span').html($('.total-num span').html() / 2);
		$('.room-num span').text(
			+$('input.singleNum').val() +
				+$('input.doubleNum').val() +
				+$('input.quadraNum').val()
		);
	}
	// 四人房明細刪除
	if ($(this).hasClass('quadra-cancle')) {
		$('#quadra-detail').hide();
		$('.quadraNum').val(0);
		$('#quadra-minus svg circle').css('fill', 'var(--black_500)');
		$('.quadra-price span').html(0);
		$('.total-num span').html(
			+$('.single-price span').html() + +$('.double-price span').html()
		);
		$('.deposit-num span').html($('.total-num span').html() / 2);
		$('.rest-num span').html($('.total-num span').html() / 2);
		$('.room-num span').text(
			+$('input.singleNum').val() +
				+$('input.doubleNum').val() +
				+$('input.quadraNum').val()
		);
	}
	handleRoomNum(e);
});

// ---------------------(↓↓↓↓單人房↓↓↓↓)--------------------------------

// 單人房-《增加》
$('#single-plus').click(function (e) {
	// 增加單人房間數
	var plusNum = $('.singleNum').val();
	$('.singleNum').val(++plusNum);

	console.log('single val', $('.singleNum').val());

	// 選擇的大於上面間數跳出提示
	const roomNum01 = +$('.singleNum').val();
	const roomNum02 = +$('.doubleNum').val();
	const roomNum03 = +$('.quadraNum').val();
	if (roomNum01 + roomNum02 + roomNum03 > +$('.selectRoom h6').html()) {
		$('#single-plus svg circle').css('fill', 'var(--black_500)');
		$('#double-plus svg circle').css('fill', 'var(--black_500)');
		$('#quadra-plus svg circle').css('fill', 'var(--black_500)');
		$('.singleNum').val(--plusNum);
		oopsAlertlimit();
		// alert('超過選擇間數')
		$('.single-room-num span').html(plusNum);
		return;
	}

	// 計算增加明細的間數&房型總價錢
	var nights = +$('.date-num span').eq(3).text();
	var singlePrice = dollarStr2Num($('.singleprice span').html());
	// var singleTotal = dollarCommas(singlePrice * plusNum * nights);
	var singleTotal = dollarCommas(singlePrice * plusNum * nights);
	$('.per-room-night span').html(nights);
	$('.single-room-num span').html(plusNum);
	$('.single-price span').html(`${singleTotal}`);
	$('.room-num span').text(
		+$('input.singleNum').val() +
			+$('input.doubleNum').val() +
			+$('input.quadraNum').val()
	);

	// 計算增加的全部總價
	$('.total-num span').html(dollarCommas(
		dollarStr2Num($('.single-price span').html()) +
			dollarStr2Num($('.double-price span').html()) +
			dollarStr2Num($('.quadra-price span').html()))
	);

	// 計算增加的訂金
	$('.deposit-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 計算增加的尾款
	$('.rest-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 單人房間數>0，減號變綠色
	if ($('.singleNum').val() > 0) {
		$('#single-minus svg circle').css('fill', 'var(--primaryColor_dark)');
	}

	// 增加單人房明細
	if ($('#single-detail').css('display') == 'none') {
		$('#single-detail').show();
	}

	handleRoomNum(e);
});

// 單人房-《減少》
$('#single-minus').click(function (e) {
	// 減少單人房間數
	var minusNum = $('.singleNum').val();
	if ($('.singleNum').val() > 0) {
		$('.singleNum').val(--minusNum);
		console.log('singleminus:', $('.singleNum').val());
	}
	if ($('.singleNum').val() == 0) {
		$('#single-detail').hide();
	}

	// 選擇的小於上面間數加號會變灰色
	const roomNum01 = +$('.singleNum').val();
	const roomNum02 = +$('.doubleNum').val();
	const roomNum03 = +$('.quadraNum').val();
	if (roomNum01 + roomNum02 + roomNum03 < +$('.selectRoom h6').html()) {
		$('#single-plus svg circle').css('fill', 'var(--primaryColor_dark)');
		$('#double-plus svg circle').css('fill', 'var(--primaryColor_dark)');
		$('#quadra-plus svg circle').css('fill', 'var(--primaryColor_dark)');
	}

	// 計算減少明細的間數&房型總價錢
	var nights = +$('.date-num span').eq(3).text();
	var singlePrice = dollarStr2Num($('.singleprice span').html());
	var singleTotal = dollarCommas(singlePrice * minusNum * nights);
	$('.per-room-night span').html(nights);
	$('.single-room-num span').html(minusNum);
	$('.single-price span').html(`${singleTotal}`);
	$('.room-num span').text(
		+$('input.singleNum').val() +
			+$('input.doubleNum').val() +
			+$('input.quadraNum').val()
	);

	// 計算減少的全部總價
	$('.total-num span').html(dollarCommas(
		dollarStr2Num($('.single-price span').html()) +
			dollarStr2Num($('.double-price span').html()) +
			dollarStr2Num($('.quadra-price span').html()))
	);

	// 計算減少的訂金
	$('.deposit-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 計算減少的尾款
	$('.rest-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 單人房間數=0，減號變灰色
	if ($('.singleNum').val() == 0) {
		console.log('changeColor');
		$('#single-minus svg circle').css('fill', 'var(--black_500)');
	}
	handleRoomNum(e);
});

// ---------------------(↓↓↓↓雙人房↓↓↓↓)--------------------------------


// 雙人房-《增加》
$('#double-plus').click(function (e) {
	// 增加雙人房間數
	var plusNum = $('.doubleNum').val();
	$('.doubleNum').val(++plusNum);

	// 選擇的大於上面間數跳出提示
	const roomNum01 = +$('.singleNum').val();
	const roomNum02 = +$('.doubleNum').val();
	const roomNum03 = +$('.quadraNum').val();
	if (roomNum01 + roomNum02 + roomNum03 > +$('.selectRoom h6').html()) {
		$('#single-plus svg circle').css('fill', 'var(--black_500)');
		$('#double-plus svg circle').css('fill', 'var(--black_500)');
		$('#quadra-plus svg circle').css('fill', 'var(--black_500)');
		$('.doubleNum').val(--plusNum);
		// alert('超過選擇間數')
		oopsAlertlimit();
		$('.double-room-num span').html(plusNum);
		return;
	}

	// 計算增加明細的間數&房型總價錢
	var nights = +$('.date-num span').eq(3).text();
	var doublePrice = dollarStr2Num($('.doubleprice span').html());
	var doubleTotal = dollarCommas(doublePrice * plusNum * nights);
	$('.per-room-night span').html(nights);
	$('.double-room-num span').html(plusNum);
	$('.double-price span').html(`${doubleTotal}`);
	$('.room-num span').text(
		+$('input.singleNum').val() +
			+$('input.doubleNum').val() +
			+$('input.quadraNum').val()
	);

	// 計算增加的全部總價
    $('.total-num span').html(dollarCommas(
		dollarStr2Num($('.single-price span').html()) +
			dollarStr2Num($('.double-price span').html()) +
			dollarStr2Num($('.quadra-price span').html()))
	);

	// 計算增加的訂金
	$('.deposit-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 計算增加的尾款
	$('.rest-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 雙人房間數>0，減號變綠色
	if ($('.doubleNum').val() > 0) {
		$('#double-minus svg circle').css('fill', 'var(--primaryColor_dark)');
	}
	// 增加雙人房明細
	if ($('#double-detail').css('display') == 'none') {
		$('#double-detail').show();
	}

	handleRoomNum(e);
});

// 雙人房-《減少》
$('#double-minus').click(function (e) {
	// 減少雙人房間數
	var minusNum = $('.doubleNum').val();
	if ($('.doubleNum').val() > 0) {
		$('.doubleNum').val(--minusNum);
		console.log('doubleminus:', $('.doubleNum').val());
	}
	if ($('.doubleNum').val() == 0) {
		$('#double-detail').hide();
	}

	// 選擇的小於上面間數加號會變灰色
	const roomNum01 = +$('.singleNum').val();
	const roomNum02 = +$('.doubleNum').val();
	const roomNum03 = +$('.quadraNum').val();
	if (roomNum01 + roomNum02 + roomNum03 < +$('.selectRoom h6').html()) {
		$('#single-plus svg circle').css('fill', 'var(--primaryColor_dark)');
		$('#double-plus svg circle').css('fill', 'var(--primaryColor_dark)');
		$('#quadra-plus svg circle').css('fill', 'var(--primaryColor_dark)');
	}

	// 計算減少明細的間數&房型總價錢
	var nights = +$('.date-num span').eq(3).text();
	var doublePrice = dollarStr2Num($('.doubleprice span').html());
	var doubleTotal = dollarCommas(doublePrice * minusNum * nights);
	$('.per-room-night span').html(nights);
	$('.double-room-num span').html(minusNum);
	$('.double-price span').html(`${doubleTotal}`);
	$('.room-num span').text(
		+$('input.singleNum').val() +
			+$('input.doubleNum').val() +
			+$('input.quadraNum').val()
	);

	// 計算減少的全部總價
	$('.total-num span').html(dollarCommas(
		dollarStr2Num($('.single-price span').html()) +
			dollarStr2Num($('.double-price span').html()) +
			dollarStr2Num($('.quadra-price span').html()))
	);

	// 計算減少的訂金
	$('.deposit-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 計算減少的尾款
	$('.rest-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 雙人房間數=0，減號變灰色
	if ($('.doubleNum').val() == 0) {
		console.log('changeColor');
		$('#double-minus svg circle').css('fill', 'var(--black_500)');
	}
	handleRoomNum(e);
});

// ---------------------(↓↓↓↓四人房↓↓↓↓↓)--------------------------------

// 四人房-《增加》
$('#quadra-plus').click(function (e) {
	// 增加四人房間數
	var plusNum = $('.quadraNum').val();
	$('.quadraNum').val(++plusNum);

	// 選擇的大於上面間數跳出提示
	const roomNum01 = +$('.singleNum').val();
	const roomNum02 = +$('.doubleNum').val();
	const roomNum03 = +$('.quadraNum').val();
	if (roomNum01 + roomNum02 + roomNum03 > +$('.selectRoom h6').html()) {
		$('#single-plus svg circle').css('fill', 'var(--black_500)');
		$('#double-plus svg circle').css('fill', 'var(--black_500)');
		$('#quadra-plus svg circle').css('fill', 'var(--black_500)');
		$('.quadraNum').val(--plusNum);
		oopsAlertlimit();
		// alert('超過選擇間數')
		$('.quadra-room-num span').html(plusNum);
		return;
	}

	// 計算增加明細的間數&房型總價錢
	var nights = +$('.date-num span').eq(3).text();
	var quadraPrice = dollarStr2Num($('.quadraprice span').html());
	var quadraTotal = dollarCommas(quadraPrice * plusNum * nights);
	$('.per-room-night span').html(nights);
	$('.quadra-room-num span').html(plusNum);
	$('.quadra-price span').html(`${quadraTotal}`);
	$('.room-num span').text(
		+$('input.singleNum').val() +
			+$('input.doubleNum').val() +
			+$('input.quadraNum').val()
	);

	// 計算增加的全部總價
	$('.total-num span').html(dollarCommas(
		dollarStr2Num($('.single-price span').html()) +
			dollarStr2Num($('.double-price span').html()) +
			dollarStr2Num($('.quadra-price span').html()))
	);

	// 計算增加的訂金
	$('.deposit-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 計算增加的尾款
	$('.rest-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 四人房間數>0，減號變綠色
	if ($('.quadraNum').val() > 0) {
		$('#quadra-minus svg circle').css('fill', 'var(--primaryColor_dark)');
	}

	// 增加四人房明細
	if ($('#quadra-detail').css('display') == 'none') {
		$('#quadra-detail').show();
	}
	handleRoomNum(e);
});

// 四人房-《減少》
$('#quadra-minus').click(function (e) {
	// 減少四人房間數
	var minusNum = $('.quadraNum').val();
	if ($('.quadraNum').val() > 0) {
		$('.quadraNum').val(--minusNum);
		console.log('quadraminus:', $('.quadraNum').val());
	}
	if ($('.quadraNum').val() == 0) {
		$('#quadra-detail').hide();
	}

	// 選擇的小於上面間數加號會變灰色
	const roomNum01 = +$('.singleNum').val();
	const roomNum02 = +$('.doubleNum').val();
	const roomNum03 = +$('.quadraNum').val();
	if (roomNum01 + roomNum02 + roomNum03 < +$('.selectRoom h6').html()) {
		$('#single-plus svg circle').css('fill', 'var(--primaryColor_dark)');
		$('#double-plus svg circle').css('fill', 'var(--primaryColor_dark)');
		$('#quadra-plus svg circle').css('fill', 'var(--primaryColor_dark)');
	}

	// 計算減少明細的間數&房型總價錢
	var nights = +$('.date-num span').eq(3).text();
	var quadraPrice =dollarStr2Num($('.quadraprice span').html());
	var quadraTotal = dollarCommas(quadraPrice * minusNum * nights);
	$('.per-room-night span').html(nights);
	$('.quadra-room-num span').html(minusNum);
	$('.quadra-price span').html(`${quadraTotal}`);
	$('.room-num span').text(
		+$('input.singleNum').val() +
			+$('input.doubleNum').val() +
			+$('input.quadraNum').val()
	);

	// 計算減少的全部總價
	$('.total-num span').html(dollarCommas(
		dollarStr2Num($('.single-price span').html()) +
			dollarStr2Num($('.double-price span').html()) +
			dollarStr2Num($('.quadra-price span').html()))
	);

	// 計算減少的訂金
	$('.deposit-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 計算減少的尾款
	$('.rest-num span').html(dollarCommas(dollarStr2Num($('.total-num span').html()) / 2));

	// 四人房間數=0，減號變灰色
	if ($('.quadraNum').val() == 0) {
		console.log('changeColor');
		$('#quadra-minus svg circle').css('fill', 'var(--black_500)');
	}
	handleRoomNum(e);
});
