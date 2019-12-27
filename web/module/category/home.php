<?php
 $mal = getIndex('maloai');

$cate = new Category();

 ?>
 <div class="content">
<div class="content-top-in">
						<?php $list = $cate->laytheoloai_($mal);

						 foreach ($list as $key => $r) {
						 	
								?>
						<div class="col-md-3 md-col">
							
							<div class="col-md">
								
						<a href="index.php?mod=book&ac=detail&idsp=<?php echo $r["masp"]; ?>">

									<img style="height: 157px;" src="images/book/<?php echo $r["hinh"]; ?>" alt="" />
								</a>	
								<div class="top-content">
									<h5><a href="index.php?mod=book&ac=detail&idsp=<?php echo $r["masp"]; ?>">
										<?php
										echo $r["tensp"];
										
										 ?>
									</a></h5>
									<div class="white">
				<a href="index.php?mod=book&ac=detail&idsp=<?php echo $r["masp"]; ?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">Xem Chi Tiết</a>
										<p class="dollar">
											<span class="in-dollar"><?php echo number_format($r["gia"]); ?></span></p>
										<div class="clearfix"></div>
									</div>

								</div>	
														
							</div>
						
						</div>
					<?php }
					?>
				</div>
			</div>