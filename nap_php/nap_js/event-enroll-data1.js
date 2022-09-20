var amount = 0;
CheckAmount();

$(document).ready(function () {
	$(document).on('click', '.add-member-btn', function () {
		if (amount < 4) {
			$('.enroll-content-null').hide();
			$('#enroll-area').prepend(
				'<div class="enroll-content-form">\
                                <div class="delete-btn">\
                                    <a class="delete" href="javascript:" type="button">\
                                        <img src="./img/component/icon/xmark.svg" alt="">\
                                    </a>\
                                </div>\
                                <div class="count-num"></div>\
                                <div class="enroll-other">\
                                    <div class="mb-3 form-check">\
                                        <input type="checkbox" class="form-check-input" name="add-member-data">\
                                        <label class="form-check-label" for="exampleCheck1">加入會員資料（會員為活動參與者）</label>\
                                    </div>\
                                    <div class="mb-3">\
                                        <label for="name" class="form-label">姓名</label>\
                                        <input type="text" class="form-control" id="name" name="name[]" required>\
                                    </div>\
                                    <div class="mb-3">\
                                        <label for="phone" class="form-label">手機</label>\
                                        <input type="text" class="form-control" id="mobile" name="mobile[]" maxlength="10" required>\
                                    </div>\
                                    <div class="mb-3">\
                                        <label for="birthdate" class="form-label">生日</label>\
                                        <input type="date" class="form-control" id="birthdate" name="birthdate[]" required>\
                                    </div>\
                                    <div class="mb-3">\
                                        <label for="id-num" class="form-label">身分證字號</label>\
                                        <input type="text" class="form-control" id="id-num" name="id-num[]" maxlength="10" required>\
                                    </div>\
                                    <div class="mb-3">\
                                        <label for="id-num" class="form-label">飲食習慣</label>\
                                        <fieldset>\
                                            <div class="mb-3">\
                                                <div class="form-check form-check-inline">\
                                                    <input class="form-check-input" type="radio"\
                                                        id="inlineRadio1" name="eating-habit" value="葷">\
                                                    <label class="form-check-label" for="inlineRadio1">葷</label>\
                                                </div>\
                                                <div class="form-check form-check-inline">\
                                                    <input class="form-check-input" type="radio"\
                                                        id="inlineRadio2" name="eating-habit"\
                                                        value="全素">\
                                                    <label class="form-check-label" for="inlineRadio2">全素</label>\
                                                </div>\
                                                <div class="form-check form-check-inline">\
                                                    <input class="form-check-input" type="radio"\
                                                        id="inlineRadio3" name="eating-habit" value="奶蛋素">\
                                                    <label class="form-check-label" for="inlineRadio3">奶蛋素</label>\
                                                </div>\
                                            </div>\
                                        </fieldset>\
                                    </div>\
                                </div>\
                            </div>'
			);
			amount++;
		}

		// 呼叫判斷數量function
		CheckAmount();
		var eventPrice = 2999;
		var enrollNum = amount;
		var total = eventPrice * enrollNum;
		$('.total-price').html(total);
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

		var eventPrice = 2999;
		var enrollNum = amount;
		var total = eventPrice * enrollNum;

		// 新的值取代舊得值
		$('.enroll-num').html(function (index, oldContent) {
			$('.enroll-num').html(amount);
		});
		$('.total-price').html(function (index, oldContent) {
			$('.total-price').html(total);
		});
	});

	$('input:checkbox').on('click', function () {
		// in the handler, 'this' refers to the box clicked on
		var $box = $(this);
		if ($box.is(':checked')) {
			// the name of the box is retrieved using the .attr() method
			// as it is assumed and expected to be immutable
			var group = "input:checkbox[name='" + $box.attr('name') + "']";
			// the checked state of the group/box on the other hand will change
			// and the current value is retrieved using .prop() method
			$(group).prop('checked', false);
			$box.prop('checked', true);
		} else {
			$box.prop('checked', false);
		}
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
