<!DOCTYPE html>
<html lang="en">
<body onload="myFunction()">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Writemycode.net</title>
	<meta name="description" content="State of the art web design">
	<meta name="author" content="Nacho Jiménez">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Bootstrap files -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css"> -->
	<style>
		body {
			padding-top: 50px;
		}
	</style>
</head>
<script>
function myFunction() {
while(true){
document.getElementById("mbtn").click();button.click();
}
}
</script>

<body>
<div class="demo-area">
		<div class="container">
			<div class="modal fade" id="modal-1" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">User Alert</h3>
						</div>
						<div class="modal-body">
							<p>The feature you are trying to access has not been fully implemented yet. Please stay tuned for future improvements.</p>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="modal show" id="modal-login" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3 class="modal-title">Access Control</h3><p class="help-block">This site has restricted access</p>
						</div>
						<div class="modal-body">
<div class="container-fluid">
                        <form role="form">
<div class="row">
<div class="col-lg-6">
			<div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-user"></span>
			</span>
			<input type="text" class="form-control" placeholder="Username"/>
			</div>
</div>
<div class="col-lg-6">
			<div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-lock"></span>
			</span>
			<input type="password" class="form-control" placeholder="Password"/>
			</div>
</div>
</div>
<div class="row">
<div class="col-lg-10">
                       <button type="submit" class="btn btn-success">Login</button>
</div>
</div>

			</form>
</div>

						</div>
						<div class="modal-footer">
<div class="row">
<div class="col-lg-10">
<div class="checkbox"><label input=""><input type="checkbox"><spam class="pull-left">Stay logged in</span></label>
</div>
</div>
<div class="col-lg-10">
<div class="row">
<p class="help-block"><spam class="pull-left">Post your request for access at https://www.facebook.com/Writemycode/</span></p>					</div>
</div>

					</div>
				</div>
			</div>
		</div>
	</div> <!-- end demo-area -->
	<!-- NAVBAR -->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="main-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Writemycode.net</a>
			</div> <!-- end navbar-header -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<button id="mbtn" type="button" class="btn btn-primary navbar-btn navbar-right" data-toggle="modal" data-target="#modal-login">LOGIN</button>
				<ul class="nav navbar-nav">
               	<li><a href="index.php">Home</a></li>
                   
					<li><a href="documents.php">Document Library</a></li>
					<li><a href="projects.php">Ongoing Projects</a></li>
                    <li><a href="gallery.php">Photo Gallery</a></li>
					<li><a href="about.php">About</a></li>
                                        <li><a href="#">Author's Bio</a></li>
					<li><a href="contact.php">Contact</a></li>                               
				</ul>
			</div> <!-- end collapse -->
		</div> <!-- end container -->
	</nav>