<?php 
class Order extends DB{

	public function show_Order($e)
	{
		$sql="SELECT * from hoadon  where email=:e ";
		$arr =  Array(":e"=>$e);
		return $this->exeQuery($sql,$arr);	
	}
		public function show_Order_desc($e) // xuat ra thang co mahd lon nhat (gan nhat)
	{
		$sql="SELECT * from hoadon  where email=:e ORDER BY mahd DESC LIMIT 1";
		$arr =  Array(":e"=>$e);
		return $this->exeQuery($sql,$arr);	
	}

	public function KH_Exist($email)
	{
		$sql="SELECT * from khachhang where email = '$email' ";
		
		return $this->exeQuery($sql);	
	}
	
	public function insert_Oder($id){


		$list =$this ->KH_Exist($id);

		foreach ($list as $key => $r) {
			//echo "<pre>";
			//print_r($r);
			
			
			 $email = $r["email"];
		 $ten = $r["tenkh"];
			 $diachi = $r["diachi"];
			 $dt = $r["dienthoai"];
			 $ngaydat= date('Y-m-d H:i:s');
		 //$ngaynhan = date("Y-m-d ", strtotime("+1 week")) ;
			
		 //echo $dt;
		$sql="INSERT INTO  hoadon (email,tennguoinhan,diachinguoinhan,dienthoainguoinhan,ngaydat)
		VALUES ('$email','$ten','$diachi','$dt','$ngaydat')";
		return $this->exeNoneQuery($sql);	
		}
		
// INSERT INTO `hoadon`( `email`, `tennguoinhan`, `diachinguoinhan`, `dienthoainguoinhan`, `ngaydat`)
//         VALUES ('d12c1@gmail.com','dat','sG','aas','2019-12-14 10:17:04')

		
	
		
	}
	

}
?>