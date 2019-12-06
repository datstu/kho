
<div class="content">
				<div class="content-top">
					<h3 class="future">Sản phẩm nổi bật</h3>
					<div class="content-top-in">
						<?php $list = $book->getRand(4);
						 foreach ($list as $key => $r) {
								?>
						<div class="col-md-3 md-col">
							
							<div class="col-md">
								
						<a href="index.php?mod=book&ac=detail&idsp=<?php echo $r["masach"]; ?>">

									<img style="height: 157px;" src="images/book/<?php echo $r["hinh"]; ?>" alt="" />
								</a>	
								<div class="top-content">
									<h5><a href="index.php?mod=book&ac=detail&idsp=<?php echo $r["masach"]; ?>">
										<?php
										echo $r["tensach"];
										
										 ?>
									</a></h5>
									<div class="white">
				<a href="index.php?mod=book&ac=detail&idsp=<?php echo $r["masach"]; ?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">Xem Chi Tiết</a>
										<p class="dollar">
											<span class="in-dollar"><?php echo number_format($r["gia"]); ?></span></p>
										<div class="clearfix"></div>
									</div>

								</div>	
														
							</div>
						
						</div>
					<?php }
					?>
						
						
						
						
					<div class="clearfix"></div>
					</div>
				</div>
				<!---->
				<div class="content-middle">
					<h3 class="future">Thương hiệu</h3>
					<div class="content-middle-in">
					<ul id="flexiselDemo1">			
						<li><img src="images/msi.jpg"/></li>
						<li><img src="images/kingston.jpg"/></li>
						<li><img src="images/seagate.jpg"/></li>
						<li><img src="images/asus.jpg"/></li>
					
					</ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

					</div>
				</div>
				<!---->
				
				<div class="content-bottom">
					<h3 class="future">Linh Kiện Các Loại</h3>
					<div class="content-bottom-in">
						<ul id="flexiselDemo2">
						<?php $list = $book->getRand(4); foreach ($list as $key => $r) {
								?>
								
						<li><div class="col-md men">
								<a href="index.php?mod=book&ac=detail&idsp=<?php echo $r["masach"]; ?>" class="compare-in ">
									<img style="height: 284px;" src="images/book/<?php echo $r["hinh"]; ?>" alt="" />
								<div class="compare in-compare">
									<span>Xem chi tiết</span>
								</div></a>
								<div class="top-content bag">
									<h5><a href="single.php?idsp=<?php echo $r["masach"] ?>"><?php echo $r["tensach"] ?></a></h5>
									<div class="white">
										<a href="index.php?mod=cart&ac=home&idsp=<?php echo $r["masach"]; ?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">Thêm vào giỏ </a>
										<p class="dollar"><span class="in-dollar"><?php echo $r["gia"] ?>đ</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div></li>
						<?php } ?>
						
						
					
					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
					</div>
				</div>
				<ul class="start">
					<li ><a href="#"><i></i></a></li>
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>
					<li class="arrow"><a href="#">4</a></li>
					<li class="arrow"><a href="#">5</a></li>
					<li ><a href="#"><i  class="next"> </i></a></li>
				</ul>
			
			</div>	
				<!---->
				<!---->
				
				
			