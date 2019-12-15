<?php
$ac= getIndex("ac");


if ($ac=="home")
{
	include ROOT."/module/order/home.php";
}

if ($ac=="add")
{
	include ROOT."/module/order/add.php";
}


//Biến $cart được tạo từ trang chủ index.php

  

