//把錢的逗號移除變成字串
function dollarStr2Num(s) {
	return +s.split(',').join('');
}

var amount = 0;

CheckAmount();
// const evt_id =  $_SESSION['event-cart']['sid'];
// console.log(evt_id);

const tpl_func = ({
	n,
	// evt_id,
}) => {
	return `
	<div class="enroll-content-form">
		<div class="delete-btn">
			<a class="delete" href="javascript:" type="button">
				<img src="./img/component/icon/xmark.svg" alt="">
			</a>
		</div>
		<div class="count-num"></div>
		<div class="enroll-other">
			
			<div class="mb-3">
				<input type="hidden" class="form-control" id="event_sid_${n}" name="event_sid[]"  value="test----" readonly>

				<label for="name_${n}" class="form-label">姓名</label>
				<input type="text" class="form-control" id="name" name="name[]" required>
			</div>
			<div class="mb-3">
				<label for="mobile_${n}" class="form-label">手機</label>
				<input type="text" class="form-control" id="mobile" name="mobile[]" maxlength="10" required>
			</div>
			<div class="mb-3">
				<label for="birthdate_${n}" class="form-label">生日</label>
				<input type="date" class="form-control" id="birthdate" name="birthdate[]" required>
			</div>
			<div class="mb-3">
				<label for="id-num_${n}" class="form-label">身分證字號</label>
				<input type="text" class="form-control" id="id-num" name="id-num[]" maxlength="10" required>
			</div>
			<div class="mb-3">
				<label for="id-num" class="form-label">飲食習慣</label>
				<fieldset>
					<div class="mb-3">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="inlineRadio1" name="eating_habit[${n}]" value="葷">
							<label class="form-check-label" for="inlineRadio1_${n}">葷</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="inlineRadio2" name="eating_habit[${n}]" value="全素">
							<label class="form-check-label" for="inlineRadio2_${n}">全素</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="inlineRadio3" name="eating_habit[${n}]" value="奶蛋素">
							<label class="form-check-label" for="inlineRadio3_${n}">奶蛋素</label>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
	`;
};

$(document).ready(function () {
	$(document).on('click', '.add-member-btn', function () {
		const myAmount = getEnrollContentFormNum();
		console.log(myAmount);
		if (myAmount < 4) {
			$('.enroll-content-null').hide();
			$('#enroll-area').prepend(tpl_func(myAmount));
			amount++;
		}

		// 呼叫判斷數量function
		CheckAmount();
		var eventPrice = $('.per span').text();
		var enrollNum = amount;
		var total = eventPrice * enrollNum;
		$('.total-price').html(dollarCommas(total));
		$('.enroll-num').html(amount);
	});

	$(document).on('click', '.delete-btn', function () {
		$(this).closest('.enroll-content-form').remove();
		amount--;
		if (amount < 1) {
			$('.enroll-content-null').show();
		}

		// 呼叫判斷數量function
		CheckAmount();

		var eventPrice = $('.per span').text();
		var enrollNum = amount;
		var total = eventPrice * enrollNum;

		// 新的值取代舊得值
		$('.enroll-num').html(function (index, oldContent) {
			$('.enroll-num').html(amount);
		});
		$('.total-price').html(function (index, oldContent) {
			$('.total-price').html(dollarCommas(total));
		});
	});

});
// 判斷amount數量，去顯示disable狀態
function CheckAmount() {
	if (amount > 3) {
		$('.add-member-btn').addClass('disabled');
	} else {
		$('.add-member-btn').removeClass('disabled');
	}
	if (amount < 1) {
		$('.enroll-card-btn').addClass('disabled');
	} else {
		$('.enroll-card-btn').removeClass('disabled');
	}
}

function getEnrollContentFormNum() {
	return $('.enroll-content-form').length;
}


