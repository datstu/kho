<?php 
$mahd = getIndex('mahd');
$masp = getIndex('masp');
$us = getIndex('us');
echo $mahd.'/';
echo $masp.'/';
echo $us;
$del = $o -> delete_order($mahd,$masp);// xoa cac chi tiet don hang đã dc xử lý
// header('location:index.php?mod=cart&ac=home&us');
?>
 <script language=javascript>
 	window.location='index.php?mod=order&ac=show&us=<?php echo $us; ?>';</script>
