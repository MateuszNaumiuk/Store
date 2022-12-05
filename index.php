<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
</head>

<body>
	<!-- navbar -->
	<?php
	include("navbar.php")
	?>

	<section id="image_front_index">
		<img src="grafiki/16.jpg" href="produkty.php" alt="16.png">
		<div class="containre">
			<a href="produkty.php" style="text-decoration: none;">Jestesmy nowa firma z Przyszłościa! <br>
				Przejdz do naszej oferty!</a>
		</div>
	</section class>

	<section class="text-center py-3">
		<div class="container mt-5">
			<div class="row pb-5 d-flex justify-content-between">
				<div class="col-sm-12 col-md-3">
					<h3 class="fw-bold"> <i class="bi bi-award-fill"></i> O nas</h3>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. At totam, eaque quibusdam consectetur fugit iure. Neque eum eos ea quos voluptatum id laboriosam magni corporis enim laudantium. Fugit, inventore perspiciatis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab modi sunt itaque fugit debitis architecto, eligendi eos quos dignissimos placeat quas esse reiciendis rerum blanditiis beatae nostrum, nesciunt molestias maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore dolores inventore doloribus porro, delectus ad vitae cum incidunt tempora! Asperiores molestias, ipsam at minus rem ad nam hic cupiditate!
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="rightimg"><img src="grafiki/17.jpg" alt="History"></div>
				</div>
			</div>
			<div class="row pt-5 d-flex justify-content-between">
				<div class="col-sm-12 col-md-8">
					<div class="rightimg"><img src="grafiki/17.jpg" alt="History"></div>
				</div>
				<div class="col-sm-12 col-md-3">
					<h3 class="fw-bold"> <i class="bi bi-award-fill"></i> O nas</h3>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. At totam, eaque quibusdam consectetur fugit iure. Neque eum eos ea quos voluptatum id laboriosam magni corporis enim laudantium. Fugit, inventore perspiciatis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab modi sunt itaque fugit debitis architecto, eligendi eos quos dignissimos placeat quas esse reiciendis rerum blanditiis beatae nostrum, nesciunt molestias maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore dolores inventore doloribus porro, delectus ad vitae cum incidunt tempora! Asperiores molestias, ipsam at minus rem ad nam hic cupiditate!
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="fw-bold text-dark py-4 border-secondary mt-5 text-center" style="font-size:1.8em;">
							Polecamy!
						</div>
						<div class="container text-center pb-3 ">
							<div class="row mx-auto pb-5 auto justify-content-center">
								<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active">
											<div class="col-md-3">
												<div class="card align-middle  text-dark">
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
													<div class="card  text-dark	">
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