<?php 	//xu ly xoa	
$p = new pub();
			$n = $p->delete(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã xóa <?php echo $n;?> category!");
			window.location="index.php?mod=pub&ac=pubShow";
			</script>