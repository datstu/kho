<?php 
$mahd = getIndex('mahd');
$masach = getIndex('masach');
$us = getIndex('us');
echo $mahd.'/';
echo $masach.'/';
echo $us;
$del = $o -> delete_order($mahd,$masach);// xoa cac chi tiet don hang đã dc xử lý
// header('location:index.php?mod=cart&ac=home&us');
?>
 <script language=javascript>
 	window.location='index.php?mod=order&ac=show&us=<?php echo $us; ?>';</script>
