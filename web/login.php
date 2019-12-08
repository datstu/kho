<?php
include "config/config.php";
include ROOT."/inc/function.php";
// if (!isset($_SESSION)) session_start();
 spl_autoload_register("loadClass");
// $db= new Db();
//$cart = new Cart();

?>
<?php
if (!isset($_SESSION)) session_start();
$u = isset($_POST['u'])?trim($_POST['u']):'';
$p = isset($_POST['p'])? $_POST['p']:'';
// $obj = new PDO("mysql:host=localhost; dbname=bookstore", 'root', '');
// $obj->query('set names "utf8"');
// $sql="select * from admin where username=? and password=?";
// $arr = array($u, md5($p));
// $stm = $obj->prepare($sql);
// $stm->execute($arr);
// $n = $stm->rowCount();
	$acc= new Account();
	//$stm= "";
	$lg =$acc -> login($u, $p);
	//echo $lg->_numRow;

if ($lg== false) // sai
{	
	header('location:login.html'); exit;
}

		// foreach ($lg as  $value) {
			
		// 	foreach ($value as $key2 => $val) {
		// 	//echo $key2."<br>";
		// 	$_SESSION['login'][$key2] = $value[$key2];

		// }
		// }

		
//print_r($_SESSION);
//header('location:index.php?mod=book&ac=home');
 echo "<pre>";
 print_r($lg);
//  echo $lg[0]["hoten"];