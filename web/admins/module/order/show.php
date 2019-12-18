<?php
$sm = postIndex("sm");
$tt = postIndex("type");
$id = postIndex("id");


$mahd = getIndex('mahd');





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
								
								
								<th width="10%">Tổng</th>
								<th width="10%">Số lượng</th>
								<th width="10%">Ngày</th>
								
								<th width="10%">Khách hàng</th>
								<th width="10%">Trạng thái</th>
								<th width="10%">Xử lý</th>
							</tr>
							<?php
						

					$hienThi_DH = $order ->showOrder_admin();
					//echo "<pre>";
					$a = $hienThi_DH;
					//print_r($hienThi_DH);
				
					foreach ($hienThi_DH as $k => $r) {
				
				
			     
			      $x = $r["mahd"];
			      
					
					//print_r($hienThi);
			
					
 ?>
							<tr>
								<td><?php echo $r["mahd"]; ?></td>
								<td> <?php echo ($order ->TongDon($x)); ?></td>
								<td> <?php echo ($order ->TongSL($x)); ?> </td>
								
								<td><?php  echo formatDate($r["ngaydat"]);?></td>
			<td><a href="index.php?mod=acc&idKH=<?php echo $r["email"] ;?>&mahd=<?php echo $r["mahd"];  ?>">Hiển thị</a></td>
								
					
					<td>

					<!-- =================================================
							bat dau xu ly lap don hang:
							- chi hien thi lua chon cap nhat cho 1 lan duy nhat de cap nhat tat ca cac mat hang cung ma don hang
							- neu khac ma don hang thi hien thi binh thuong  -->
					
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
                       
                       

                        <?php  } ?> 
                          
                            
     
              </select>

							</td>	
							<td>
									<input type="hidden" name="id" value="<?php echo $r["mahd"];  ?>">
									
									<input type="submit" value="Cập nhật" name="sm">
					</form> 
					<a onclick="return confirm('Are you want to delete?')" href="index.php?mod=order&mahd=<?php echo $r["mahd"]; ?>">Xóa </a>

								         <?php  } ?> 
							<!-- 	ket thuc xu ly lap don hang 
								============================================-->

							</tr>
							

						</table>
						
					</div>
				
    	</div> 