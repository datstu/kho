<?php 
include "config/config.php";
include ROOT."/inc/function.php";
// if (!isset($_SESSION)) session_start();
 spl_autoload_register("loadClass");

	$email = getIndex('email');

 // echo $email;
  if (!isset($_SESSION)) session_start();
	$_SESSION['user']= $email;
	$ss = $_SESSION['user'];
	//print_r($ss);
	print_r($_SESSION);

	 if(isset($email)){
	 echo "<script language=javascript>
  	window.location='index.php?mod=order&ac=show&us=".$email."';</script>";
 	}


	 ?>
	
	