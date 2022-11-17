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

	<section class="page">
		<div class="container">
			<div class="row text-justify bg-second_navbar my-2">
				<?php
				if (isset($_SESSION['user'])) {
				?>
					<div class="border rounded">
						<h1>Witaj, <?= $_SESSION['user'] ?></h1>
						<h2 class="pb-2 py-3 ps-2">Twoje konto</h2>
						<h3 class="ps-3">Dane osobowe</h3>
						<p class="ps-5">Imię</p>
						<p class="ps-5">Nazwisko</p>
						<p class="ps-5">Data urodzenia</p>
						<p class="ps-5">Adres</p>
						<p class="ps-5">Numer telefonu</p>
						<h3 class="ps-3">Dane o koncie</h3>
						<p class="ps-5">Adres e-mail</p>
						<p class="ps-5">Nazwa użytkownika</p>
						<p class="ps-5"><a href="zamowienia.html" class="link-dark">Zamówienia</a></p>
						<div class="row text-center ">
							<div class="col-12 text-center offset-3">
								<form class="d-flex me-2">
									<button class="btn btn-outline-success w-50" type="submit">Zmień dane</button>
								</form>
							</div>
						</div>
					</div>
				<?php
				} else {
				?>
					<form class="d-flex justify-content-center me-2 my-5" action="login.php">
						<button class="btn btn-outline-success w-50" type="submit">Zaloguj sie by uzyskać informacje o koncie</button>
					</form>
				<?php
				}
				?>
			</div>
		</div>
		<?php
		include("footer.php");
		?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>