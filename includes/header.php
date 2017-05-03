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
//while(true){
//document.getElementById("mbtn").click();button.click();
//}
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
      <button id="mbtn" type="button" class="btn btn-primary navbar-btn navbar-right" data-toggle="modal" data-target="#modal-Subscribe">Subscribe</button>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="documents.php">Document Library</a></li>
        <li><a href="projects.php">Ongoing Projects</a></li>
        <li><a href="gallery.php">Photo Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Author's Bio</a></li>
        <li><a href="contact.php">Contact</a></li>                               
      </ul>
  </div> <!--end collapse-->
</div> <!-- end container -->
</nav>