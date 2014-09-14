<?php include('header.php'); ?>
		<div class="page-header">
			<h1>Edit Profile</h1>
		</div>
		<!--/.page-header -->

<form class="form-horizontal" role="form">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	<div class="checkbox">
	<label>
	  <input type="checkbox"> Remember me
	</label>
	</div>
	</div>
	</div>
	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-default">Sign in</button>
	</div>
	</div>
</form>
<?php include('footer.php'); ?>