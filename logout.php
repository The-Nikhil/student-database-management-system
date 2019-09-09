<?php
	session_start();
      unset($_SESSION['$user_eno']);  
      session_destroy(); 
	header("location: login.php");
?>