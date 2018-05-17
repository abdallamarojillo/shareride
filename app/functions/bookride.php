<?php
require_once("../incs/conn.php");
require_once("../incs/authenticator.php");
if(isset($_POST['origin']))
{
   $email = $_SESSION['email'];
   $rider = $_SESSION['username'];
   $origin = mysqli_real_escape_string($dbc,strip_tags($_POST['origin']));
   $destination = mysqli_real_escape_string($dbc,strip_tags($_POST['destination']));
   

    $to      = $_SESSION['email'];
    $subject = 'ShareRide Booking Confirmation';
    $message = 'Hi' . $username. ', you have successfully booked your ride from '. $origin. ' to '. $destination;
    $headers = 'From: shareride@shareride.com' . "\r\n" .
                'Reply-To: shareride@shareride.com' . "\r\n" .
                'X-Mailer: PHP/';

               
    
    //insert data and send mail
    $sql = "INSERT INTO riders (rider,origin,destination)
                        VALUES
            ('".$rider."','".$origin."','".$destination."')";
    if($query = mysqli_query($dbc,$sql))
    {
        
        mail($to, $subject, $message, $headers);
    }
    else
    {
        exit("failed");
    }
    
}
else
{
    echo "Please try again";
}
?>