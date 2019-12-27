<?php 
$id = getIndex("id");
$sm = postIndex("submit");
echo $id;
$b = new Book();
	
 	if($sm !=""){
 		$update = $b ->update($id,$_POST,$_FILES);

 	}


 ?>
 <h2>Cập nhật sản phẩm</h2>
<h3><?php  if(isset($update) && $update > 0){
  	echo "Cập nhật sản phẩm thành công";
  	

  }
  else echo("Gãy"); ?></h3>
<form action="" method="post" enctype="multipart/form-data">
<?php  	$list = $b ->getDetail($id);
// echo "<pre>";
// 			print_r($list);
	if(isset($list)){
		foreach ($list as $key => $value) {
			
			$maloai = $value["maloai"];
	
	?>
	<table>
		<tr>
			<td>Loại</td>
			<td><select name="maloai" id="select">
				
				<?php 
					$c = new Category();
					$list_cate = $c -> getAll();
				 ?>
					<?php
					foreach ($list_cate as $key => $valu) {
						?>
						<option <?php if($value["maloai"] == $valu["maloai"]) echo "selected"; ?>
						value="<?php echo $valu["maloai"]; ?>"><?php echo $valu["tenloai"]; ?>
							
						</option>
						<?php
					}
					 ?>
					</select>
			</td>
		</tr>
		<tr>
			<td>Mã sản phẩm</td>
			<td><input type="text" name="masp" value="<?php echo $value["masp"]; ?>"></td>
		</tr>

		<tr>
			<td>Tên sản phẩm</td>
			<td><input type="text" name="tensp" value="<?php echo $value["tensp"]; ?>"></td>
		</tr>
		<tr>
			<td>Mô tả</td>
			<td>
				<textarea id="content" name="content" ><?php echo $value["mota"]; ?></textarea>
				<script type="text/javascript">CKEDITOR.replace( 'content'); </script>

			</td>
		</tr>
		<tr>
			<td>Giá</td>
			<td><input type="text" name="gia" value="<?php echo $value["gia"]; ?>"></td>
		</tr>
		<tr>
			<td>Hình</td>
			<td>
				 <img src="../images/book/<?php echo $value['hinh']; ?>" width=90px;><br/>
				<input type="file" name="fileUpload" ></td>
		</tr>
		<tr>
			<td>Nhà cung cấp
			</td>
			<td><select name="mancc" id="">
				
					<?php

					$pub = new pub();
					$list_pub = $pub -> getAll();
				
					foreach ($list_pub as $key => $val) {
						?>
						<option  <?php if($value["mancc"] == $val["mancc"]) echo "selected"; ?>
						 value="<?php echo $val["mancc"]; ?>"><?php echo $val["tenncc"]; ?></option>
						<?php
					}
					 ?>
	
	
	
</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Cập nhật"></td>
		</tr>


	</table>	
	<?php 	}
	} ?>
</form>