<?php
class Category extends Db{
	
	
	public function delete($cat_id)
	{
		$sql="delete from category where cat_id=:cat_id ";
		$arr =  Array(":cat_id"=>$cat_id);
		return $this->exeNoneQuery($sql, $arr);	
	}
	public function laytheoloai($ml)
	{
		
		$sql="select * from sach where maloai = '$ml' order by rand() limit 0, 3";
		return $this->exeQuery($sql);	
	}
	public function laytheoloai_($ml)
	{	
		
		$sql="select sach.* from sach join loai on sach.maloai = loai.maloai where tenloai = '$ml'";
		return $this->exeQuery($sql);	
	}
	public function getById($cat_id)
	{
		$sql="select loai.* 
			from loai
			where  loai.maloai=:cat_id ";
		$arr = array(":cat_id"=>$cat_id);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from loai");
	}
	
	public function saveEdit()
	{
		$id =Utils::postIndex("maloai", "");
		$name =Utils::postIndex("tenloai", "");
		if ($id =="" || $name=="") return 0;//Error
		$sql="update loai set tenloai=:name where maloai=:id ";
		$arr = array(":name"=>$name, ":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$id =Utils::postIndex("maloai", "");
		$name =Utils::postIndex("tenloai", "");
		if ($id =="" || $name=="") return 0;//Error
		$sql="insert into loai(maloai, tenloai) values(:cat_id, :cat_name) ";
		$arr = array(":cat_id"=>$id, ":cat_name"=>$name);
		return $this->exeNoneQuery($sql, $arr);
		
	}

}
?>