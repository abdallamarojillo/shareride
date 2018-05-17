function bookRide(str){
      var idc = str;
      var origin = $('#origin-'+str).val();
      var destination = $('#destination-'+str).val();
      var driver = $('#driver-'+str);
      var book = $('#book-'+str);
      
      $(book).submit(function(e){
         e.preventDefault();   
      });
      $.ajax({
         type: "POST",
         url :"../functions/bookride.php",
         data:"driver="+driver+"&id="+idc+"&destination="+destination+"&origin="+origin,
         //data: "origin="+origin+"&id="+idc+"&destination="+destination+"&driver="+driver,
         //success: alert("hey"),
         success:
         swal({   title: "Booked",   
            text: "You have successfully booked your ride. Please check your email",   
            type: "success",     
            confirmButtonColor: "teal",   
            confirmButtonText: "OK",    
            closeOnConfirm: false } , 
            function(isConfirm){   
                if (isConfirm) 
                    {   
                    location.reload();
                    }     
            }),
         
      });
}