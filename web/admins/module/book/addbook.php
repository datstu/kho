<?php
$loai = new Category();
$ncc = new pub();
$xuatLoai = $loai ->getAll();
$xuatNcc = $ncc ->getAll();
$b = new Book();
$sm = postIndex('submit');
if($sm !='')
	$ins_ = $b->insert_book($_POST,$_FILES);
//print_r($_FILES);
 
 ?>
<h2>Thêm sản phẩm</h2>
<h3><?php  if(isset($ins_) && $ins_ > 0){
  	echo "Thêm sản phẩm thành công";
  }
  else echo("Gãy"); ?></h3>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Tên loại</td>
			<td><select name="maloai" id="select">
				<option >-----------Select----------</option>
					<?php
					foreach ($xuatLoai as $key => $value) {
						?>
						<option value="<?php echo $value["maloai"]; ?>"><?php echo $value["tenloai"]; ?>
							
						</option>
						<?php
					}
					 ?>
					</select>
			</td>
		</tr>
		<tr>
			<td>Mã sản phẩm</td>
			<td><input type="text" name="masp"></td>
		</tr>

		<tr>
			<td>Tên sản phẩm</td>
			<td><input type="text" name="tensp"></td>
		</tr>
		<tr>
			<td>Mô tả</td>
			<td>
				<textarea id="content" name="content">Nội dung TextArea</textarea>
				<script type="text/javascript">CKEDITOR.replace( 'content'); </script>

			</td>
		</tr>
		<tr>
			<td>Giá</td>
			<td><input type="text" name="gia"></td>
		</tr>
		<tr>
			<td>Hình</td>
			<td><input type="file" name="fileUpload"></td>
		</tr>
		<tr>
			<td>Nhà cung cấp
			</td>
			<td><select name="mancc" id="">
				<option value="">-----------Select----------</option>
					<?php
					foreach ($xuatNcc as $key => $value) {
						?>
						<option value="<?php echo $value["mancc"]; ?>"><?php echo $value["tenncc"]; ?></option>
						<?php
					}
					 ?>
	
	
	
</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>


	</table>	
	
</form>
