<?php
$mod = getIndex("mod","home");
			
if ($mod=="book")
	include "module/book/index.php";
if ($mod=="news")
	include "module/news/index.php";
if ($mod=="order")
	include "module/order/index.php";
if ($mod=="acc")
	include "module/acc/index.php";

?>