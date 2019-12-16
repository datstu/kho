<?php
$sm = postIndex("sm");
$tt = postIndex("type");
$id = postIndex("id");


$mahd = getIndex('mahd');

;
echo $mahd.'/';


$del = $order -> delete_order2($mahd);
	

	if(isset($tt) && $sm != ''){
		$capNhat = $order -> xuLy_DH($tt,$id);
		//echo $tt;
	}
	

//echo "<pre>";
 ?>


<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Danh sách đơn hàng</h2>

						<table class="tblone">
		
							<tr>
								<th width="10%">Mã Hóa Đơn</th>
								<th width="30%">Tên sản phẩm</th>
								
								<th width="10%">Giá</th>
								<th width="10%">Số lượng</th>
								<th width="10%">Ngày</th>
								
								<th width="10%">Khách hàng</th>
								<th width="10%">Trạng thái</th>
								<th width="10%">Xử lý</th>
							</tr>
							<?php
						

					$hienThi_DH = $order ->showOrder();
					
					//print_r($hienThi_DH);
					$i = 1;
					$y = 0;
					$flag = false;
					foreach ($hienThi_DH as $k => $r) {
				
					//print_r($r);
					$mahd= $r["mahd"];
					$masach = $r["masach"];
					
			      $a["$i"] = $mahd;
			      
			      
					
			
					
 ?>
							<tr>
								<td><?php echo $r["mahd"]; ?></td>
								<td><?php echo $r["tensach"];?></td>
								
								<td><?php echo number_format($r["gia"])." VNĐ";?></td>
								<td><?php echo $r["soluong"] ?></td>
								<td><?php  echo formatDate($r["ngaydat"]);?></td>
								<td><a href="index.php?mod=acc&idKH=<?php echo $r["email"] ;?>">Hiển thị</a></td>
								
					
					<td>

					<!-- =================================================
							bat dau xu ly lap don hang:
							- chi hien thi lua chon cap nhat cho 1 lan duy nhat de cap nhat tat ca cac mat hang cung ma don hang
							- neu khac ma don hang thi hien thi binh thuong  -->
					<?php

					if(!$flag){
						$flag =true ;
						$i++; $y++;

						?>
						<form action="index.php?mod=order" method="post"> 

							 <select id="select" name="type">
                            
                            <?php 
                            if ($r["trangthai"] == 0){
                            
                            ?>
                            <option selected  value="0">Chưa xử lý</option>
                            <option  value="1">Đang xử lý</option>
                            <option  value="2">Đã xử lý</option>
                            <option   value="3">Hủy</option>
                       
                            

                        <?php }else  if ($r["trangthai"] == 1) { ?>
                          
                             <option  value="0">Chưa xử lý</option>
                            <option  selected  value="1">Đang xử lý</option>
                            <option  value="2">Đã xử lý</option>
                            <option   value="3">Hủy</option>
                       
                            

                        <?php  }else  if ($r["trangthai"] == 2) { ?>
                          
                             <option  value="0">Chưa xử lý</option>
                            <option    value="1">Đang xử lý</option>
                            <option  selected value="2">Đã xử lý</option>
                            <option   value="3">Hủy</option>
                       
                       

                        <?php  }else  if ($r["trangthai"] == 3) { ?>
                          
                             <option  value="0">Chưa xử lý</option>
                            <option    value="1">Đang xử lý</option>
                            <option   value="2">Đã xử lý</option>
                            <option   selected value="3">Hủy</option>
                       
                       

                        <?php  } ?> ?>
                          
                            
     
                        </select>
								 	
							
								 </td>
								
								<td>
									<input type="hidden" name="id" value="<?php echo $r["mahd"];  ?>">
									
									<input type="submit" value="Cập nhật" name="sm">
					</form> 
					   <?php 
						//while ( $a[$i] != $a[$i--]);
							 
						}else if($a[$i] != $a[$y]){
							?>
							<form action="index.php?mod=order" method="post"> 

							 <select id="select" name="type">
                            
                            <?php 
                            if ($r["trangthai"] == 0){

                            
                            ?>
                        

                            <option selected  value="0">Chưa xử lý</option>
                            <option  value="1">Đang xử lý</option>
                            <option  value="2">Đã xử lý</option>
                            <option   value="3">Hủy</option>
                       
                            

                        <?php }else  if ($r["trangthai"] == 1) { ?>
                          
                             <option  value="0">Chưa xử lý</option>
                            <option  selected  value="1">Đang xử lý</option>
                            <option  value="2">Đã xử lý</option>
                            <option   value="3">Hủy</option>

                        <?php  }else  if ($r["trangthai"] == 2) { ?>
                          
                             <option  value="0">Chưa xử lý</option>
                            <option    value="1">Đang xử lý</option>
                            <option  selected value="2">Đã xử lý</option>
                            <option   value="3">Hủy</option>
                       

                        <?php  } else  if ($r["trangthai"] == 3) { ?>
                          
                             <option  value="0">Chưa xử lý</option>
                            <option    value="1">Đang xử lý</option>
                            <option   value="2">Đã xử lý</option>
                            <option  selected value="3">Hủy</option>
     <?php }?>
     
                        </select>
								 	
							
								 </td>
								
								<td>
									<input type="hidden" name="id" value="<?php echo $r["mahd"];  ?>">
									
									<input type="submit" value="Cập nhật" name="sm">
					</form> 
					<a onclick="return confirm('Are you want to delete?')" href="index.php?mod=order&mahd=<?php echo $mahd; ?>&masach=<?php echo $masach; ?>&us=<?php  echo $r["email"]?>">Xóa </a>
							<?php
							$i++;$y++;
						}
					}
							


					 
					
					 ?>

							</td>	

								
							<!-- 	ket thuc xu ly lap don hang 
								============================================-->

							</tr>
							

						</table>
						
					</div>
				
    	</div> 