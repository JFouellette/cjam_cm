<script>
$('#maindiv').append('<div id="result_table"></div>');
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
            $("#result_table").append('<a href="#" class="btn btn-primary" id="editbtn">Edit</a>');
            },   // End of success function of ajax form
        error: function(error) {
                $('#result_table').append('There was an error');
            } 
        });
     // End of ajax call  

$('#maindiv').on('click', '#editbtn', function( event ){
    event.preventDefault();
    console.log("click yeah");
    $("#result_table table tbody tr").append("<td>form</td>");
    $("#result_table").append('<button class="btn btn-primary" type="submit" id="save" name="save" value="save">Save</button>');
});

</script>