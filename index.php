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
				Wspomagamy artystów rozpoczynających swoją przygodę w ogromnym świecie wirtualnych projektów. Nasza strona stanowi bezpieczne źródło licencjonowanych projektów. To my zaopatrujemy najważniejsze projekty w nasze grafiki. 
Skupiamy się na pokazaniu sztuki od strony do tej pory nieznanej szerszemu gronu odbiorców. Planujemy poszerzać nasze horyzonty poprzez wdrażanie jak największej liczby młodych artystów oferując im możliwość, pokazania się światu z innej perspektywy. Jeśli jesteś taką osobą, bądź planujesz rozwijać się zgodnie z przedstawioną przez nas wizją – odezwij się!					</div>
				<div class="col-sm-12 col-md-8">
					<div class="rightimg"><img src="grafiki/17.jpg" alt="History"></div>
				</div>
			</div>
			<div class="row pt-5 d-flex justify-content-between">
				<div class="col-sm-12 col-md-8">
					<div class="rightimg"><img src="grafiki/18.jpg" alt="Future"></div>
				</div>
				<div class="col-sm-12 col-md-3">
					<h3 class="fw-bold"> <i class="bi bi-award-fill"></i> Nasze podejście do przyszłości</h3>
					Wolność jest aspektem, który chcemy przekazać w naszych pracach.
Zrzeszamy ogromną ilość ludzi pod szyldem naszego sklepu. Aktualnie mamy ponad 300 tys.  zarejestrowanych użytkowników. Ponad milion 1,3 mln. pobrań. Tak dobrze widzicie.  Nasi użytkownicy tworzą bardzo ważną część naszego przedsiębiorstwa. To wy jesteście dla nas najważniejsi. Mamy zaszczyt obsługiwać tak wspaniałą społeczność. Dziękujemy wam, że jesteście.			</div>
		</div>
	</section>
	
	<section>
		<div class="container-fluid bg-dark">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="fw-bold text-light bg-dark py-4 border-secondary my-3 text-center" style="font-size:1.8em;">
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
