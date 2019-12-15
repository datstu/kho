
<style>
	.box_left {
    
    float: left;
    width: 48%;
    padding: 4px;
}
	.box_right {
    
    float: right;
    width: 45%;
    padding: 4px;
}
.tblone {
  border: 1px solid #fff;
  margin-bottom: 12px;
  width: 100%;
}
.tblone th {
  background: #1d71ab  none repeat scroll 0 0;
  color: #fff;
  font-size: 20px;
  padding: 5px 8px;
  text-align: center;
}
.tblone td{padding:10px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#f6f5f5;height:30px;}
table.tblone input[type="number"] {
  border: 1px solid #ddd;
  padding: 2px;
  width: 60px;
}
table.tblone input[type="submit"] {
  background: #333 none repeat scroll 0 0;
  border: 1px solid #000;
  border-radius: 3px;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  padding: 1px 5px;
}
table.tblone a {
  color: #fe5800;
  font-weight: bold;
  text-decoration: none;
}
table.tblone a:hover{color: #000;}
table.tblone img {
    height: 70px;
    width: 80px;
}
.dathang{
	 background: #fb5e33;
    /* margin-left: 74%; */
    padding: 5px;
    /* height: 120px; */
    /* line-height: 67px; */
    font-size: 40px;
    text-align: center;
}
.dathang a{
	display: block;
	color: black;

}
.dathang a:hover{
	text-decoration: none;
	font-style: italic;
}

</style>


<div class="box_left">
<?php	

$b = new Book();
$s=0;
	
$c = $cart->show();
	$a = http_build_query(array('a' => $c));// muc dich gui mang cart gom idsp va so luong qua url
		if(isset($c)){
			$i=0;
			 ?>
		<table border="1"><tr>
			<td width="5%">STT</td>
			<td width="30%">Tên Sp</td>
			<td width="20%">Giá</td>
			<td width="25%"> Số lượng</td>
			<td width="20%">Tổng</td></tr>
				<?php 
		foreach($c as $id=>$quantity)
		{
			$idsp = $id;
			$num = $quantity;
			 $sp = $b->getDetail($id);
			 $i++;
		
			foreach ($sp as $key => $r){
				

				
?>
		<tr>
				
				<td> <?php echo $i; ?></td>
				<td  ><?php echo $r["tensach"]; ?></td>
				<td ><?php echo number_format($r["gia"]); ?></td>
				<td > <?php echo $quantity; ?>  </td>
						<td ><?php $tong = $r["gia"]*$quantity;
						echo number_format($tong);


		$s+=$tong;
						?> </td>
				      
				</tr>
				<?php
			}
			}	
		
		?>
		</table>
		<div style="text-align: center; margin: 5px;">Tổng:<?php 
		
		echo number_format($s).'đ';

		?></div>
			<?php } ?>
</div>
<div class="box_right">
	<?php
		$ten =postIndex("ten");
		$email =postIndex("email");
		$diachi =postIndex("diachi");
		$dt =postIndex("dienthoai");
		$sm = postIndex("submit");
		$account = new account();

		if(isset($sm))	
		{
			$KT = $account-> KH_Exist($email);
			if($ten == "" || $email == "" || $diachi == "" || $dt == "")
				echo "VUI LÒNG Nhập Đủ Thông tin.";
				else{

				if($KT >0)
				{
					$up = $account -> update ($email,$ten,$diachi,$dt);
					if($up >0) echo "Cập nhật  thành công.";
						else echo "Fail CAP NHAT";
				}else {


					$_insertKH = $account -> insert_KH($email,$ten,$diachi,$dt);
					if($_insertKH>0) echo "Cap nhat Thanh cong !!!";
					else echo "Fails THem";
						}
					}

			}
			




		 ?>
	<form action="" method="post">
	<table class="tblone">

		    		
		    		<tr>
		    			<td>Tên</td>
		    			
		    			<td><input type="text" name="ten" value="<?php echo $ten; ?>"></td>
		    		</tr>
		    		
		    		<tr>
		    			<td>Số điện thoại</td>
		    			
		    			<td><input type="text" name="dienthoai" value="<?php echo $dt; ?>"></td>
		    		</tr>
		    		
		    		
		    		<tr>
		    			<td>Email</td>
		    			
		    			<td><input type="text" name="email" value="<?php echo $email; ?>" ></td>
		    		</tr>
		    		<tr>
		    			<td>Địa chỉ</td>
		    			
		    			<td><input type="text" name="diachi" value="<?php echo $diachi; ?>" ></td>
		    		</tr>
		            <tr>
		                <td colspan="3"><input type="submit" value="Cập nhật thông tin" name="capNhat"></td>
		               
		            </tr>
		    		
		    	
		    	</form>	
		    	</table>


</div>
<div class="clearfix"></div>
	
	<?php 

	// echo $idsp."<br>".$num;

	if($email != ''){ ?>
		<div class="dathang">
		<a href="index.php?mod=order&ac=add&id_accout=<?php echo $email;?>&<?php echo $a; ?>">Đặt Hàng</a></div>
	<?php } ?>
	
