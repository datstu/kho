<?php
$mod = getIndex("mod","book");
			
if ($mod=="book")
	include "module/book/index.php";
if ($mod=="account")
	include "module/account/index.php";
if ($mod=="cart")
	include "module/cart/index.php";
if ($mod=="order")
	include "module/order/index.php";
	
?>