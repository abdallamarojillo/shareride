$(document).ready(function(){

  $('#gv-ride-Form').submit(function(e){
    e.preventDefault();
    
	$('#gv-ride-loader').html('<div class="loader"></div>');
    
       var ourData = $(this).serializeArray();
       var TargetUrl = "../functions/giveride.php";
      //make ajax request
      $.ajax({
        url:TargetUrl,
        method:"POST",
        data:ourData,
        success:function(data){
            $('#gv-ride-loader').html('');
            console.log(data);

            $("form").trigger("reset");
          if (data === 'gv-success')
            {
                 $('#gv-success').addClass('text-primary center').html("<h3><i class='material-icons'>check</i>Ride successfully placed</h3>");
            }

            
        }
      });

  });
});