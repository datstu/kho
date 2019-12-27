<?php if (!isset($_SESSION)) session_start();
$email =postIndex("email");
 if(!isset($_SESSION['user']) || $_SESSION['user']=='')
 	{
		
		
		$_SESSION['user']= $email;
	
	}else {
		$_SESSION['user']= $email;
	} ?>
<style>
	
.dathang{
   background: #fb5e33;
    margin-top: 10px;
    padding: 5px;
    
    font-size: 40px;
    text-align: center;
}
.dathang a{
  display: block;
  color: black;

}
.dathang a:hover{
  text-decoration: none;
/* background: #4b4b4b;*/
  color: blue;
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
				<td  ><?php echo $r["tensp"]; ?></td>
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
		$err = '';
		//echo ranbuocSDT($dt);

		if(isset($sm))	
		{
			$KT = $account-> KH_Exist($email);
			if($ten == "" || $diachi == "" )
			{	echo "Vui lòng nhập thông tin.";
			  $err =true;
			}else if (checkEmail($email)==false) 
			{
				echo "Định dạng email sai!<br>";
			$err =true;
			}else if (ranbuocSDT($dt)==true) 
			{
				
			$err =true;
		    }
				else{

				if($KT >0)
				{
					$up = $account -> update ($email,$ten,$diachi,$dt);
					if($up >0) echo "Cập nhật  thành công.";
						
				}else {


					$_insertKH = $account -> insert_KH($email,$ten,$diachi,$dt);
					if($_insertKH>0) echo "Cap nhat Thanh cong !!!";
					else echo "Fails THem";
						}
					}
					//echo $email;



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

	
	if($err == ''){ ?>
		<div class="dathang">
		<a href="index.php?mod=order&ac=add&id_accout=<?php echo $email;?>&<?php echo $a; ?>">Đặt Hàng</a></div>
	<?php } ?>
	
