<?php
session_start();
if(!$_SESSION['username'] || !$_SESSION['email'])
{
  //header('Location: ../login/');
  exit(header('Location: ../../'));
}

?>