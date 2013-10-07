$('#user-data').on('keyup', 'input', function(event) {
    if ($("#inputName").val() === initialValues.name && $("#inputEmail1").val() === initialValues.email && $("#inputPhone").val() === initialValues.phone) {
    	$('#user-data button').attr('disabled', 'disabled');
	} else {
		$('#user-data button').removeAttr('disabled');
	}
});