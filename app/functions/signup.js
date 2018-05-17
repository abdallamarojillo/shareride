$(document).ready(function(){

  $('#signupForm').submit(function(e){
    e.preventDefault();
    
    var Password = $('#passSignup').val();
    var ConfirmPassword = $('#confirm-passSignup').val();
    
    $('#signupLoader').html(`
                  <div class="progress">
                      <div class="indeterminate"></div>
                  </div>
        `);
    
    
    if (Password != ConfirmPassword) {
        $('#pass-err').addClass("red-text center").html('Your passwords do not match');
    }
    else
    {
      $('#pass-err').html('');
       var ourData = $(this).serializeArray();
       var TargetUrl = "app/functions/signup.php";
      //make ajax request
      $.ajax({
        url:TargetUrl,
        method:"POST",
        data:ourData,
        success:function(data){
            $('#signupLoader').html('');
            console.log(data);

            $("form").trigger("reset");
          if (data === 'email-err')
            {
                 $('#email-err').html("<span class='red-text center>email in use</span>");
            }
            else if (data === 'user-err')
            {
                $('#user-err').html("<span class='red-text center'>username in use</span>");
            }
            else
            {
               $('#success-Signup').html("<h5 class='green-text'><i class='material-icons'>check</i>Successfully Registered. You can now log in</h5>");
            }
           
            //$('#success_message').fadeOut(10000);
            
        }
      });
    }
    
  });
});