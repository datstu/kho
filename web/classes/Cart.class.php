<?php
class Cart extends Book{
	private $_cart;
	private $_num_item =0;
	public function  __construct()
	{
		if(!isset($_SESSION["cart"])) $this->_cart= array();
		else $this->_cart = $_SESSION["cart"];
		$this->_num_item = array_sum($this->_cart);
		
	}
	
	public function getNumItem()
	{
		return $this->_num_item;	
	}
	public function __destruct()
	{
		$_SESSION["cart"] = $this->_cart;	
	}
	/*
	Them san pham có mã $id và số lương $quantity vào giỏ hàng
	*/
	
	
	public function add($id, $quantity=1)
	{	
		if ($id=="" || $quantity<1) return;
		if (!$this->bookExist($id)) return;
		print_r($this->_cart);		
		if (isset($this->_cart[$id]))
			$this->_cart[$id]+=	$quantity;
		else $this->_cart[$id]=	$quantity;
		$_SESSION["cart"] = $this->_cart;	
		$this->_num_item = array_sum($this->_cart);
		echo "Da them $id - $quantity ";
		echo "<script language=javascript>window.location='index.php?mod=cart';</script>";//Chuyển trình duyệt web tới trang hiển thị cart
	}
	
	public function remove($id)
	{
		unset($this->_cart[$id]);
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	public function edit($id, $quantity)
	{
		$this->_cart[$id]	= $quantity;
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	//hàm cũ
	// public function show()
	// {
	// 	if (Count($this->_cart)==0) 
	// 	{	echo "Giỏ hàng rỗng";
	// 		return;
	// 	}
	// 	echo "<table border=\"1\"><tr><td>ID</td><td>Số lượng</td></tr>";
	// 	foreach($this->_cart as $id=>$quantity)
	// 	{
	// 			echo "<tr><td>$id</td><td>$quantity</td></tr>";
	// 	}
		
	// 	echo "</table>";	
	// 	$this->setCartInfo($this->getNumItem());
	// 	//Update số lượng item của cart trong header.php. Có thể không sử dụng method này nếu mỗi lần thêm xong, chuyển trang về mod=cart.
		
	// }
	public function bookExist($book_id)
	{
		$sql="select * from sach where masach = '$book_id' ";
		$temp = new Db();
		$temp->exeQuery($sql);
		if ($temp->getRowCount()==0) return false;
		return true;
	}
	// public function getbook($book_id)
	// {
	// 	$sql="select * from sach where masach = '$book_id' ";
	// 	return $this->exeQuery($sql);	
	// }
	public function show()
	{
		$b = new Book();
		if (Count($this->_cart)==0) 
		{	echo "Giỏ hàng rỗng";
			return;
		}
		echo '<table  border="10"><tr><td>Hình ảnh</td><td>Tên Sp</td><td>Số lượng</td></tr>';
		foreach($this->_cart as $id=>$quantity)
		{
			
			$sp = $b->getDetail($id);
			foreach ($sp as $key => $r){

				echo "<tr>
				
				<td>
				".'<img height="200px" src="images/book/'.$r["hinh"].'" alt="'.$r["hinh"].'">'.'</td>
				<td >'.$r["tensach"].'</td>
				<td>'.$quantity.'</td>
				 <td><a href="" >Delete </a>'."\n".'<a href="" >Update </a>'.' 
				 </td>      
				</tr>';
			}
				
		}
		
		echo "</table>";	
		$this->setCartInfo($this->getNumItem());
		//Update số lượng item của cart trong header.php. Có thể không sử dụng method này nếu mỗi lần thêm xong, chuyển trang về mod=cart.
		
	}
	
	function setCartInfo( $quantity=0, $id="cart_sumary")
	{
		echo "<script language=javascript> document.getElementById('$id').innerHTML =$quantity; </script>";
	}

}
?>