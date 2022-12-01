<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	?>
	<title>BetaShop</title>
	<style>
		.card {
			min-height: 10em;
			max-height: 10em;
		}

		.card-img-top {
			position: relative;
			max-height: 40em;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>
</head>

<body>
	<?php
	require("navbar.php");
	?>
	<?php

	?>
	<section class="page">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-xl-2 col-md-4">

					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Rozmiary
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="row">
										<?php
										$zapytanie = $conn->query("SELECT DISTINCT width, height FROM pictures");
										while ($row = $zapytanie->fetch()) {
										?>
											<form action="" method="POST">
												<button class="btn btn-outline-secondary w-75 mt-1" type="submit" name="rozmiar"><?= $row['width'] . "px " . $row['height'] . "px" ?></button>
												<input type="hidden" name="hidden_width" value="<?= $row['width'] ?>">
												<input type="hidden" name="hidden_height" value="<?= $row['height'] ?>">
											</form>

										<?php
										}
										?>
										<form action="" method="POST">
											<button class="btn btn-outline-secondary w-75 mt-4" type="submit" name="reset">Clear</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Kategorie
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="row">
										<?php
										$zapytanie = $conn->query("SELECT DISTINCT category FROM pictures");
										while ($row = $zapytanie->fetch()) {
										?>
											<form action="" method="POST">
												<button class="btn btn-outline-secondary w-75 mt-1" type="submit" name="category"><?= $row['category'] ?></button>
												<input type="hidden" name="hidden_category" value="<?= $row['category'] ?>">
											</form>

										<?php
										}
										?>
										<form action="" method="POST">
											<button class="btn btn-outline-secondary w-75 mt-4" type="submit" name="reset">Clear</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Autorzy
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="row">
										<?php
										$zapytanie = $conn->query("SELECT DISTINCT author_name FROM pictures");
										while ($row = $zapytanie->fetch()) {
										?>
											<form action="" method="POST">
												<button class="btn btn-outline-secondary w-75 mt-1" type="submit" name="authors"><?= $row['author_name'] ?></button>
												<input type="hidden" name="hidden_authors" value="<?= $row['author_name'] ?>">
											</form>

										<?php
										}
										?>
										<form action="" method="POST">
											<button class="btn btn-outline-secondary w-75 mt-4" type="submit" name="reset">Clear</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-xl-10 col-md-8 col-sm-12">
					<form action="strona_produktu" method="post">
						<div class="col-sm-12 col-md-11 border-top border-secondary mx-lg-4 mx-md-2 mx-sm-0">
							<p class="border-bottom border-secondary fw-bold text-center" style="font-size:1.5em">Produkty z kategorii:</p>
							<div class="row">
								<?php
								// if user session is created
								if (isset($_SESSION['user'])) {
									// if rozmiar is set
									if (isset($_POST["rozmiar"])) {
										$hidden_width = $_POST['hidden_width'];
										$hidden_height = $_POST['hidden_height'];
										if ($_SESSION['priv'] == 'admin') {
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `width` = $hidden_width AND `height` = $hidden_height");
										} else {
										$privs = $_SESSION['priv'];
											$zapytanie = $conn->query("SELECT * FROM pictures WHERE `width` = $hidden_width AND `height` = $hidden_height AND `privileges` = '$privs'");
										}
									} else if (isset($_POST["category"])) {
											$hidden_category = $_POST['hidden_category'];
										if ($_SESSION['priv'] == 'admin') {
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `category` = '$hidden_category'");
										} else {
										$privs = $_SESSION['priv'];
											$zapytanie = $conn->query("SELECT * FROM pictures WHERE  `category` = '$hidden_category' AND `privileges` = '$privs'");
										}
									} else if (isset($_POST["authors"])) {
										$hidden_authors = $_POST['hidden_authors'];
										if ($_SESSION['priv'] == 'admin') {
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `author_name` = '$hidden_authors'");
										} else {
										$privs = $_SESSION['priv'];
											$zapytanie = $conn->query("SELECT * FROM pictures WHERE  `author_name` = '$hidden_authors' AND `privileges` = '$privs'");
										}
									} else {
										// tu
										if ($_SESSION['priv'] == 'admin') {
										$zapytanie = $conn->query("SELECT * FROM pictures");
										} else {
											// tu
										$privs = $_SESSION['priv'];
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `privileges` = '$privs'");
										}
									}
								} else {
									// if rozmiar is set
									if (isset($_POST["rozmiar"])) {
										$hidden_width = $_POST['hidden_width'];
										$hidden_height = $_POST['hidden_height'];
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `width` = $hidden_width AND `height` = $hidden_height AND `privileges` = 'user'");
									} else if (isset($_POST["category"])) {
										$hidden_category = $_POST['hidden_category'];
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `category` = '$hidden_category' AND `privileges` = 'user'");
									} else if (isset($_POST["authors"])) {
										$hidden_authors = $_POST['hidden_authors'];
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `author_name` = '$hidden_authors' AND `privileges` = 'user'");
									} else {
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `privileges` = 'user'");
									}
								}

								while ($row = $zapytanie->fetch()) {
								?>
									<div class="col-sm-12 col-xl-2 mb-5 text-center">
										<a href="strona_produktu.php?id=<?= $row['picture_id'] ?>">
											<img src="<?= $row['image_path'] ?>" class="card-img-top" style="max-height: 10em; border-radius:1em;" alt="<?= $row['image_path'] ?>">
											<a style="font-size: 1em; font-width: bold;"><?= $row['pic_name']; ?></a>
											<?php
											if (isset($_SESSION['priv']) && $_SESSION['priv'] == 'admin' && $row['privileges'] == "admin") {
											?>
												<a style="font-size: 1em; font-weight: bold; color: grey;"><u><br>niewidoczne dla klienta</u></a>
											<?php
											}
											?>
											<p><?= $row['price'] ?> zl</p>
										</a>
									</div>
								<?php
								};
								?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<?php
	include("footer.php");
	?>
</body>

</html>