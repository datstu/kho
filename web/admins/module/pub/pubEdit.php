<?php 
$pub = new pub();


$id = getIndex("id");
$sm = postIndex("sm");
$ten = postIndex("tenncc");



//print_r($data);
		if($sm !=''){
			$up = $pub ->saveEdit($ten,$id);
			
		}

		if(isset($up) ){
			if($up>0){
			echo "Cập nhật thành công!";

		}else echo "Cập nhật thất bại.";
	}
		$data = $pub ->getById($id);
		//print_r($data);
 ?>
 <!-- This is the target div. id must match the href of this div's tab -->
						
					
						<form action="" method="post">
						<table>
							
							<tr>
								<td>Tên nhà cung cấp</td>
								<td><input type="text" name="tenncc" value="<?php echo($data["tenncc"]); ?>"></td>
							</tr>
							<tr><td><input type="submit" name="sm" value="Sửa"></td></tr>
							
							</table>
						
				</form>