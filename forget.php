<?php include('header.php'); ?>
<p>&nbsp;</p>
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="signin">
				<form class="form-signin" role="form" action="signin-fail.php">
				<h2 class="form-signin-heading">Forget Password?</h2>
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">Enter E-Mail</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="your-email@gmail.com">
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-export"></span> Send Instructions to My Email</button>
					<br>
					<p class="text-center"><a href="signin.php">Back to sign in</a></p>
				</form>
			</div>
		</div><!--row-->
<?php include('footer.php'); ?>