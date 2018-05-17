<?php
require_once("../incs/conn.php");
if(isset($_POST["username"])){
    
//set form variables
$username = mysqli_real_escape_string($dbc,strip_tags($_POST['username']));
$email = mysqli_real_escape_string($dbc,strip_tags($_POST['emailSignup']));
$password = mysqli_real_escape_string($dbc,strip_tags($_POST['passSignup']));
$cpassword = mysqli_real_escape_string($dbc,strip_tags($_POST['confirm-passSignup']));

$password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
$cpassword = password_hash($cpassword, PASSWORD_DEFAULT, ['cost' => 12]);

//check for duplicate username in database
$check = "SELECT username FROM users WHERE username='".$username."'";
if($query = mysqli_query($dbc,$check)){
    if($num = mysqli_num_rows($query) > 0){
        exit("user-err");
    }
}

//check for duplicate email in database
$check = "SELECT email FROM users WHERE email='".$email."'";
if($query = mysqli_query($dbc,$check)){
    if($num = mysqli_num_rows($query) > 0 ){
        exit("email-err");
    }
}

$sql = "INSERT into users (username,email,password)
                VALUES
        ('".$username."','".$email."','".$password."')";
        
        
if(mysqli_query($dbc,$sql))
{
    exit("success-Signup");

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