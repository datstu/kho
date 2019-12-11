<?php 
class Account extends DB{
	public function getRand($n){
		$sql="select masach, tensach,gia, hinh from sach order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	public function login($u,$p){
		

	}

}
?>