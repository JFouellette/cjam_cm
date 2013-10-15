

var loadUsers = function(){
	//reset table
	$("#userList").html("<tr><th>Name</th><th>E-Mail</th><th>Phone</th><th>Action</th></tr>");

	$.ajax({
       type: "GET",
       url: siteUrl + "/admin/load_all",
       dataType: "json",
	   beforeSend: function(){
        // animation to come
     	}
   })
    .done(function( data ){
        $.each(data, function(d,obj){
        	$("#userList").append('<tr><td>'+obj.name+"</td><td>"+obj.email+"</td><td>"+obj.phone+"</td><td></td>");
        });
    })
    .fail(function(){
    	console.log("Ajax error");
    });
}

loadUsers();