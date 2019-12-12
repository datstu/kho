<?php
	$id = getIndex("id");
	$cart->remove($id);
	echo "<script language=javascript>window.location='index.php?mod=cart&ac=home';</script>";