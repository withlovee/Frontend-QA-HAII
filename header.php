<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet/less" type="text/css" href="css/style.less" />
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/less.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js" type="text/javascript"></script>
		<script src="js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Data Quality Management</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="notifications.php">Daily Operations</a></li>
        <li><a href="history.php">Error Log</a></li>
        <li><a href="batch.php">Batch Processing</a></li>
        <li><a href="reports.php">Report Generation</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="export.php">Export</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Manage Users</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, Vee <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="profile.php">Edit Profile</a></li>
            <li class="divider"></li>
            <li><a href="signin.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section class="content-wrapper">
	<div class="container">