<?php 
class CartDetail extends DB{
	public function getDetail($n){
		$sql="select masach, tensach,gia, hinh from sach order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	public function getDetail($n){
		$sql="select * from chitiethd where mahd='$n'  ";
		return $this->exeQuery($sql);	
	}
}
?>