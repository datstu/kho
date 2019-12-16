<?php
$acc = new Account();
$id = getIndex("idKH");

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
	
