<?php 
$pub = new pub();
$page = Utils::getIndex("page", 1);

$data = $pub->getAll();

 ?>
 <form action="index.php?mod=pub&ac=add" method="post">
<fieldset>
<legend>Thêm nhà cung cấp</legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã nhà cung cấp</td>
    <td width="77%"><input type="text" name="mancc" ></td>
  </tr>
  <tr>
    <td>Tên Nhà cung cấp</td>
    <td><input type="text" name="tenncc" ></td>
  </tr>
  <tr>
    <td colspan="2">


    <input type="submit" value="Thực Hiện">
	<?php
    
	?></td>
    </tr>
</table>
</fieldset>
</form>
 <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Tên nhà cung cấp</th>
								  
								   <th>Column 5</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										
										
									
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
								<td><a href="#" title="title"><?php echo $r["tenncc"];?>
                                    </a></td>
                                    
									
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=pub&ac=edit&id=<?php echo $r["mancc"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>&nbsp;&nbsp;
										 <a onclick="return confirm('Are you want to delete?')"
										  href="index.php?mod=pub&ac=delete&id=<?php echo $r["mancc"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->