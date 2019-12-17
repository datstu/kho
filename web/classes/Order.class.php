<?php 
class Order extends DB{
	
	
	public function xuLy_DH($type,$mahd)
	{
		$sql= "UPDATE hoadon SET 
		 		
		 		trangthai = $type 
		         
		      
					
					WHERE mahd = '$mahd' ";

		return $this->exeNoneQuery($sql);	

		
	}
 	public function delete_order($mahd,$masp)
	{
		$sql= "DELETE FROM chitiethd
					
					WHERE mahd = '$mahd' AND masp='$masp'";

		return $this->exeNoneQuery($sql);	

		
	}
		public function delete_order2($mahd)
	{
		$sql= "DELETE FROM hoadon
					
					WHERE mahd = '$mahd'";

		return $this->exeNoneQuery($sql);	

		
	}
	public function showOrder($e='1')
	{
		if($e == '1')
			{ $s= ""; $arr = Array();}
		else { 
			$s= " where khachhang.email=:e";//luu y dau cach truoc chu where
			$arr =  Array(":e"=>$e);
		}
		$sql="SELECT DISTINCT hoadon.*,chitiethd.*, sach.tensp,sach.mota,
		sach.hinh
		from khachhang JOIN  hoadon on  hoadon.email = khachhang.email
		 JOIN chitiethd on  chitiethd.mahd= hoadon.mahd 
		 JOIN sach on sach.masp = chitiethd.masp".$s;// xuat thong tin theo email nhan vao, neu khong co nhan dau vao thi hien thi tat ca
		  
		
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
			//rint_r($r);
			
			
			  $email = $r["email"];
		 $ten = $r["tenkh"];
			 $diachi = $r["diachi"];
			 $dt = $r["dienthoai"];
			 $ngaydat= date('Y-m-d H:i:s');
		 //$ngaynhan = date("Y-m-d ", strtotime("+1 week")) ;
			
		 //echo $dt;
		$sql="INSERT INTO  hoadon (email,tennguoinhan,diachinguoinhan,dienthoainguoinhan,ngaydat,trangthai)
		VALUES ('$email','$ten','$diachi','$dt','$ngaydat',0)";
		return $this->exeNoneQuery($sql);	
		}
		
// INSERT INTO `hoadon`( `email`, `tennguoinhan`, `diachinguoinhan`, `dienthoainguoinhan`, `ngaydat`)
//         VALUES ('d12c1@gmail.com','dat','sG','aas','2019-12-14 10:17:04')

		
	
		
	}
	

}
?>