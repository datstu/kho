<?php 
class Book extends DB{

	private $_page_size =4;//Một trang hiển hị 5 cuốn sách
	private $_page_count;
	private $_timthay;

	public function update($id,$data,$file){
		
		
		//print_r($data);
		
		$masp = $data["masp"];
		$tensp = $data["tensp"];
		$mota = $data["content"];
		$mancc = $data["mancc"];
		$gia = $data["gia"];
		$maloai = $data["maloai"];
		$err = "";
		$hinh = $file['fileUpload']['name'];
		
			if($masp =='' || $tensp =='' ||  $mota =='' ||  $gia =='' ||  $maloai =='' ){
				 $err .="Vui lòng không bỏ trống, và chọn đầy đủ thông tin";
				 
			}else {
				if(!empty($hinh)){
				if($file['fileUpload']['error'] > 0){
			
						$err .= "Upload lỗi rồi. ";
			
					}else {
						move_uploaded_file($file['fileUpload']['tmp_name'], '../images/book/' . $file['fileUpload']['name']);

					}

				}	
			
        	}
			
 		if($err ==""){
 			
 			$sql="UPDATE sach SET
 			masp = '$masp',
 			tensp ='$tensp',
 			mota = '$mota',
 			gia = '$gia',
 			hinh = '$hinh',
 			mancc = '$mancc',
 			maloai = '$maloai'
		 where masp = '$id' ";
		
		 return $this->exeNoneQuery($sql);	
		
		}
		else { echo  $err;
		}
	}
	
	public function insert_book($data,$file){
		
		
		//print_r($data);
		
		$masp = $data["masp"];
		$tensp = $data["tensp"];
		$mota = $data["content"];
		$mancc = $data["mancc"];
		$gia = $data["gia"];
		$maloai = $data["maloai"];
		$err = "";

		if($file['fileUpload']['error'] > 0){
			$err .= "Upload lỗi rồi. ";
			$hinh='';

		}else{
			move_uploaded_file($file['fileUpload']['tmp_name'], '../images/book/' . $file['fileUpload']['name']);
        // echo "upload thành công <br/>";
        // echo 'Dường dẫn: upload/' . $file['fileUpload']['name'] . '<br>';
        // echo 'Loại file: ' . $file['fileUpload']['type'] . '<br>';
        // echo 'Dung lượng: ' . ((int)$file['fileUpload']['size'] / 1024) . 'KB';
        $hinh = $file['fileUpload']['name'];
		}
			if($masp =='' || $tensp =='' ||  $mota =='' ||  $gia =='' ||  $maloai =='' ){
				 $err .="Vui lòng không bỏ trống, và chọn đầy đủ thông tin";
				 
			}
 		if($err ==""){
 			
 			$sql="insert into sach (masp,tensp,mota,gia,hinh,mancc,maloai)
		 values('$masp','$tensp','$mota','$gia','$hinh','$mancc','$maloai') ";
		
		 return $this->exeNoneQuery($sql);	
		
		}
		else { echo  $err;
		}
	}


	public function getRand($n){
		$sql="select masp, tensp,gia, hinh from sach order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	



	public function layTheoloai($maloai)
	{
		$sql="select tenloai from loai where maloai ='$maloai' ";
		
		 $x =  $this->exeQuery($sql);	
		 foreach ($x as $key => $r){
		 	$tenloai  = $r["tenloai"];
         }
         return $tenloai;
		
	}
	
	
	public function delete($book_id)
	{
		$sql="delete from sach where masp=:book_id ";
		$arr =  Array(":book_id"=>$book_id);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getDetail($n){
		$sql="select * from sach where masp='$n'  ";
		return $this->exeQuery($sql);	
	}
	
	public function getAll($currPage=1)
	{
		$offset = ($currPage -1) * $this->_page_size;
		 $sql1="SELECT
				Count(*)
		 		FROM
	 		loai
		 		INNER JOIN sach ON sach.maloai = loai.maloai
		 		INNER JOIN nhaxb ON sach.mancc = nhaxb.mancc";
				$n  = $this->count($sql1);
				//echo $n;
				$this->_page_count = ceil($n/$this->_page_size);
		$sql="SELECT
				sach.masp,
				sach.tensp,
				sach.mota,
				sach.gia,
				sach.hinh,
				sach.mancc,
				sach.maloai,
				loai.tenloai,
				nhaxb.tenncc
				FROM
				loai
				INNER JOIN sach ON sach.maloai = loai.maloai
				INNER JOIN nhaxb ON sach.mancc = nhaxb.mancc
				limit $offset, " . $this->_page_size;
				//số dòng cần lấy page_size tính từ dòng thứ offset
		return $this->exeQuery($sql);
	}
	
	public function search($currPage=1)
	{
		$key = requestIndex("key");
		
		$arr = array(":book_name"=>"%". $key ."%");
		
		$offset = ($currPage -1) * $this->_page_size;
		$sql1="SELECT
				Count(*)
				FROM
				loai
				INNER JOIN sach ON sach.maloai = loai.maloai
				INNER JOIN nhaxb ON sach.mancc = nhaxb.mancc
				where tensp like :book_name	";
				$this->_timthay = $this->count($sql1, $arr);
				$this->_page_count = ceil($this->_timthay/$this->_page_size);
		$sql="SELECT
				sach.tensp,
				sach.masp,
			sach.mota,
			sach.gia,
				sach.hinh,
				sach.maloai,
				sach.mancc,
				loai.tenloai,
				nhaxb.tenncc
				FROM
				loai
				INNER JOIN sach ON sach.maloai = loai.maloai
				INNER JOIN nhaxb ON sach.mancc = nhaxb.mancc
				where tensp like :book_name	
				limit $offset, " . $this->_page_size;
						
		return $this->exeQuery($sql, $arr);
	}
	
	public function count($sql, $arr=array())
	{
		return $this->countItems($sql, $arr);
	}
	
	public function getPageCount()
	{
		return $this->_page_count;	
	}
	public function timthay()
	{
		return $this->_timthay;	
	}

}
?>