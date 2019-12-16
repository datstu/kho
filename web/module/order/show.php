<?php
$e = getIndex("us");
if (!isset($_SESSION['user']) || $_SESSION['user']=='' )
	// if($_SESSION['user']=='')
{


 ?>

 <form action="xuly.php" method="get">
 	Email: <input type="text" name="email">
 	<input type="submit" value="Taìm" name="swsm">
 </form>
<?php } else if($_SESSION['user'] != $e) {
	 $_SESSION['user'] = $e;
	 
	
	}



?>
<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Chi tiết của bạn đã đặt hàng</h2>

						<table class="tblone">
		
							<tr>
								<th width="0%">STT</th>
								<th width="25%">Tên sản phẩm</th>
								<th width="20%">Hình ảnh</th>
								<th width="15%">Giá</th>
								<th width="15%">Số lượng</th>
								<th width="10%">Ngày</th>
								<th width="10%">Trạng thái</th>
								<th width="10%">Xử lý</th>
							</tr>
							<?php
							
							if(!isset($e)){

					$e = getIndex("us");
				     
					}

					$hienThi_DH = $o ->showOrder($e);
					echo("<pre>");
					//print_r($hienThi_DH);
					$i = 0;
					foreach ($hienThi_DH as $k => $r) {
					$i++;
					//print_r($r);
					$mahd= $r["mahd"];
					$masach = $r["masach"];
 ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $r["tensach"];?></td>
								<td><img src="images/book/<?php echo $r["hinh"]; ?>" alt="<?php echo $r["hinh"]; ?>" width="100px"/></td>
								<td><?php echo number_format($r["gia"])." VNĐ";?></td>
								<td><?php echo $r["soluong"] ?></td>
								<td><?php  echo $o->formatDate($r["ngaydat"]);?></td>
								<td><?php if($r["trangthai"] ==0)
								{
									echo 'Đang xử lý';
								}else echo 'Đã xử lý';
								
								?>
								</td>

								 <td>
								 
								 	<?php
								 	//chỉ được phép xóa khi đơn hàng đã được xử lý
								if($r["trangthai"] ==0){
									echo "N/A";

								}else {?>
									<a onclick="return confirm('Are you want to delete?')" href="index.php?mod=order&ac=del&mahd=<?php echo $mahd; ?>&masach=<?php echo $masach; ?>&us=<?php  echo $r["email"]?>">
									
									Xóa
								</a>
							<?php } ?>
								 </td>
								
								  
								
								
							</tr>
							
	<?php } ?>
						</table>
						
					</div>
				
    	</div> 