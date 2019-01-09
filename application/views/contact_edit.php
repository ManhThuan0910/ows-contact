<?php $this->load->view('header'); ?>
<div class="row justify-content-center">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-success" style="margin-top: 120px">
			<div class="panel panel-heading">Thông Tin Liên Hệ</div>
			<div class="panel-body">
				<form method="post" class=" form-horizontal" action="/ows-contact/contact/save/<?= $contact_item->id  ?>" enctype="multipart/form-data">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Tên Liên Hệ:</div>
							<div class="col-md-9"><input required="" type="text" value="<?= $contact_item->name ?>" class="form-control" name="name"></div>
						</div>
					</div>
					<!--  -->
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Số Điện Thoại 1:</div>
							<div class="col-md-9"><input required="" type="text" value="<?= $contact_item->phone1 ?>" class="form-control" name="phone1"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Số Điện Thoại 2:</div>
							<div class="col-md-9"><input required="" type="text" value="<?= $contact_item->phone2 ?>" class="form-control" name="phone2"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Email:</div>
							<div class="col-md-9"><input required="" type="email" value="<?= $contact_item->email ?>" class="form-control" name="email"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Facebook:</div>
							<div class="col-md-9"><input required="" type="text" value="<?= $contact_item->fb ?>" class="form-control" name="fb"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Company:</div>
							<div class="col-md-9"><input required="" type="text" value="<?= $contact_item->company ?>" class="form-control" name="company"></div>
						</div>
					</div>
					<!--  -->
					
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-9">
								<input type="submit" class="btn btn-info" value="Xác Nhận">
								<input type="reset" class="btn btn-warning" value="Nhập Lại">
								<a href="<?php echo base_url('/') ?>" title=""><input type="" class="btn btn-danger" value="Quay lại"></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
