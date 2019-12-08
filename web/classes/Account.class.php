<?php 
class Account extends DB{
	public function getRand($n){
		$sql="select masach, tensach,gia, hinh from sach order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	public function login($u,$p){
			$sql="select * from quantri where username=? and matkhau=?";
			$arr = array($u, md5($p));
				$_SESSION['login'] = $this->exeQuery($sql,$arr);
			//return $this->exeQuery($sql,$arr);
			return $_SESSION;	


	}

}
?>