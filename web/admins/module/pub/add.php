<?php 
$p = new pub();
$in = $p -> saveAddNew();

 ?>
  <script language="javascript">
			alert("Da them <?php echo $in;?> Nhà cung cấp!");
			window.location="index.php?mod=pub&ac=pubShow";
			</script>