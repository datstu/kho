<?php
$book = new Book();
$page = Utils::getIndex("page", 1);

$data = $book->getAll($page);
//print_r($data);
$page_count = $book->getPageCount();


?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
					
						
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Tên Hàng</th>
								   <th>Giá</th>
								   <th>Loại</th>
								   <th>Nhà Cung Cấp</th>
								   <th>Column 5</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<!-- <div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div> -->
										
										<div class="pagination">
											<a href="index.php?mod=book&page=1" title="First Page">&laquo; First</a><a href="index.php?mod=book&page=<?php  if($page<=1) $n = 1;
											else $n =$page -1; echo $n; ?>" title="Previous Page">&laquo; Previous</a>
                                            <?php
											for($i=1; $i<= $page_count; $i++)
											{ $c =" number ";
											  if ($i==$page) $c .=" current ";?>
											<a href="index.php?mod=book&page=<?php echo $i;?>" class="<?php echo $c;?>" 
                                            	title="<?php echo $i;?>"><?php echo $i;?></a>
											<?php
											}
											?>
											<a href="index.php?mod=book&page=<?php  $n =$page +1; echo $n; ?>"
											 title="Next Page">Next &raquo;</a>
											<a href="index.php?mod=book&page=<?php echo $page_count; ?>" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
                            <?php 
							foreach( $data as $r)
							{?>
								<tr>
									<td><input type="checkbox" /></td>
								<td><a href="#" title="title"><?php echo $r["tensp"];?>
                                    </a></td>
                                    <td><?php echo number_format($r["gia"]);?> VND</td>
									<td><?php echo $r["tenloai"];?></td>
									<td><?php echo $r["tenncc"];?></td>
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=book&ac=edit&id=<?php echo $r["masp"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>&nbsp;&nbsp;
										 <a onclick="return confirm('Are you want to delete?')"
										  href="index.php?mod=book&ac=delete&id=<?php echo $r["masp"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->