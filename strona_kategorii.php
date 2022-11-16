<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php")
	?>
	<title>BetaShop</title>
</head>

<body>
	<header>
		<?php
		require("navbar.php");
		?>
		<nav class="navbar navbar-expand-lg navbar-light bg-second_navbar border border-secondary navdisappear">

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto ">
					<li class="nav-item text-center px-5 ">
						<a class="nav-link text-dark " href="strona_kategorii.php">Laptopy i Komputery</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Smartfony i smartwatche</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Gaming i Streaming</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Podzespoły Komputerowe</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.php">Urządzenia peryferyjne</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		<section class="page">
			<div class="container">
				<div class="row">
					<div class="col-3  text-center pb-3">

						<ul class="list-group px-3 py-3 border border-secondary rounded">
							<h3 class="h4 mb-4 mt-3">Podkategorie</h3>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 1</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 2</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 3</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 4</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 5</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 6</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 7</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 8</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 9</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 10</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 11</a>
							<a href="#" class="list-group-item list-group-item-dark list-group-item-action">Podkategoria 12</a>
						</ul>

					</div>

					<form method="post">




						<div class="col-9 border-top border-secondary ml-5">
							<p class="border-bottom border-secondary py-2 fw-bold " style="font-size:2.5vw">Produkty z kategorii:</p>
							<div class="row">
								<?php
								$zapytanie = $conn->query("SELECT * FROM pictures");
								while ($row = $zapytanie->fetch()) {
								?>
									<div class="col-2 text-center">
										<a href="strona_produktu.php?<?=$picture_id?>" class="text-decoration-none link-dark">
										<img class="img-fluid mb-2" src="grafiki/<?= $row['image_path'] ?>">
											<span style="font-size: 0.85vw;"><?= $row['pic_name']; ?><br>
												<?=$row['price']?>
											</span>
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
		</section>

		<?php



		?>

		<!-- footer -->
		<?php
		include("footer.php");
		?>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>