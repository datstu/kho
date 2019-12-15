<?php 
class Account extends DB{
	
	public function getDetail($n){
		$sql="select * from khachhang where email='$n'  ";
		return $this->exeQuery($sql);	
	}
	public function insert_KH($email,$ten,$diachi,$dt ){
		
		$sql= "INSERT INTO khachhang (email, matkhau, tenkh, diachi, dienthoai)
		 		VALUES('$email',0,'$ten','$diachi','$dt')";
		
		return $this->exeNoneQuery($sql);	
		

	}
	public function update($email,$ten,$diachi,$dt ){
		
		$sql= "UPDATE khachhang SET 
		 		
		 		email = '$email',
		         
		          matkhau = 'a',
		           tenkh ='$ten',
					diachi ='$diachi',
					dienthoai ='$dt'
					
					WHERE email = '$email'";

		return $this->exeNoneQuery($sql);	
		

	}
	public function KH_Exist($email)
	{
		$sql="select * from khachhang where email = '$email' ";
		$temp = new Db();
		$temp->exeQuery($sql);
		if ($temp->getRowCount()==0) return false;
		return true;
	}
	// 	public function update($email,$ten,$diachi,$dt ){
		
	// 	$sql= "UPDATE khachhang SET 
		 
	// 	 tenkh ='$ten',
	// 				diachi ='$diachi',
	// 				dienthoai ='$dt',
					
	// 				WHERE email = '$email'";

	// 	return $this->exeNoneQuery($sql);	
		

	// }

}
?>