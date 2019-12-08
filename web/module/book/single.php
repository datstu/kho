
			
		 <?php
  $masp= isset($_GET["idsp"])?$_GET["idsp"]:"";
					


					?> 
<?php 	
					$sp = $book->getDetail($masp);

					
						 ?>

					<div class="single">
<div class="col-md-9 top-in-single">
<?php foreach ($sp as $key => $z) {
								?>
					<div class="col-md-5 single-top">	
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
<img class="etalage_thumb_image img-responsive" src="images/book/<?php echo $z["hinh"]; ?>" alt="" >
									<img class="etalage_source_image img-responsive" src="images/book/<?php echo $z["hinh"]; ?>" alt="" >
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="images/book/<?php echo $z["hinh"]; ?>" alt="" >
								<img class="etalage_source_image img-responsive" src="images/book/<?php echo $z["hinh"]; ?>" alt="" >
							</li>
							
						</ul>

					</div>	
					
					<?php }foreach ($sp as $key => $r) {
								?>
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4><?php echo $r["tensach"]; ?></h4>
							<div class="para-grid">
								<span  class="add-to"><?php echo $r["gia"]; ?>đ</span>
								<!-- bat dau	login -->
										

									<a href="#login-box" class="login-window button">THÊM VÀO GIỎ</a>
        <div id="login-box" class="login">
            <p class="login_title"> Đăng nhập</p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <form method="post" class="login-content" action="#">
            <label class="username">
            <span>Tên hoặc email</span>
            <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
            </label>
            <label class="password">
            <span>Mật khẩu</span>
            <input id="password" name="password" value="" type="password" placeholder="Password">
            </label>
            <button class="button submit-button" type="button">Đăng nhập</button>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>        
            </form>
        </div>	
								<!-- 	KET THUC LOGIN	 -->



								<div class="clearfix"></div>
							 </div>
							<h5></h5>
							<!-- <div class="available">
								<h6>Tùy chọn có sẳn</h6>
								<ul>
									<li>Màu sắc:
										<select>
										<option>Silver</option>
										<option>Black</option>
										<option>Dark Black</option>
										<option>Red</option>
									</select></li>
								<li>Kích tước:<select>
									<option>Large</option>
									<option>Medium</option>
									<option>small</option>
									<option>Large</option>
									<option>small</option>
								</select></li>
								 <li>Số lượng:<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select></li> 
							</ul>
						</div> -->
							<p><?php echo $r["mota"]; }?></p>
							
								<!-- <a href="#" class="hvr-shutter-in-vertical ">More details</a> -->
							
						</div>
					</div>
				<div class="clearfix"> </div>
				<div class="content-top-in">
						<div class="col-md-4 top-single">
							<div class="col-md">
								<img  src="images/pic8.jpg" alt="" />	
								<div class="top-content">
									<h5>Mascot Kitty - White</h5>
									<div class="white">
										<a href="?mod=cart&ac=home&idsp=<?php echo $r["gia"]; ?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">Thêm vào giỏ hàng</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-4 top-single">
							<div class="col-md">
								<img  src="images/pic9.jpg" alt="" />	
								<div class="top-content">
									<h5>Mascot Kitty - White</h5>
									<div class="white">
										<a href="#login-box" class="login-window button">Thêm vào giỏ hàng</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-4 top-single-in">
							<div class="col-md">
								<img  src="images/pic10.jpg" alt="" />	
								<div class="top-content">
									<h5>Mascot Kitty - White</h5>
									<div class="white">
										<a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">Thêm vào giỏ hàng</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						
					<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bottom">
						<h4>Loại</h4>
						<ul>
						<li><a href="#"><i> </i>Fusce feugiat</a></li>
						<li><a href="#"><i> </i>Mascot Kitty</a></li>
						<li><a href="#"><i> </i>Fusce feugiat</a></li>
						<li><a href="#"><i> </i>Mascot Kitty</a></li>
						<li><a href="#"><i> </i>Fusce feugiat</a></li>
						</ul>
					</div>
					<div class="single-bottom">
						<h4>Bán chạy</h4>
						<ul>
						<li><a href="#"><i> </i>feugiat(5)</a></li>
						<li><a href="#"><i> </i>Fusce (4)</a></li>
						<li><a href="#"><i> </i> feugiat (4)</a></li>
						<li><a href="#"><i> </i>Fusce (4)</a></li>
						<li><a href="#"><i> </i> feugiat(2)</a></li>
						</ul>
					</div>
					<div class="single-bottom">
						<h4>Cùng Loại</h4>
							<div class="product">
								<img class="img-responsive fashion" src="images/st1.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Consectetuer adipiscing elit</a>
								<span class="price price-in"><small>$500.00</small> $400.00</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product">
								<img class="img-responsive fashion" src="images/st2.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Consectetuer adipiscing elit</a>
								<span class="price price-in"><small>$500.00</small> $400.00</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product">
								<img class="img-responsive fashion" src="images/st3.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Consectetuer adipiscing elit</a>
								<span class="price price-in"><small>$500.00</small> $400.00</span>
							</div>
							<div class="clearfix"> </div>
							</div>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
	  