function confirm_del(url) {
	var r = confirm("Bạn có chắc chắn muốn xóa?");
	if (r == true) {
		window.location.href = url;
	}
}
$(document).ready(function () {
	$("#datatable-product").dataTable({
		order: [[0, 'asc']],
		columnDefs: [
		{orderable: true, targets: [0]}
		],
	});
	$('#txtTo3').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4",
		locale: {
			format: 'DD-MM-YYYY'
		}
	}, function (start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
	});

	$('#txtTo4').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4",
		locale: {
			format: 'DD-MM-YYYY'
		}
	}, function (start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
	});

	$('#report_date1').daterangepicker({
		timePicker: true,
		singleDatePicker: true,
		timePicker24Hour: true,
		timePickerIncrement: 30,
		calender_style: "picker_4",
		locale: {
			format: 'DD/MM/YYYY H:mm:ss'
		}
	}, function (start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
	});

	$('#report_date2').daterangepicker({
		timePicker: true,
		singleDatePicker: true,
		timePicker24Hour: true,
		timePickerIncrement: 30,
		calender_style: "picker_4",
		locale: {
			format: 'DD/MM/YYYY H:mm:ss'
		}
	}, function (start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
	});

	$('#reportdatetime').daterangepicker({
		timePicker: true,
            // singleDatePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 30,
            calender_style: "picker_4",
            locale: {
            	format: 'DD/MM/YYYY H:mm:ss'
            }
        }, function (start, end, label) {
        	console.log(start.toISOString(), end.toISOString(), label);
        });

});