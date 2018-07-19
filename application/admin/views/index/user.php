            <div class="titleArea">
                <div class="wrapper">
                    <div class="pageTitle">
                        <h5>Bảng điều khiển</h5>
                        <span>Trang quản lý hệ thống</span>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách Thành viên</h6>
		 	<div class="num f12">Tổng số: <b>0</b></div>
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo URL_BASE;?>/templates/admin/images//icons/tableArrows.png" /></td>
					<td style="width:80px;">Mã số</td>
					<td>Tên</td>
					<td>Email</td>
					<td>Điện thoại</td>
					<td>Địa chỉ</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
				<tr>
					<td colspan="7">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'>
			               			            </div>
					</td>
				</tr>
			</tfoot>
 			
			<tbody>
				<!-- Filter -->
									<tr>
						<td><input type="checkbox" name="id[]" value="19" /></td>
						
						<td class="textC">19</td>
						
						
						<td><span title="Hoàng văn Tuyền" class="tipS">
							Hoàng văn Tuyền						</span></td>
						
						
						<td><span title="hoangvantuyencnt@gmail.com" class="tipS">
							hoangvantuyencnt@gmail.com						</span></td>
						
						<td>
							01686039488						</td>
						
						<td>
							111						</td>
						
						
						<td class="option">
							 <a href="user/edit/19.html" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo URL_BASE;?>/templates/admin/images//icons/color/edit.png" />
							</a>
							
							<a href="user/del/19.html" title="Xóa" class="tipS verify_action" >
							    <img src="<?php echo URL_BASE;?>/templates/admin/images//icons/color/delete.png" />
							</a>
						</td>
					</tr>
									<tr>
						<td><input type="checkbox" name="id[]" value="16" /></td>
						
						<td class="textC">16</td>
						
						
						<td><span title="Hoàng văn Tuyền" class="tipS">
							Hoàng văn Tuyền						</span></td>
						
						
						<td><span title="tuyenht90@yahoo.com" class="tipS">
							tuyenht90@yahoo.com						</span></td>
						
						<td>
							01686039488						</td>
						
						<td>
							111111						</td>
						
						
						<td class="option">
							 <a href="user/edit/16.html" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo URL_BASE;?>/templates/admin/images//icons/color/edit.png" />
							</a>
							
							<a href="user/del/16.html" title="Xóa" class="tipS verify_action" >
							    <img src="<?php echo URL_BASE;?>/templates/admin/images//icons/color/delete.png" />
							</a>
						</td>
					</tr>
					
				
			</tbody>
		</table>
		</form>
	</div>