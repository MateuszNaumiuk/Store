<!DOCTYPE html>
<html lang=pl>

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");

	?>
	<title>BetaShop</title>
	<?php
	if (array_key_exists("fav", $_POST)) {
		if (isset($_SESSION["favourite"])) {
			$item_array_id = array_column($_SESSION["favourite"], "product_id");
			if (!in_array($_POST["picture_id"], $item_array_id)) {
				$count = count($_SESSION["favourite"]);
				$item_array = array(
					'product_id' => $_POST["picture_id"],
					'image_name' => $_POST["hidden_name"],
					'product_price' => $_POST["hidden_price"],
					'image_path' => $_POST["hidden_path"],
				);
				$_SESSION["favourite"][$count] = $item_array;
			} else {
				if (isset($_SESSION['user'])) {
					echo
					'<div class="alert alert-dark text-center mt-3" role="alert">
					Produkt znajduje sie juz w ulubionych! 
					<meta http-equiv="refresh" content="2">
					</div>';
				}
			}
		} else {
			$item_array = array(
				'product_id' => $_POST["picture_id"],
				'image_name' => $_POST["hidden_name"],
				'product_price' => $_POST["hidden_price"],
				'image_path' => $_POST["hidden_path"],
			);
			$_SESSION["favourite"][0] = $item_array;
		}
	}
	if (isset($_GET["action"])) {
		if ($_GET["action"] == "delete") {
			foreach ($_SESSION["favourite"] as $keys => $value) {
				if ($value["product_id"] == $_GET["id"]) {
					unset($_SESSION["favourite"][$keys]);
	?>
					<div class="alert alert-dark text-center" role="alert">
						Usunieto z ulubionych.
					</div>
					<meta http-equiv="refresh" content="2">
	<?php
				}
			}
		}
	}
	?>

</head>

<body>
	<!-- navbar -->
	<?php
	include("navbar.php");
	?>

	<div class="container-md-fluid container-xl">
		<h1 class="py-3">Produkty dodane do ulubionych: </h1>
		<?php if (!empty($_SESSION["favourite"])) {
		?>


			<div class="row text-center ">
				<div class="col-12 text-center">
					<?php
					if (isset($_SESSION['user'])) {
					?>
						</tr>
						<div class="border rounded my-2">
							<?php
							foreach ($_SESSION["favourite"] as $key => $value) {
							?>
								<div class="row">
									<div class="col-12 d-flex justify-content-xl-between justify-content-sm-centerjustify-content-sm-center py-2 px-4">
										<a href="strona_produktu.php?id=<?= $value['product_id'] ?>" class="text-decoration-none link-dark">
											<img class="img-fluid d-inline" src="<?= $value['image_path'] ?>" style="max-width:100px; max-height:100px;">
											<p class="d-inline mx-3" style="font-size: 1.3em"><?= $value['image_name'] ?></p>
											<p class="d-inline mx-3" style="font-size: 1.3em">Cena: <?= $value["product_price"] . " zł"; ?></p>
										</a>
										<a href="ulubione.php?action=delete&id=<?php echo $value["product_id"]; ?>">
											<button class="btn btn-outline-danger mt-3" value="Dodaj do ulubionych">
												<i class="bi bi-heartbreak-fill"></i>
											</button>
										</a>
									</div>
								</div>
							<?php
							}
							?>
						</div>

					<?php
					} else {
					?>
						<form class="d-flex justify-content-center me-2" action="login.php">
							<button class="btn btn-outline-success w-50" type="submit">Zaloguj sie by zobaczyć swoje ulubione!</button>
						</form>
					<?php } ?>
				</div>
			</div>
		<?php } else {
		?>
			<a href="strona_produktu.php" class="text-decoration-none link-dark">
				<div class="row">
					<div class="col-xl-6 col-md-12 d-flex justify-content-xl-start justify-content-sm-center py-2 px-4">
						<a href="strona_produktu.php" class="text-decoration-none link-dark">
							<p class="d-inline mx-3" style="font-size: 1.3em">Nie ma polubionych produktów! </p>
						</a>
					</div>
				</div>
			</a>
		<?php
		} ?>
		</table>
	</div>
	<?php
	include("footer.php");
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>