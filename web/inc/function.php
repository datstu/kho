<?php
function loadClass($c)
{
	include ROOT."/classes/".$c.".class.php";
}

function getIndex($index, $value='')
{
	$data = isset($_GET[$index])? $_GET[$index]:$value;
	return $data;
}

function postIndex($index, $value='')
{
	$data = isset($_POST[$index])? $_POST[$index]:$value;
	return $data;
}

function requestIndex($index, $value='')
{
	$data = isset($_REQUEST[$index])? $_REQUEST[$index]:$value;
	return $data;
}
 function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));
 }
  function ranbuocSDT($str){

  	$err =false;
  	if($str =='')
  		{ echo "SDT không dược bỏ trống"; 
  		$err =true;
  }
  	else if(strlen($str) != 10){
  		echo "SDT phải đúng 10 ký tự.";
  		$err =true;
  	}
  	else if(!is_numeric($str)){
  		echo "Vui lòng nhập số";
  		$err =true;


  	}
    return $err;
 }
 function checkEmail($string)
{  
	if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
	 return true;
	return false;	
	
}