<?php
$ac= getIndex("ac");

if ($ac=="add")
{
	$quantity = getIndex("number", 1);
	$id = getIndex("id");
	$cart->add($id, $quantity);
}
if ($ac=="del")
{
	include ROOT."/module/cart/del.php";
}
if ($ac=="home")
{
	include ROOT."/module/cart/home.php";
}

//Biến $cart được tạo từ trang chủ index.php

  

