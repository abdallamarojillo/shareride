<?php
require_once("../incs/conn.php");
if(isset($_POST['emailSignin']))
{
    $email = mysqli_real_escape_string($dbc,strip_tags($_POST['emailSignin']));
    $password = mysqli_real_escape_string($dbc,strip_tags($_POST['passSignin']));
    
            $sql = mysqli_query($dbc,"SELECT * FROM users WHERE email='".$email."' ");
            $rowp = mysqli_fetch_assoc($sql);
            $dbpass = $rowp['password'];
            
            if(password_verify($password,$dbpass))
            {
                session_start();
                $_SESSION['username'] = $rowp['username'];
                $_SESSION['email'] = $rowp['email'];

                
         
                exit("correct");
            }
            else
            {
                exit("incorrect");
            }  
}



?>