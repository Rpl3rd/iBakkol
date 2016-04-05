(function(){
	
	$('.ui.dropdown').dropdown();
	$('select').dropdown();
	$('.menu .item').tab();
	$('.ui.form.dt-tamatan').form({
		fields: {
			nisn: ['number', 'minLength[10]', 'maxLength[10]']
		}
	});
	$('.ui.radio.checkbox').checkbox();
	$('.ui.checkbox').checkbox();
	$('input[name="tgl_lahir"]').daterangepicker({
		singleDatePicker: true
	});
	
})(window)