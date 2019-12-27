<?php
class pub extends Db{
	
	
	public function delete($cat_id)
	{
		$sql="delete from nhaxb where mancc=:cat_id ";
		$arr =  Array(":cat_id"=>$cat_id);
		return $this->exeNoneQuery($sql, $arr);	
	}
	public function laytheoloai($ml)
	{
		
		$sql="select * from sach where maloai = $ml ";
		return $this->exeQuery($sql);	
	}
	public function getById($id)
	{
		$sql="select * 
			from nhaxb
			where  nhaxb.mancc=:_id ";
		$arr = array(":_id"=>$id);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from nhaxb");
	}
	
	public function saveEdit($name,$id)
	{
		
		 
		$sql="update nhaxb set tenncc=:name where mancc=:id ";
		$arr = array(":name"=>$name, ":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$id =Utils::postIndex("mancc", "");
		$name =Utils::postIndex("tenncc", "");
		if ($id =="" || $name=="") return 0;//Error
		$sql="insert into nhaxb(mancc, tenncc) values(:cat_id, :cat_name) ";
		$arr = array(":cat_id"=>$id, ":cat_name"=>$name);
		return $this->exeNoneQuery($sql, $arr);
		
	}

}
?>