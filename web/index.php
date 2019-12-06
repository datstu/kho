<?php
include "config/config.php";
include ROOT."/inc/function.php";
// if (!isset($_SESSION)) session_start();
 spl_autoload_register("loadClass");
// $db= new Db();
//$cart = new Cart();

?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include "inc/head.php";
	?>
</head>

<body>
  <!--header-->
	<div class="header">
		<?php
		include "inc/header.php";
	?>
	</div>
	<div class="banner-mat">
		<div class="container">
			<?php include "inc/banner_container.php";?>
		</div>
	</div>
		<!---->
		<div class="container">
			<div class="content">
				<?php
				include "mod.php";
				?>
			</div>
		</div>
		<!---->
		<div class="footer">
			<?php
				include "inc/footer.php";
				?>
		</div>
</body>
</html>