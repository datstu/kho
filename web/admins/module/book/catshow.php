<?php
$data = $category->getAll();
//print_r($data);
?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Tên Loại</th>
								  
								   <th>Thao tác</th>
								</tr>
								
							</thead>
						 
					<!-- 		<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot> -->
						 
							<tbody>
                            <?php 
							foreach( $data as $r)
							{?>
								<tr>
									<td><input type="checkbox" /></td>
								<td><a href="#" title="title"><?php echo $r["tenloai"];?>
                                    </a></td>
                                   
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=book&group=cat&ac=edit&id=<?php echo $r["maloai"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>&nbsp;&nbsp;
										 <a href="index.php?mod=book&group=cat&ac=delete&id=<?php echo $r["maloai"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->