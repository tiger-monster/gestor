<?php
session_start();

if(isset($_SESSION['usuario'])){
	include "header.php";
	?>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center>
					<span class="btn btn-danger">
						<h1>Gestor de archivos multimedia</h1>
					</span>
				</center>
				<hr>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" align="center">
						<div class="carousel-item active">
							<img class="d-block w-75 a-cen" src="../img/3.webp.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-75" src="../img/video.jpeg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-75" src="../img/0.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php 
	include "footer.php";
} else {
	header("location:../index.php");
}
?>