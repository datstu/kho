<?php 

$id_acc = getIndex("id_accout");

$oder = new Order();
$a = new Account();
$c = new CartDetail();
 // echo $id_acc.'///';
 // echo "<pre>";


		$list =$oder ->KH_Exist($id_acc);
		
	 	if(isset( $list)){
	 		

	 		$_insert = $oder ->insert_Oder($id_acc);
	 		
	 }	
		else echo "<script language=javascript>window.location='index.php?mod=cart&ac=home';</script>";

	$a = getIndex("a");
	 //echo "<pre>";
	// print_r($a);
	// 
	 $x= $oder-> show_Order_desc($id_acc);
	 
	 //print_r($x);
	 // echo $id_acc;
	 	$mahd = $x[0]["mahd"];

	 	// echo "/".$mahd;
		$_ins_cart = $c ->insert_Cart($mahd,$a);
		
			
		
	?>
	<style>
		.success_order h2{
			color: #fb5e33;
			font-size: 40px;
			font-weight: bold;
			text-align: center;
			padding: 10px;
		}
		.success_order p{
			text-align: center;
			padding: 4px;
		}
		.success_order a{
			color: blue;
		}
	</style>
	<div class="success_order">
		
		<h2>Đặt hàng thành công</h2>
		<p>Tổng giá trị bạn đã mua: <?php 
					$tong = $c ->tongGia();
					echo $tong;
					
		 ?> VNĐ</p>
		<p>Chúng tôi sẽ liên lạc với bạn sớm nhất có thể. Bạn có thể xem chi tiết đơn hàng 
			<a href="index.php?mod=order&ac=show&us=<?php echo $id_acc; ?>">tại đây</a></p>
	</div>

		
		 
		