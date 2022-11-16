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

	<section class="page">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-2">
					<ul class="list-group px-3 py-3 border border-secondary rounded">
						<h3 class="h4 mb-4 mt-3">Podkategorie</h3>
						<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 1</a>
						<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 2</a>
						<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 3</a>
					</ul>
				</div>
				<div class="col-10">
					<form action="strona_produktu" method="post">
						<div class="col-10 border-top border-secondary mx-5">
							<p class="border-bottom border-secondary fw-bold " style="font-size:2.5vw">Produkty z kategorii:</p>
							<div class="row">
								<?php
								$zapytanie = $conn->query("SELECT * FROM pictures");
								while ($row = $zapytanie->fetch()) {
								?>
									<div class="col-2 mb-3 text-center">
										<a href="strona_produktu.php?id=<?=$row['picture_id'] ?>">
												<img src="grafiki/<?= $row['image_path'] ?>" class="card-img-top" style="max-height: 10em; border-radius:1em;" alt="<?= $row['image_path'] ?>">
											<a style="font-size: 0.85vw;"><?= $row['pic_name']; ?></a>
											<p><?= $row['price'] ?> zl</p>
										</a>
									</div>
								<?php
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