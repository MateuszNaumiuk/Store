<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	$id = $_GET['id'];
	?>

	<title>BetaShop</title>
</head>

<body>
	<?php
	require("navbar.php");
	?>

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<?php
					$zapytanie = $conn->query("SELECT * FROM pictures where picture_id = $id");
					while ($row = $zapytanie->fetch()) {
						if ($row['privileges'] == 'user') {
					?>
							<img src="<?= $row['image_path'] ?>" class="card-img-top" alt="<?= $row['image_path'] ?>">
						<?php
						} else {
						?>
							<a class="text-danger" style="font-size: 1.6em; font-weight: bold; text-align:center;"><u>niewidoczne dla klienta</u></a>
							<img src="<?= $row['image_path'] ?>" class="card-img-top" alt="<?= $row['image_path'] ?>">
						<?php
						}
						?>
				</div>

				<div class="col-md-8 col-sm-12">
					<div class="row mt-2">
						<div class="col-md-4 col-sm-12">
							<h2><?= $row['pic_name']; ?></h2><br>
							<p style="font-size:1em;">Wysokość:
								<?= $row['height'] ?> px
							</p>
							<p style="font-size:1em;">Szerokość:
								<?= $row['width'] ?> px
							</p>
						</div>

						<div class="col-md-6 col-sm-12 border rounded">
							<div class="row py-3">
								<div class="col text-center">
									<p style='font-size:1.5em;' class='fw-bold'>
										<?= $row['price'] ?> zl
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<form action="koszyk.php" method='POST' class="d-flex">
										<input type="hidden" name="hidden_name" value="<?= $row['pic_name'] ?>">
										<input type="hidden" name="hidden_path" value="<?= $row['image_path'] ?>">
										<input type="hidden" name="picture_id" value="<?= $row['picture_id'] ?>">
										<input type="hidden" name="hidden_price" value="<?= $row['price'] ?>">
										<input type="submit" id="add" name="add" class="btn btn-outline-success w-100" value="Dodaj do koszyka">
									</form>
								</div>
								<div class="col-12">
									<form action="ulubione.php" method='POST' class="d-flex">
										<input type="hidden" name="hidden_name" value="<?= $row['pic_name'] ?>">
										<input type="hidden" name="hidden_path" value="<?= $row['image_path'] ?>">
										<input type="hidden" name="picture_id" value="<?= $row['picture_id'] ?>">
										<input type="hidden" name="hidden_price" value="<?= $row['price'] ?>">
										<button type="submit" id="fav" name="fav" class="btn btn-outline-danger w-100" value="Dodaj do ulubionych">
											<i class="bi bi-heart-fill"></i>
										</button>
									</form>
								</div>
								<div class="col-12 d-flex flex-column">
									<?php
									if ((isset($_SESSION['user']))) {
										if ($_SESSION['priv'] == 'admin') {
									?>
											<form method='POST'>
												<!-- o tu -->
												<button type="submit" id="visibility" name="visibility" class="btn w-100 btn-outline-primary" value="Zmień widoczność">Zmień widoczność</button>
											</form>
								</div>
								<div class="col-12">
									<a href="edytowanie.php?pic=<?= $row['picture_id'] ?>"><button type="button" class="btn mb-3 btn-outline-primary w-100">Edytuj</button></a>
								</div>
						<?php
										}
									}
						?>
						<?php
						if (isset($_POST['visibility'])) {
							if ($row['privileges'] == 'user') {
								$zapytanie1 = $conn->query("UPDATE pictures SET privileges = 'admin' where picture_id = $id");
								echo '<meta http-equiv="refresh" content="0">';
							} else {
								$zapytanie1 = $conn->query("UPDATE pictures SET privileges = 'user' where picture_id = $id");
								echo '<meta http-equiv="refresh" content="0">';
							}
						}
						?>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 border rounded mt-3">
				<p style="font-size:2em;"><i class="bi bi-cpu mx-3"></i>Opis</p>
				<p class="mx-3" style="font-size:1em;"><?= $row['description'] ?></p>
			</div>
		</div>
		</div>
	<?php
					}
	?>
	</section>
	<!-- footer -->
	<?php
	include("footer.php");
	?>
</body>

</html>