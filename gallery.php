<? require("includes/header.php") ?>
<div class="container">
		<!-- GALLERY -->
		<section>
			<div class="page-header" id="section-gallery">
				<h2>Gallery. <small>Take a look at some application screenshots.</small></h2>
			</div> <!-- end page-header -->

			<div class="carousel slide" id="gallery-carousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#gallery-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#gallery-carousel" data-slide-to="1"></li>
					<li data-target="#gallery-carousel" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="images/placeholderbig.jpg" alt="Slider image">
						<div class="carousel-caption">This is a caption.</div>
					</div>
					<div class="item">
						<img src="images/placeholderbig.jpg" alt="Slider image">
						<div class="carousel-caption">This is a caption.</div>
					</div>
					<div class="item">
						<img src="images/placeholderbig.jpg" alt="Slider image">
						<div class="carousel-caption">This is a caption.</div>
					</div>
				</div> <!-- end carousel-inner -->

				<a href="#gallery-carousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#gallery-carousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div> <!-- end carousel -->
		</section>
        </div>
<? include_once("includes/footer.php") ?>        

