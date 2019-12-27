<?php
$id = Utils::getIndex("id");
$r = $category->getById($id);
$ac2= "saveEdit";
$info ="Sửa category!";
if (Count($r)==0) //khong co -> them moi
{
	$ac2="saveAdd";
	$info ="Thêm Mới Category";
	$r["maloai"]="";
	$r["tenloai"]="";
}

?>
<form action="index.php?mod=book&group=cat&ac=<?php echo $ac2;?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã loại</td>
    <td width="77%"><input type="text" name="maloai" value="<?php echo $r["maloai"];?>"></td>
  </tr>
  <tr>
    <td>Tên Loại</td>
    <td><input type="text" name="tenloai" value="<?php echo $r["tenloai"];?>"></td>
  </tr>
  <tr>
    <td colspan="2">

    <input type="submit" value="Thực Hiện">
	<?php
    
	?></td>
    </tr>
</table>
</fieldset>
</form>