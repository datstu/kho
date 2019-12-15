<?php 
	
	$b = new Book();

	$quantity = postIndex("number");
	$d = postIndex("D");
	$sm = postIndex("submit");
	if (isset($sm)){
	if ($quantity <= 0){
		$cart->remove($d);
	}else
	
	$edit = $cart->edit($d, $quantity);
}
	$c = $cart->show();
	

	$s=0;
?>
	
<?php		
	
	
	
		if(isset($c)){
			 ?>
		<table border="10"><tr><td>Hình ảnh</td><td>Tên Sp</td><td>Giá</td><td>Số lượng</td><td>Tổng</td></tr>
				<?php 
		foreach($c as $id=>$quantity)
		{
			
			 $sp = $b->getDetail($id);
		
			foreach ($sp as $key => $r){

			 $sp = $b->getDetail($id);
				

				
?>
		<tr>
				
				<td><img height="200px" src="images/book/<?php echo $r["hinh"] ;?>" alt="<?php echo $r["hinh"] ?>"></td>
				<td ><?php echo $r["tensach"]; ?></td>
				<td ><?php echo number_format($r["gia"]); ?></td>
				<td> <form action="" method="post">

						<input type="hidden" name="D" value="<?php echo $id; ?>"> <!-- thẻ ẩn gửi id cart trong form -->
						<input style="width:80%" type="number" class="buyfield" name="number" value="<?php echo $quantity; ?>"  />
						</td>
						<td><?php $tong = $r["gia"]*$quantity;
						echo number_format($tong);


		$s+=$tong;
						?> </td>
				 <td><a onclick="return confirm('Are you want to delete?')"
				  href="index.php?mod=cart&ac=del&id=<?php echo $id; ?>" >Delete </a>
				 	<input type="submit" class="buysubmit" name="submit" value="Update"/></form> 
				 </td>      
				</tr>
				<?php
			}
			}	
		
		?>
		</table>
		<div align="center">Tổng:<?php 
		
		echo number_format($s).'đ';

		?></div>
		<a href="index.php?mod=order&ac=home"><div id="mua-hang">Mua Hàng</div></a>

	<?php } ?>
		