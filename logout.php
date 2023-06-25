<?php  
session_start();
// include './Admin-Template/config.php';
 


 if(isset($_POST['btnsignout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location:login.php");
   
 }
 
 

 ?>