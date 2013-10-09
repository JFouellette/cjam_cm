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

	   success: function(data){
	       console.log('Successful!');
	       console.log(dataString);
	   }

	 });

	return false;  //stop the actual form post !important!

});

/*
 $(function(){
       $("#user-data").submit(function(){
         dataString = $("#user-data").serialize();
 
         $.ajax({
           type: "POST",
           url: siteUrl + "/userprofile/update_user_data",
           data: dataString,
 
           success: function(data){
               console.log('Successful!');
               console.log(dataString);
               console.log(data);
           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

 */