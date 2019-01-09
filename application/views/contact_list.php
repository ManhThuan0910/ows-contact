<?php $this->load->view('header'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<?php 
				// if (isset($_GET["controller"])==false) {
				// 	include_once "view/backend/chart.php";
				// } 
				// if(file_exists($controller))
				// 	include $controller;
		?>
		<div class="row justify-content-center">
			<div class="col-md-11" style="margin-left: 52px;">
				<div style="margin: 5px 0px;">
					<a href="contact/add" class="btn btn-success">Thêm</a>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Danh Sách Liên Lạc</div>
					<div class="panel-body">
						<table class="table table-bordered table-hover">
							<tr style="background-color:#F7FAFC;">
								<!-- <th style="width: 200px" class="text-center">Họ Tên</th> -->
								<th style="width: 200px" class="text-center">#</th>
								<th style="width: 200px" class="text-center">Tên</th>
								<th style="width: 200px" class="text-center">Số Điện Thoại</th>
								<th style="width: 200px" class="text-center">Thao Tác</th>
							</tr>
							<?php 
									// foreach($arr as $rows)
									// {
							foreach ($contacts as $idx => $item):
								?>
								<tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>">

									<td class="text-center"><?= $idx +1//echo $rows->TaiKhoan; ?></td>
									<td class="text-center"><?= $item->name //echo $rows->TaiKhoan; ?></td>
									<td class="text-center"><?= $item->phone1 //echo $rows->MatKhau; ?></td>
									<td style="text-align: center;">
										<a style="color: white;" href="contact/edit/<?= $item->id ?>" class="btn btn-info">Edit</a>
										<a style="color: white;" onclick="return window.confirm('Bạn Có Chắc Chắn Muốn Xóa?');" href="contact/del/<?= $item->id ?>" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
						<ul class="pagination pull-right">
							<li><a>Trang</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	



	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>

<?php $this->load->view('footer'); ?>