<?php
if (!isset($_SESSION)) session_start();
$u = isset($_POST['u'])?trim($_POST['u']):'';
$p = isset($_POST['p'])? $_POST['p']:'';

$obj = new PDO("mysql:host=localhost; dbname=linhkien", 'root', '');
		$obj->query('set names "utf8"');
					$sql="select * from quantri where username=? and matkhau=?";
		$arr = array($u, md5($p));
		$stm = $obj->prepare($sql);
		$stm->execute($arr);
		$n = $stm->rowCount();

		if ($n==0) // sai
		 {	//header('location:login.html'); exit;
		 echo "oke";
		 }

		$_SESSION['login'] = $stm->fetch(PDO::FETCH_ASSOC);
		header('location:index.php?mod=book&ac=home');
		print_r($_SESSION);

