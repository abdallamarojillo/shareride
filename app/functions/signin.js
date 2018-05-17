$(document).ready(function(){

  $('#signinForm').submit(function(e){
    e.preventDefault();
    
    $('#signinLoader').html(`
                  <div class="progress">
                      <div class="indeterminate"></div>
                  </div>
        `);
    

       var ourData = $(this).serializeArray();
       var TargetUrl = "app/functions/signin.php";
      //make ajax request
      $.ajax({
        url:TargetUrl,
        method:"POST",
        data:ourData,
        success:function(data){
            //console.log(data);
    
            $('#signinLoader').html('');

            //$("form").trigger("reset");
            if (data === 'correct')
            {
                 location.replace("app/dashboard");
            }
            else if (data === 'incorrect')
            {
                $('#incorrect').html("<span class='red-text center'>Invalid Credentials</span>");
            }
        
           
            //$('#success_message').fadeOut(10000);
            
        }
      });
    
  });
});