

var loadUsers = function(){
	//reset table
	$("#userList").html("<tr><th>Name</th><th>E-Mail</th><th>Phone</th><th>Action</th></tr>");

	$.ajax({
       type: "GET",
       url: siteUrl + "/admin/load_all",
       dataType: "json",
	   beforeSend: function(){
        $("#userList").html('<img class="ajax-loader" src="img/ajax-loader.gif">');
     	}
   })
    .done(function( data ){
        $("#userList .ajax-loader").remove();
        $.each(data, function(d,obj){
        	$("#userList").append('<tr><td>'+obj.name+"</td><td>"+obj.email+"</td><td>"+obj.phone+"</td><td></td>");
        });
    })
    .fail(function(){
    	console.log("Ajax error");
    });
};

loadUsers();

$('#createNewUser').on( 'submit' , function( event ){
  event.preventDefault();
  var userInfos = ( $( this ).serialize() );
	var url = siteUrl+"/admin/create_new_user";
	// Send the data using post
	var posting = $.post( url, userInfos );
	posting.done(function( data ) {
		$( "#result" ).empty().append( data );
	});
  console.log(userInfos);
	loadUsers();
  return false;  //stop the actual form post !important!
});