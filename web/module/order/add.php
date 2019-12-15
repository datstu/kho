<?php 
$id_acc = getIndex("id_accout");

$o = new Order();
$a = new Account();
$c = new CartDetail();


		$list =$o ->KH_Exist($id_acc);
	 	if( $list >0){

	 		$_insert = $o ->insert_Oder($id_acc);
	 		if($_insert >0) echo "OKEEE";
	 		else echo "NOT OKE";
	 }	
		else echo "<script language=javascript>window.location='index.php?mod=cart&ac=home';</script>";

	$a = getIndex("a");
	 //echo "<pre>";
	// print_r($a);
	// 
	 $x= $o-> show_Order_desc($id_acc);
	 
	 //print_r($x);
	 //echo $id_acc;
	 	$mahd = $x[0]["mahd"];
	 //	echo "/".$mahd;
		$_ins_cart = $c ->insert_Cart($mahd,$a);
	
		
		 
		