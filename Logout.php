<?php 

     // session_start();
     // unset($_SESSION['user']);
     // unset($_SESSION['admin']);
     session_destroy();
     header('location:Login.php');
?>
