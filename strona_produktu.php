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
				<div class="col-4">
					<?php
					$zapytanie = $conn->query("SELECT * FROM pictures where picture_id = $id");
					while ($row = $zapytanie->fetch()) {
					?>
						<img src="<?= $row['image_path']?>" class="card-img-top" alt="<?= $row['image_path'] ?>">
				</div>

				<div class="col-8">
					<div class="row">
						<div class="col-12">
							<p style="font-size:2.7vw;" class="fw-light">

						</div>
					</div>

					<div class="row mt-2">
						<div class="col-4">
							<h2><?= $row['pic_name']; ?></h2><br>
							<p style="font-size:0.85vw;">Wysokość:
								<?= $row['height'] ?> px
							</p>
							<p style="font-size:0.85vw;">Szerokość:
								<?= $row['width'] ?> px
							</p>
						</div>

						<div class="col-6 border rounded">
							<div class="row py-3">
								<div class="col text-center">
									<p style='font-size:1.5vw;' class='fw-bold'>
										<?= $row['price'] ?> zl
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<form action="koszyk.php" method='POST' class="d-flex me-2 w">
										<input type="hidden" name="hidden_name" value="<?=$row['pic_name']?>">
										<input type="hidden" name="hidden_path" value="<?=$row['image_path']?>">
										<input type="hidden" name="picture_id" value="<?=$row['picture_id']?>">
										<input type="hidden" name="hidden_price" value="<?=$row['price']?>">
										<input  type="submit" id="add" name="add" class="btn btn-outline-success w-100" value="Dodaj do koszyka">
									</form>

									<form action="ulubione.php" method='POST' class="d-flex me-2 w">
										<input type="hidden" name="hidden_name" value="<?=$row['pic_name']?>">
										<input type="hidden" name="hidden_path" value="<?=$row['image_path']?>">
										<input type="hidden" name="picture_id" value="<?=$row['picture_id']?>">
										<input type="hidden" name="hidden_price" value="<?=$row['price']?>">				
										<button type="submit" id="fav" name="fav" class="btn btn-outline-danger w-100" value="Dodaj do ulubionych">
										<i class="bi bi-heart-fill"></i>
										</button>
									</form>
								</div>
							</div>
						</div>

					</div>
					<div class="row my-4">
						<div class="col-6">

						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 mt-4 border rounded text-justify">
					<p style="font-size:2vw;" class="ms-2 my-3"><i class="bi bi-cpu me-3"></i>Opis</p>
					<p class="ms-5 me-5" style="font-size:1vw;"><?= $row['description'] ?>
				</div>
			</div>

		</div>
	<?php
					}
	?>
	</section>
	</main>
	<!-- footer -->
	<?php
	include("footer.php");
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>