<?php 
class CartDetail extends DB{
	private $tong=0;
	
	public function insert_Cart($mahd,$a){

			 	
		foreach ($a as $key => $value) {
			// 		echo "<br><pre>";
			// print_r($value);
			
			
			
			  $b = new Book();
		  $getBook = $b-> getDetail($key);
				  foreach ($getBook as $k => $r) {

				 			$gia = $r["gia"] *$value;
				 			$this->tong+=$gia;

				  }
			 	

				  	//echo "<br>".$mahd.'/'.$key.'/'.$value.'/'.$gia;


					 $sql = "INSERT INTO  chitiethd (mahd,masach,soluong,gia)
					  VALUES ('$mahd','$key','$value','$gia')";
					   $this->exeNoneQuery($sql);
					 
				}
		
		// $sql = " INSERT INTO  chitiethd (mahd,masach,soluong,gia)
		// 							 VALUES ('48','td02','3','1000')";
		// 			  return $this->exeNoneQuery($sql);
	}
	public function tongGia(){
		 return $this->tong;

	}

}
			
	
	

?>