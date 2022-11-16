<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	?>

	<title>BetaShop</title>
</head>

<body class="text-center">
	<!-- navbar -->
	<?php
	require("navbar.php");
	?>

	<section>
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="grafiki/1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="grafiki/2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="grafiki/3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="col-12 border-top border-secondary">
				<p class="border-bottom border-secondary py-2 fw-bold" style="font-size:1.8em">Polecamy!</p>
				<div class="row">
					<div class="container text-center my-3">
						<div class="row mx-auto mt-5 my-auto justify-content-center">
							<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="carousel-item active">
										<div class="col-md-3">
											<div class="card align-middle">
												<a>Najpopularniejsze wybory!</a>
											</div>
										</div>
									</div>
									<?php
									for ($i = 1; $i < 5; $i++) {
									?>
										<div class="carousel-item">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img">
														<img src="grafiki/<?= $i ?>.jpg" class="img-fluid img_carousel" alt="img<?= $i ?>">
													</div>
													<!-- tutaj dodac tekst ktory zmienia atrybut hidden na hover pobierajacy z bazy cene nazwe i wymiary -->
												</div>
											</div>
										</div>
									<?php
									}
									?>
								</div> <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<?php
	include("footer.php");
	?>

	<script type="text/javascript" src="carouselScript.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>