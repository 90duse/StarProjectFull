<?php   
session_start();

// $_SESSION['image'] ;

if(!$_SESSION['username']){
    header("location: ../../login.php");
  } 


?>