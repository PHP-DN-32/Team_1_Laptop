<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Sản phẩm</h5>
			<span>Quản lý sản phẩm</span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?php echo URL_BASE?>admin/index/form">
					<img src="<?php echo URL_BASE;?>/templates/admin/images/icons/control/16/add.png" />
					<span>Thêm mới</span>
				</a></li>
			
				<li>
					<a href="product/?feature=1.html">
						<img src="<?php echo URL_BASE;?>/templates/admin/images/icons/control/16/feature.png" />
						<span>Tiêu biểu</span>
					</a>
				</li>

				<li><a href="<?php echo URL_BASE?>admin/index/product">
					<img src="<?php echo URL_BASE;?>/templates/admin/images/icons/control/16/list.png" />
					<span>Danh sách</span>
				</a></li>
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<div class="widget">
	<div class="title">
		<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
		<h6>Danh sách Giao dịch</h6>
		<div class="num f12">Tổng số: <b>15</b></div>
	</div>

	<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">

		<thead class="filter"><tr><td colspan="9">
			<form class="list_filter form" action="index.php/admin/tran.html" method="get">
				<table cellpadding="0" cellspacing="0" width="100%"><tbody>
					
					<tr>
						<td class="label" style="width:60px;"><label for="filter_id">Mã số</label></td>
						<td class="item"><input name="id" value="" id="filter_id" type="text" style="width:95px;" /></td>

						<td class="label" style="width:60px;"><label for="filter_type">Hình thức</label></td>
						<td class="item">
							<select name="payment">
								<option value=""></option>
								<option value='nganluong' >Ngân lượng</option>
								<option value='baokim' >Bảo kim</option>
								<option value='dathang' >Đặt hàng</option>
							</select>
						</td>

						<td class="label" style="width:60px;"><label for="filter_created">Từ ngày</label></td>
						<td class="item"><input name="created" value="" id="filter_created" type="text" class="datepicker" /></td>


						<td colspan='2' style='width:60px'>
							<input type="submit" class="button blueB" value="Lọc" />
							<input type="reset" class="basic" value="Reset" onclick="window.location.href = 'index.php/admin/tran.html'; ">
						</td>

					</tr>

					<tr>
						<td class="label" style="width:60px;"><label for="filter_user">Thành viên</label></td>
						<td class="item"><input name="user" value="" id="filter_user" class="tipS" title="Nhập mã thành viên" type="text" /></td>

						<td class="label"><label for="filter_status">Giao dịch</label></td>
						<td class="item">
							<select name="status">
								<option></option>
								<option value='0' >Đợi xử lý</option>
								<option value='1' >Thành công</option>
								<option value='2' >Hủy bỏ</option>
							</select>
						</td>

						<td class="label"><label for="filter_created_to">Đến ngày</label></td>
						<td class="item"><input name="created_to" value="" id="filter_created_to" type="text" class="datepicker" /></td>

						<td class="label"></td>
						<td class="item"></td>
					</tr>

				</tbody></table>
			</form>
		</td></tr></thead>
		<thead>
			<tr>
				<td style="width:10px;"><img src="<?php echo URL_BASE;?>/templates/admin/images/icons/tableArrows.png" /></td>
				<td style="width:60px;">Mã số</td>
				<td style="width:175px;">Thành viên</td>
				<td style="width:90px;">Số tiền</td>
				<td>Hình thức</td>
				<td style="width:100px;">Giao dịch</td>
				<td style="width:75px;">Ngày tạo</td>
				<td style="width:55px;">Hành động</td>
			</tr>
		</thead>

		<tfoot class="auto_check_pages">
			<tr>
				<td colspan="8">
					<div class="list_action itemActions">
						<a href="#submit" id="submit" class="button blueB" url="admin/tran/del_all.html">
							<span style='color:white;'>Xóa hết</span>
						</a>
					</div>

					<div class='pagination'>
						&nbsp;<strong>1</strong>&nbsp;<a href="admin/tran/index/10">2</a>&nbsp;<a href="admin/tran/index/10">Trang kế tiếp</a>&nbsp;			            </div>
					</td>
				</tr>
			</tfoot>
			<tbody class="list_item">
			<?php
			if (count($this->arrUser) > 0) {

				foreach ($this->arrUser as $key => $value) {
					echo '
					<tr class="row_12">
					<td><input type="checkbox" name="id[]" value="12" /></td>
					
					<td class="textC">'.$value['id'].'</td>
					
					<td>
					'.$value['name'].'						(Khách						)
					</td>
					
					<td class="textR red">10,000,000</td>
					
					<td>
					nganluong					</td>
					
					
					<td class="status textC">
					<span class="completed">
					Thành công						</span>
					</td>
					
					<td class="textC">'.$value['created'].'</td>
					
					<td class="textC">
					<a href="admin/tran/view/12.html" class="lightbox">
					<img src="'.URL_BASE .'templates//admin/images/icons/color/view.png' .'" alt=""/>
					</a>

					<a href="admin/tran/del/12.html" title="Xóa" class="tipS verify_action" >
					<img src="'.URL_BASE .'templates//admin/images/icons/color/delete.png' .'" alt=""/>
					</a>
					</td>
					</tr>';
				}
			}
			?>
			
			</tbody>
			
		</table>
	</div>