<?php
$acc = new Account();
$id = getIndex("idKH");
$mahd = getIndex("mahd");
?>

<table style="width: 80%; margin: 0 auto;">
		
						
							<tr>
								
								<th width="15%">Tên khách hàng</th>
								
								<th width="15%">Email</th>
								<th width="20%">Địa chỉ</th>
								<th width="10%">Điện thoại</th>
								
								
							</tr>
							<?php
								
						$sh = $acc -> getDetail($id);
						
					foreach ($sh as $k => $r) {
				
				
					
			      
			      
					
			
					
 ?>
							<tr>
								<td><?php echo $r["tenkh"]; ?></td>
								<td><?php echo $r["email"];?></td>
								
								<td><?php echo $r["diachi"];?></td>
								<td><?php echo $r["dienthoai"] ?></td>
								
								
				

							</tr>
						<?php }?>
							
	
						</table>

<table style="width: 80%; margin: 0 auto;">
		
								<tr>
								
								<th width="15%">Mã hóa đơn</th>
								
								<th width="15%">Tên sản phẩm</th>
								<th width="20%">Số lượng</th>
								<th width="10%">Giá</th>
								
								


							</tr>
							<?php
									
										$as = new Order();						
						$sh1 = $as -> getDetail_Ord($mahd);
						// echo "<pre>";
						// print_r($sh1);
					foreach ($sh1 as $k => $r) {
				
				
					
			      
			      
					
			
					
 ?>
							<tr>
								<td><?php echo $r["mahd"]; ?></td>
								<td><?php echo $r["tensp"];?></td>
								
								<td><?php echo $r["soluong"];?></td>
								<td><?php echo $r["gia"] ?></td>
								
								
				

							</tr>
						<?php }?>
							
	
						</table>
	
