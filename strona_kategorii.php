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
					<ul class="list-group px-3 py-3 border border-secondary rounded">
						<h3 class="h4 my-3">Rozmiary</h3>
							<div class="row">
							<form method="POST">
								<button class="btn btn-outline-secondary w-50 mt-5" type="submit" name="600px">600x600</button>
								<button class="btn btn-outline-secondary w-50 mt-5" type="submit" name="1000px">600x1000</button>
								<button class="btn btn-outline-secondary w-50 mt-5" type="submit" name="clear">Clear</button>
							</form>
							</div>
						</form>
					</ul>
				</div>
				<div class="col-xl-10 col-md-8 col-sm-12">
					<form action="strona_produktu" method="post">
						<div class="col-10 border-top border-secondary mx-lg-4 mx-md-2 mx-sm-0">
							<p class="border-bottom border-secondary fw-bold " style="font-size:2.5vw">Produkty z kategorii:</p>
							<div class="row">
								<?php
								if(isset($_POST['600px']))
								{															
								
									$zapytanie = $conn->query("SELECT * FROM pictures where width = 600");
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

								}	else if(isset($_POST['1000px'])) {
									
									$zapytanie = $conn->query("SELECT * FROM pictures where width = 1000");
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
								} else if(isset($_POST['clear'])) {
									$zapytanie = $conn->query("SELECT * FROM pictures");
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