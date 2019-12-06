<?php
if (!defined("ROOT"))
{
	echo "Err!"; exit;	
}
	$cart = new Cart();
	$ac=getIndex("ac", "cart");
	if ($ac=="home")
		{
			include ROOT."/module/cart/home.php";
		}
	if ($ac=="list")
		{
			include ROOT."/module/cart/list.php";
		}
	if ($ac=="detail")
		{
			include ROOT."/module/cart/single.php";	
		}
	// if ($ac=="search")
	// 	{
	// 		include ROOT."/module/cart/search.php";	
	// 	}

?>