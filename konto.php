<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("connection.php");
	require("bootstrapConnection.php");
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
					$login = $_SESSION['user'];
					$zapytanie = $conn->query("SELECT * FROM users WHERE login = '$login'");
					while ($row = $zapytanie->fetch()) {
				?>
						<div class="border rounded">
							<h1>Witaj, <?= $row['login'] ?></h1>
							<h2 class="pb-2 py-3 ps-2">Twoje konto</h2>
							<h3 class="ps-3">Dane osobowe</h3>
							<p class="ps-5">Imię: <?= $row['fname'] ?></p>
							<p class="ps-5">Nazwisko: <?= $row['lname'] ?></p>
							<p class="ps-5">Data urodzenia: <?= $row['birthDate'] ?></p>
							<p class="ps-5">Adres: <?= $row['country'] ?> <?= $row['town'] ?> <?= $row['street'] ?> <?= $row['house_nr'] ?> <?= $row['zipcode'] ?></p>
							<p class="ps-5">Numer telefonu: <?= $row['phoneNumber'] ?></p>
							<h3 class="ps-3">Dane o koncie</h3>
							<p class="ps-5">Adres e-mail: <?= $row['email'] ?></p>
							<p class="ps-5">Nazwa użytkownika: <?= $row['login'] ?></p>
							<p class="ps-5">Typ konta: <?= $row['privileges'] ?></p>
							<div class="row text-center ">
								<div class="row">
									<div class="col-12 text-center">
										<form class="d-flex justify-content-center my-3" action="newdetails.php" method="POST">
											<input type="hidden" name="id" value="<?= $row['user_id'] ?>">
											<button class="btn btn-outline-success w-50" type="submit">Zmień dane</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
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


</body>

</html>