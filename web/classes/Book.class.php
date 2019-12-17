<?php 
class Book extends DB{

	private $_page_size =5;//Một trang hiển hị 5 cuốn sách
	private $_page_count;
	
	public function getRand($n){
		$sql="select masp, tensp,gia, hinh from sach order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	



	
	public function getByPubliser($manhaxb)
	{
		
	}
	public function delete($book_id)
	{
		$sql="delete from book where book_id=:book_id ";
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
		
		return $this->exeQuery($sql);
	}
	
	public function search($currPage=1)
	{
		$key = Utils::getIndex("key");
		$arr = array(":book_name"=>"%". $key ."%");
		
		$offset = ($currPage -1) * $this->_page_size;
		$sql1="SELECT
				Count(*)
				FROM
				category
				INNER JOIN book ON book.cat_id = category.cat_id
				INNER JOIN publisher ON book.pub_id = publisher.pub_id
				where book_name like :book_name	";
				$n  = $this->count($sql1, $arr);
				$this->_page_count = ceil($n/$this->_page_size);
		$sql="SELECT
				book.book_id,
				book.book_name,
				book.description,
				book.price,
				book.img,
				book.pub_id,
				book.cat_id,
				category.cat_name,
				publisher.pub_name
				FROM
				category
				INNER JOIN book ON book.cat_id = category.cat_id
				INNER JOIN publisher ON book.pub_id = publisher.pub_id
				where book_name like :book_name	
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

}
?>