(function(){
	
	$('.ui.dropdown').dropdown();
	$('select').dropdown();
	$('.menu .item').tab();
	$('.ui.form.dt-tamatan').form({
		fields: {
			nisn: ['number', 'minLength[10]', 'maxLength[10]']
		}
	});

})(window)