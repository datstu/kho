<?php
//$group = Utils::getIndex("group", "book");

$c = new CartDetail();

	$order = new Order();
	$ac = Utils::getIndex("ac", "orderShow");
	// if ($ac !="delete")
	// include ROOT."/admins/module/book/catedit.php"; //Insert form edit or add new
	
	if ($ac=="orderShow")
		include ROOT."/admins/module/order/show.php";
	
	// if ($ac=="delete")
	// 	{
	// 		//xu ly xoa	
	// 		$n = $category->delete(Utils::getIndex("id"));
	// 		?>
            <script language="javascript">
	// 		alert("Đã xóa <?php echo $n;?> category!");
	// 		window.location="index.php?mod=book&group=cat";
	// 		</script>
             <?php
	// 	}
	// if ($ac=="saveEdit")
	// 	{
	// 		//xu ly edit -> and redirect to index.php -> mod-> action	
	// 		$n = $category->saveEdit();
	// 		?>
             <script language="javascript">
	// 		alert("Đã sửa <?php echo $n;?> category!");
	// 		window.location="index.php?mod=book&group=cat";
	// 		</script>
             <?php
	// 	}
	// if ($ac=="saveAdd")
	// 	{
	// 		//xu ly edit -> and redirect to index.php -> mod-> action	
	// 		$n = $category->saveAddNew();
	// 		?>
            <script language="javascript">
	// 		alert("Da them <?php echo $n;?> category!");
	// 		window.location="index.php?mod=book&group=cat";
	// 		</script>
             <?php
	// 	}

