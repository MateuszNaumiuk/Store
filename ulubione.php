<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	session_start();
	require("bootstrapConnection.php")
	?>

	<title>BetaShop</title>
</head>

<body>

	<?php
	require("navbar.php");
	?>
		<section>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>