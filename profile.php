<?php include('header.php'); ?>
		<div class="page-header">
			<h1>Edit Profile</h1>
		</div>
		<!--/.page-header -->

<form class="form-horizontal" role="form">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">อีเมล์</label>
		<div class="col-sm-3">
			<input type="email" class="form-control" value="vibhavee.t@gmail.com" placeholder="your-mail@gmail.com">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">รหัสผ่านใหม่</label>
		<div class="col-sm-3">
			<input type="password" class="form-control" placeholder="******">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">ยืนยันรหัสผ่านใหม่</label>
		<div class="col-sm-3">
			<input type="password" class="form-control" placeholder="******">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
				  <input type="checkbox" checked> รับรายงาน Real-Time สำหรับปัญหา Out-Of-Range Value
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
				  <input type="checkbox" checked> รับรายงานประจำวันสำหรับปัญหา Out-Of-Range, Flat Value และ Missing Gap
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
				  <input type="checkbox" checked> รับรายงานประจำเดือนของทุกปัญหา
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-primary">ยืนยันการแก้ไข</button>
	</div>
	</div>
</form>
<?php include('footer.php'); ?>