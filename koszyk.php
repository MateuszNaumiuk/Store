<?php
session_start();
if(!isset($_SESSION['logged']))
{
    header('Location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php")
	?>

	<title>BetaShop</title>
</head>

<body>

	<?php
	require("navbar.php");
	?>

	<main>
		<section class="page">
			<div class="container">
				<div class="row text-justify bg-second_navbar border rounded my-2">
					<h1 class="pb-2 py-3"> Twój koszyk: </h1>

					<div class="col-12 py-2 px-4">
						<a href="strona_produktu.php" class="text-decoration-none link-dark">
							<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
							<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>
						</a>
						<form class="d-inline ms-3 w">
							<input type="number" class="form-control d-inline me-2" style="max-width:10%;" placeholder="1">

						</form>

					</div>

				</div>

				<div class="row text-justify bg-second_navbar border rounded my-2">
					<a href="strona_produktu.php" class="text-decoration-none link-dark">
						<div class="col-12 py-2 px-4">
							<a href="strona_produktu.php" class="text-decoration-none link-dark">
								<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
								<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
								<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>
							</a>
							<form class="d-inline ms-3 w">
								<input type="number" class="form-control d-inline me-2" style="max-width:10%;" placeholder="1">

							</form>

						</div>
					</a>
				</div>
				<div class="row text-justify bg-second_navbar border rounded my-2">
					<a href="strona_produktu.php" class="text-decoration-none link-dark">
						<div class="col-12 py-2 px-4">
							<a href="strona_produktu.php" class="text-decoration-none link-dark">
								<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
								<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
								<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>
							</a>
							<form class="d-inline ms-3 w">
								<input type="number" class="form-control d-inline me-2" style="max-width:10%;" placeholder="1">

							</form>

						</div>
					</a>
				</div>
				<div class="row text-justify bg-second_navbar border rounded my-2">
					<a href="strona_produktu.php" class="text-decoration-none link-dark">
						<div class="col-12 py-2 px-4">
							<a href="strona_produktu.php" class="text-decoration-none link-dark">
								<img class="img-fluid d-inline" src="img/intelek.jpg" style="max-width:100px; max-height:100px;">
								<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Nazwa Produktu </p>
								<p class="d-inline ms-3 me-3" style="font-size: 1.3vw">Cena </p>
							</a>
							<form class="d-inline ms-3 w">
								<input type="number" class="form-control d-inline me-2" style="max-width:10%;" placeholder="1">

							</form>

						</div>
					</a>
				</div>
				<div class="row text-center ">
					<div class="col-12 text-center offset-3">
						<form class="d-flex me-2">
							<button class="btn btn-outline-success w-50" type="submit">Złóż zamówienie</button>
						</form>
					</div>
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