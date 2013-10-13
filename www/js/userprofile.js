$('#user-data button').attr('disabled', 'disabled');
$('#user-data').on('keyup', 'input', function(event) {
    if ($("#inputName").val() === initialValues.name && $("#inputEmail1").val() === initialValues.email && $("#inputPhone").val() === initialValues.phone) {
    	$('#user-data button').attr('disabled', 'disabled');
	} else {
		$('#user-data button').removeAttr('disabled');
	}
});

$('#user-data').on( 'submit', function( event ) {
	event.preventDefault();
	var dataString = ( $( this ).serialize() );

	$.ajax({
	   type: "POST",
	   url: siteUrl + "/userprofile/update_user_data",
	   data: dataString,

     error: function(){
        console.log("Ajax error");
     }
    })
    .done(function(data){
        location.reload();
     });

	return false;  //stop the actual form post !important!

});

$('#user-password').on( 'submit', function( event ) {
    event.preventDefault();
    var dataPass = ( $( this ).serialize() );

    $.ajax({
       type: "POST",
       url: siteUrl + "/userprofile/change_user_password",
       data: dataPass,

     beforeSend: function(){
        $('#user-password button').attr('disabled', 'disabled');
     },
       success: function(data){
           $('#user-password button').removeAttr('disabled');
       },
     error: function(){
        console.log("Ajax error");
     }
   })
    .done(function(data){
        location.reload();
     });

    return false;  //stop the actual form post !important!

});