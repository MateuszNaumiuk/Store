<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	?>

	<title>BetaShop</title>

</head>

<body>
	<!-- navbar -->
	<?php
	include("navbar.php")
	?>

	<section id="image_front_index">
		<img src="grafiki/1.jpg" alt="1.png">
		<div class="container">
			<a href="strona_kategorii.php">Jestesmy nowa firma z Przyszłościa! <br>
				Przejdz do naszej oferty!</a>
		</div>
	</section>

	<section class="text-center">
		<div class="container-fluid">
			<div class="row mb-4 ">
				<h2 class="text-center mb-5 fw-bold border-bottom border-secondary py-2 border-top"> O nas </h2>
				<div class="col-sm">
					<h3 class="fw-bold"> <i class="bi bi-hourglass-split"></i> Historia</h3>
					<div class="container" style="max-width: 25em;"><a>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit exercitationem rem vero soluta dolorem qui aperiam molestiae sed, magnam dignissimos nulla incidunt atque, sequi suscipit expedita unde vitae distinctio neque.</a></div>
				</div>
				<div class="col-sm">
					<h3 class="fw-bold"> <i class="bi bi-calendar2-check-fill"></i> Przyszłość</h3>
					<div class="container" style="max-width: 25em;"><a>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit exercitationem rem vero soluta dolorem qui aperiam molestiae sed, magnam dignissimos nulla incidunt atque, sequi suscipit expedita unde vitae distinctio neque.</a></div>
				</div>
				<div class="col-sm">
					<h3 class="fw-bold"> <i class="bi bi-award-fill"></i> Co cenimy</h3>
					<div class="container" style="max-width: 25em;"><a>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit exercitationem rem vero soluta dolorem qui aperiam molestiae sed, magnam dignissimos nulla incidunt atque, sequi suscipit expedita unde vitae distinctio neque.</a></div>
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
										$zapytanie = $conn->query("SELECT picture_id, image_path, description, price FROM pictures WHERE `privileges` = 'user' limit 5");
										while ($row = $zapytanie->fetch()) {
										?>
											<div class="carousel-item">
												<div class="col-md-3">
													<div class="card bg-dark text-light	">
														<div class="card-img">
															<a href="strona_produktu.php?id=<?= $row['picture_id'] ?>"><img src="<?= $row['image_path'] ?>" class="img-fluid img_carousel" alt="<?= $row['picture_id'] ?>"></a>
															<div class="centeronhover">
																<a href="strona_produktu.php?id=<?= $row['picture_id'] ?>"><?= $row['description'] . "<br>" . $row['price'] . "zl" ?></a>
															</div>
														</div>
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
		</div>
	</section>

	<!-- footer -->
	<?php
	include("footer.php");
	?>

	<script type="text/javascript" src="carouselScript.js"></script>
</body>

</html>