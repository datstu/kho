
		<div class="header-top">
			<div class="container">	
			<div class="header-top-in">			
				<div class="logo">
					<a href="index.php"><img src="images/logo.jpg" alt=" " ></a>
				</div>
				<div class="header-in">
					<ul class="icon1 sub-icon1">
							<!-- <li  ><a href="wishlist.html">WISH LIST (0)</a> </li> -->
							<li  >
							<?php 
						if (isset($_SESSION['login']))
							{
								//echo $_SESSION['login']['hoten'];
								echo "<pre>";
							  print_r($_SESSION);
								echo "<a href='logout.php'>Thoat</a>";
							}
							else{ ?>
							<a href="login.html"> 
								
							 Tài Khoản
							 </a>
							<?php } ?>
							 </li>

							<!-- <li ><a href="#" > SHOPPING CART</a></li> -->
							<li > <a href="checkout.html" >Giỏ Hàng</a> </li>	
							<li><div class="cart">
									<a href="#" class="cart-in"> </a>
									<span> 0</span>
								</div>
								<ul class="sub-icon1 list">
						  <h3>Recently added items(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
					                <div class="list_img"><img src="images/14.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box1">
								  <div class="message1">
							   	     <div class="alert-close1"> </div> 
					                <div class="list_img"><img src="images/15.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">CartSubtotal : </div>
	                        	<div class="total_right">$250.00</div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="checkout.html">Check out</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
							</li>
						</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
		<div class="header-bottom">
		<div class="container">
			<div class="h_menu4">
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="index.php"><i> </i>Trang chủ</a></li>
											
						<li><a href="index.php?mod=account&ac=login" >  Đăng Nhập</a></li>            
						<li><a href="products.html" >Cpu</a></li>						  				 
						<li><a href="products.html" >Card</a>
						<ul class="drop">
							<li><a href="products.html">Card Đồ Họa</a></li>
							<li><a href="products.html">Card Âm thanh</a></li>
							<li><a href="products.html">Card Wifi</a></li>
							
						</ul>
						</li>
						<li><a href="products.html" >Main </a></li>
						<li><a href="products.html" >  Nguồn  </a></li>
						<li ><a href="#" >Các sản phẩm khác</a>
						<ul class="drop">
							<li><a href="products.html">Chuột</a></li>
							<li><a href="products.html">Tai nghe</a></li>
							<li><a href="products.html">Bàn phím</a></li>
							<li><a href="products.html">Loa</a></li>
							<li><a href="products.html">fan</a></li>
							<li><a href="products.html">Usb</a></li>
						</ul>
						</li> 
						<li><a href="contact.php" >Liên Hệ </a></li>
					
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div>
		</div>
		</div>

		<div class="header-bottom-in">
			<div class="container">
			<div class="header-bottom-on">
			<p class="wel"><a href="index.php?mod=account&ac=home">Chào bạn, bạn có thể đăng nhập hoặc tạo tài khoản ngay.</a></p>
			<div class="header-can">
				<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="facebook"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>					
						<li><a href="#"><i class="skype"> </i></a></li>
					</ul>	
					<div class="down-top">		
							<select class="in-drop">
							  <option value="Dollars" class="in-of">Dollars</option>
							  <option value="Euro" class="in-of">Euro</option>
							  <option value="Yen" class="in-of">Yen</option>
							</select>
					 </div>
					<div class="search">
						<form>
							<input type="text" value="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
							<input type="submit" value="">
						</form>
					</div>

					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	