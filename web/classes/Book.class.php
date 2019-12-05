<?php 
class Book extends DB{
	public function getRand($n){
		$sql="select masach, tensach, hinh from sach order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
}
?>