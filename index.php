<?PHP
require_once("includes/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

include_once("includes/header.php")?>
    <div class="container">
    <!-- DOCUMENT LIBRARY -->
		<section>
			<div class="page-header" id="section-features">
				<h2>Document Library. <small>What it's all about.</small></h2>
			</div> <!-- end page-header -->
			<div class="row" style="max-width:100px">
			<form class="navbar-form navbar-left" role="form">
			<div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-user"></span>
			</span>
			<input type="text" class="form-control" placeholder="Username" />
			</div>
			<div class="input-group">
			<span class="input-group-addon">
			<span class="glyphicon glyphicon-lock"></span>
			</span>
			<input type="password" class="form-control" placeholder="Password"/>
			</div>
			</form>
				<div class="col-sm-8">
					<h3>Doc One Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolorem debitis laboriosam fuga repellat impedit consequuntur ipsam inventore voluptas iure.</p>
				</div>
				<div class="col-sm-4">
					<img src="images/placeholder.jpg" alt="Feature image" class="img-responsive">
				</div>
			</div> <!-- end row -->
			<div class="row">
				<div class="col-sm-8">
					<h3>Doc Two Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolorem debitis laboriosam fuga repellat impedit consequuntur ipsam inventore voluptas iure.</p>
				</div>
				<div class="col-sm-4">
					<img src="images/placeholder.jpg" alt="Feature image" class="img-responsive">
				</div>
			</div> <!-- end row -->
			<div class="row">
				<div class="col-sm-8">
					<h3>Doc Three Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolorem debitis laboriosam fuga repellat impedit consequuntur ipsam inventore voluptas iure.</p>
				</div>
				<div class="col-sm-4">
					<img src="images/placeholder.jpg" alt="Feature image" class="img-responsive">
				</div>
			</div> <!-- end row -->
            <hr>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default text-center">
						<div class="panel-body">
							<span class="glyphicon glyphicon-search"></span>
							<h4>This is a smaller document placeholder</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, aliquam.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default text-center">
						<div class="panel-body">
							<span class="glyphicon glyphicon-ok"></span>
							<h4>This is a smaller document placeholder</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, aliquam.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default text-center">
						<div class="panel-body">
							<span class="glyphicon glyphicon-time"></span>
							<h4>This is a smaller document placeholder</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, aliquam.</p>
						</div>
					</div>
				</div>
			</div> <!-- end row -->
		</section>
	</div> <!-- end container -->
            </section>
            </div>
<? include_once("includes/footer.php") ?>

