<?php 
$id = getIndex("id");
echo $id;
$b = new Book();
	$del = $b -> delete($id);
	if($del > 0){
		?>

		 <script language="javascript">
			alert("Da xóa thành công!");
			window.location="index.php?mod=book";
			</script>
			<?php
	}
 ?>