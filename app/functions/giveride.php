<?php
require_once("../incs/authenticator.php");
require_once("../incs/conn.php");
if(isset($_POST["gv-rideOrigin"])){
    
//set form variables
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$origin = mysqli_real_escape_string($dbc,strip_tags($_POST['gv-rideOrigin']));
$destination = mysqli_real_escape_string($dbc,strip_tags($_POST['gv-rideDestination']));
$capacity = mysqli_real_escape_string($dbc,strip_tags($_POST['gv-vehicleCapacity']));
$status = "available";
$date = date('Y-m-d');

$sql = "INSERT into rides (username,email,origin,destination,capacity,status,date)
                VALUES
        ('".$username."','".$email."','".$origin."','".$destination."','".$capacity."','".$status."','".$date."')";
        
        
if(mysqli_query($dbc,$sql))
{
    exit("gv-success");

}
else
{
    echo "Failed to Register";
}

}
else
{
    echo "Not Posted";
}


?>