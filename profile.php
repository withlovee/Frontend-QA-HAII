<?php include('header.php'); ?>
<p>&nbsp;</p>
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="signin">
				<form class="form-signin" role="form" action="signin-fail.php">
				<h2 class="form-signin-heading">Edit Profile</h2>
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">E-mail</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="your-email@gmail.com">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">New Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-ok"></span> Update Profile</button>
					<br>
				</form>
			</div>
		</div><!--row-->
<?php include('footer.php'); ?>