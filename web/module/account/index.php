<?php
if (!defined("ROOT"))
{
	echo "Err!"; exit;	
}
	//$acc = new Account();
	$ac=getIndex("ac", "home");
	if ($ac=="home")
		{
			include ROOT."/module/account/home.php";
		}
	
?>