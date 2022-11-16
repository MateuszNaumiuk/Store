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
	<!-- footer -->
	<?php
	include("footer.php");
	?>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>