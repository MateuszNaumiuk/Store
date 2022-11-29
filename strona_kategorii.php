<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php")
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
					<ul class="list-group px-3 py-3 border border-secondary rounded mb-3">
						<h3 class="h4 my-3">Rozmiary</h3>
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
						</form>
					</ul>
				</div>
				<div class="col-xl-10 col-md-8 col-sm-12">
					<form action="strona_produktu" method="post">
						<div class="col-10 border-top border-secondary mx-lg-4 mx-md-2 mx-sm-0">
							<p class="border-bottom border-secondary fw-bold text-center" style="font-size:1.5em">Produkty z kategorii:</p>
							<div class="row">
								<?php
								if (isset($_SESSION['user'])) {
									if (isset($_POST["rozmiar"])) {
										$hidden_width = $_POST['hidden_width'];
										$hidden_height = $_POST['hidden_height'];
										if ($_SESSION['priv'] == 'admin') {
											$zapytanie = $conn->query("SELECT * FROM pictures WHERE `width` = $hidden_width AND `height` = $hidden_height");
										} else {
											$privs = $_SESSION['priv'];
											$zapytanie = $conn->query("SELECT * FROM pictures WHERE `width` = $hidden_width AND `height` = $hidden_height AND `privileges` = '$privs'");
										}
										while ($row = $zapytanie->fetch()) {

								?>
											<div class="col-sm-4 col-xl-2 mb-5 text-center">
												<a href="strona_produktu.php?id=<?= $row['picture_id'] ?>">
													<img src="<?= $row['image_path'] ?>" class="card-img-top" style="max-height: 10em; border-radius:1em;" alt="<?= $row['image_path'] ?>">
													<a style="font-size: 1em; font-width: bold;"><?= $row['pic_name']; ?></a>
													<?php
													if ($_SESSION['priv'] == 'admin' && $row['privileges'] == "admin") {
													?>
														<a style="font-size: 1em; font-width: bold; color: grey;"><u>niewidoczne dla klienta</u></a>
													<?php
													}
													?>
													<p><?= $row['price'] ?> zl</p>
												</a>
											</div>
										<?php
										}
									} else if (!isset($_POST['rozmiar'])) {
										if ($_SESSION['priv'] == 'admin') {
											$zapytanie = $conn->query("SELECT * FROM pictures");
										} else {
											$privs = $_SESSION['priv'];
											$zapytanie = $conn->query("SELECT * FROM pictures WHERE `privileges` = '$privs'");
										}
										while ($row = $zapytanie->fetch()) {
										?>
											<div class="col-sm-4 col-xl-2 mb-5 text-center">
												<a href="strona_produktu.php?id=<?= $row['picture_id'] ?>">
													<img src="<?= $row['image_path'] ?>" class="card-img-top" style="max-height: 10em; border-radius:1em;" alt="<?= $row['image_path'] ?>">
													<a style="font-size: 1em; font-width: bold;"><?= $row['pic_name']; ?></a>
													<?php
													if ($_SESSION['priv'] == 'admin' && $row['privileges'] == "admin") {
													?>
														<br><a style="font-size: 1em; font-width: bold; color: grey;"><u>niewidoczne dla klienta</u></a>
													<?php
													}
													?>
													<p><?= $row['price'] ?> zl</p>
												</a>
											</div>
										<?php
										}
									}
								}



								if (!isset($_SESSION['user'])) {
									if (isset($_POST["rozmiar"])) {
										$hidden_width = $_POST['hidden_width'];
										$hidden_height = $_POST['hidden_height'];
										$zapytanie = $conn->query("SELECT * FROM pictures WHERE `width` = $hidden_width AND `height` = $hidden_height AND `privileges` = 'user'");
									
									while ($row = $zapytanie->fetch()) {

										?>
										<div class="col-sm-4 col-xl-2 mb-5 text-center">
											<a href="strona_produktu.php?id=<?= $row['picture_id'] ?>">
												<img src="<?= $row['image_path'] ?>" class="card-img-top" style="max-height: 10em; border-radius:1em;" alt="<?= $row['image_path'] ?>">
												<a style="font-size: 1em; font-width: bold;"><?= $row['pic_name']; ?></a>
												<p><?= $row['price'] ?> zl</p>
											</a>
										</div>
									<?php
									}
								}
								 else if (!isset($_POST['rozmiar'])) {
									$zapytanie = $conn->query("SELECT * FROM pictures WHERE `privileges` = 'user'");

									while ($row = $zapytanie->fetch()) {
									?>
										<div class="col-sm-4 col-xl-2 mb-5 text-center">
											<a href="strona_produktu.php?id=<?= $row['picture_id'] ?>">
												<img src="<?= $row['image_path'] ?>" class="card-img-top" style="max-height: 10em; border-radius:1em;" alt="<?= $row['image_path'] ?>">
												<a style="font-size: 1em; font-width: bold;"><?= $row['pic_name']; ?></a>
												<p><?= $row['price'] ?> zl</p>
											</a>
										</div>
								<?php
									}
								}
							}
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>