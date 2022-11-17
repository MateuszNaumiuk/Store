<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	?>

	<title>BetaShop</title>
	<style>
		#nav-section {
			margin-bottom: 5em !important;
		}
	</style>
</head>

<body class="text-center">
	<!-- navbar -->
	<?php
	require("navbar.php");
	?>

	<section id="mainImg">
		<img src="grafiki/1.jpg" alt="Logo" class="logo" />
	</section>

	<section>
		<div class="container">
			<div class="row mb-4 ">
				<h2 class="text-center mb-5 fw-bold border-bottom border-secondary py-2 border-top"> O nas </h2>
				<div class="col-sm mx-3 mt-3">
					<h3 class="fw-bold"> <i class="bi bi-hourglass-split"></i> Historia</h3>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit exercitationem rem vero soluta dolorem qui aperiam molestiae sed, magnam dignissimos nulla incidunt atque, sequi suscipit expedita unde vitae distinctio neque.
				</div>
				<div class="col-sm mx-3 mt-3">
					<h3 class="fw-bold"> <i class="bi bi-calendar2-check-fill"></i> Przyszłość</h3>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit exercitationem rem vero soluta dolorem qui aperiam molestiae sed, magnam dignissimos nulla incidunt atque, sequi suscipit expedita unde vitae distinctio neque.
				</div>
				<div class="col-sm mx-3 mb-5 mt-3">
					<h3 class="fw-bold"> <i class="bi bi-award-fill"></i> Co cenimy</h3>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit exercitationem rem vero soluta dolorem qui aperiam molestiae sed, magnam dignissimos nulla incidunt atque, sequi suscipit expedita unde vitae distinctio neque.
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="fw-bold bg-dark text-light py-4" style="font-size:1.8em">
							Polecamy!
						</div>
						<div class="container text-center pb-3 bg-dark">
							<div class="row mx-auto pb-5 auto justify-content-center">
								<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active">
											<div class="col-md-3">
												<div class="card align-middle bg-dark text-light">
													<a>Najpopularniejsze wybory!</a>
												</div>
											</div>
										</div>
										<?php
										$zapytanie = $conn->query("SELECT * FROM pictures");
										while ($row = $zapytanie->fetch()) {
											for ($i = 1; $i < 5; $i++) {
										?>
												<div class="carousel-item">
													<div class="col-md-3">
														<div class="card bg-dark text-light	">
															<div class="card-img">
																<img src="grafiki/<?= $i ?>.jpg" class="img-fluid img_carousel" alt="img<?= $i ?>">
																<div class="centeronhover">
																	<?= $row['description'] . "<br>" . $row['price'] . "zl" ?>
																</div>
															</div>
														</div>
													</div>
												</div>
										<?php
											}
										}
										?>
									</div> <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
								</div>
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