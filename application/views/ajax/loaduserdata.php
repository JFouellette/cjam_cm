<script>
$('#getdata').click(function(){
 
    $.ajax({
            url: '<?php echo site_url()."/userprofile/loaduserdata" ?>',
            type:'POST',
            dataType: 'json',
            success: function(output_object){
                $("#result_table").html("");
                $("#result_table").append("<table class='table'></table>");
                $.each( output_object, function(key, value){
                    $("#result_table table").append("<tr><td>" + key + "</td><td>" + value + "</td></tr>");
                });
                },   // End of success function of ajax form
            error: function(error) {
                    $('#result_table').append('There was an error');
                } 
            }); // End of ajax call 
    
});
</script>