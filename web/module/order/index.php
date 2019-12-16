<?php
$ac= getIndex("ac","show");


if ($ac=="home")
{
	include ROOT."/module/order/home.php";
}

else if ($ac=="add")
{
	include ROOT."/module/order/add.php";
}
else if ($ac=="show")
{
	include ROOT."/module/order/show.php";
}else if (($ac=="del")) {
	include ROOT."/module/order/del.php";
}


//Biến $cart được tạo từ trang chủ index.php

  

