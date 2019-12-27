<?php 
 $ac = Utils::getIndex("ac", "pubShow");
   if ($ac=="pubShow")
include ROOT."/admins/module/pub/pubShow.php";
   if ($ac=="edit")
include ROOT."/admins/module/pub/pubEdit.php";
   if ($ac=="delete")
include ROOT."/admins/module/pub/pubDel.php";
  if ($ac=="add")
include ROOT."/admins/module/pub/add.php";
 ?>