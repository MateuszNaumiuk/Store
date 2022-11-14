<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php")
	?>

	<title>BetaShop</title>
</head>

<body>
	<header>
		<?php
		require("navbar.php");
		?>
		<nav class="navbar navbar-expand-lg navbar-light bg-second_navbar border border-secondary navdisappear">

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto ">
					<li class="nav-item text-center px-5 ">
						<a class="nav-link text-dark " href="strona_kategorii.php">Laptopy i Komputery</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Smartfony i smartwatche</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Gaming i Streaming</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Podzespoły Komputerowe</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Urządzenia peryferyjne</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		<section class="page">
			<div class="container">
				<div class="row text-justify bg-second_navbar border rounded my-2">
					<h1 class="pb-2 py-3"> Produkty z listy ulubionych</h1>
					<a href="strona_produktu.php" class="text-decoration-none link-dark">
						<div class="col-12 py-2 px-4">
							<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>

						</div>
					</a>
				</div>

				<div class="row text-justify bg-second_navbar border rounded my-2">
					<a href="strona_produktu.php" class="text-decoration-none link-dark">
						<div class="col-12 py-2 px-4">
							<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>

						</div>
					</a>
				</div>
				<div class="row text-justify bg-second_navbar border rounded my-2">
					<a href="strona_produktu.php" class="text-decoration-none link-dark">
						<div class="col-12 py-2 px-4">
							<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>

						</div>
					</a>
				</div>
				<div class="row text-justify bg-second_navbar border rounded my-2">
					<a href="strona_produktu.php" class="text-decoration-none link-dark">
						<div class="col-12 py-2 px-4">
							<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>

						</div>
					</a>
				</div>
			</div>
		</section>


		<footer class="text-center text-lg-start bg-light text-muted mt-3">

			<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

				<div class="me-5 d-none d-lg-block">
					<span>Nasze social Media:</span>
				</div>



				<div>
					<a href="https://www.facebook.com/" target="_blank" class="me-4 text-reset">
						<i class="bi bi-facebook"></i>
					</a>
					<a href="https://twitter.com/" target="_blank" class="me-4 text-reset">
						<i class="bi bi-twitter"></i>
					</a>
					<a href="https://www.youtube.com/" target="_blank" class="me-4 text-reset">
						<i class="bi bi-youtube"></i>
					</a>
					<a href="https://www.instagram.com/" target="_blank" class="me-4 text-reset">
						<i class="bi bi-instagram"></i>
					</a>
				</div>

			</section>



			<section class="">
				<div class="container text-center text-md-start mt-5">

					<div class="row mt-3">

						<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

							<h6 class="text-uppercase fw-bold mb-4">
								<i class="fas fa-gem me-3"></i>O nas
							</h6>
							<p>
								Jesteśmy firmą od lat zajmującą się sprzedażą detaliczną artykułów komputerowych.
								Stawiamy na jakość oraz zadowolenie naszych klientów.
							</p>
						</div>



						<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

							<h6 class="text-uppercase fw-bold mb-4">
								BetaShop
							</h6>
							<p>
								<a href="o_nas.php" class="text-reset">O nas</a>
							</p>
							<p>
								<a href="regulamin.php" class="text-reset">Regulamin</a>
							</p>
							<p>
								<a href="polityka_prywatnosci.php" class="text-reset">Polityka Prywatności</a>
							</p>
							<p>
								<a href="forum.php" class="text-reset">Forum</a>
							</p>
						</div>



						<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

							<h6 class="text-uppercase fw-bold mb-4">
								Przydatne linki
							</h6>
							<p>
								<a href="wspolpraca.php" class="text-reset">Współpraca</a>
							</p>
							<p>
								<a href="faq.php" class="text-reset">FAQ</a>
							</p>
							<p>
								<a href="pomoc.php" class="text-reset">Pomoc techniczna</a>
							</p>
							<p>
								<a href="montaz.php" class="text-reset">Usługi montażu</a>
							</p>
						</div>



						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

							<h6 class="text-uppercase fw-bold mb-4">
								Kontakt
							</h6>
							<p><i class="bi bi-house me-3"></i> Siedlce 08-110, Sekulska 3</p>
							<p>
								<i class="bi bi-envelope me-3"></i>
								info@Beta.shop
							</p>
							<p><i class="bi bi-telephone me-3"></i>123 456 789</p>
							<p><i class="bi bi-printer me-3"></i> + 01 234 567 89</p>
						</div>

					</div>

				</div>
			</section>



			<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
				© 2022 Copyright:
				<a class="text-reset fw-bold" href="#">BetaShop.com</a>
			</div>

		</footer>


	</main>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>