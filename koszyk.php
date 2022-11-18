<html>

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	require("navbar.php");
	?>
	<title>Shopping Cart</title>

</head>
<?php
if (isset($_POST["add"])) {
	if (isset($_SESSION["cart"])) {
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count = count($_SESSION["cart"]);
			$item_array = array(
				'product_id' => $_POST["picture_id"],
				'image_name' => $_POST["hidden_name"],
				'product_price' => $_POST["hidden_price"],
				'item_quantity' => $_POST["quantity"],
				'image_path' => $_POST["hidden_path"],
			);
			$_SESSION["cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Produkt jest juz w koszyku")</script>';
		}
	} else {
		$item_array = array(
			'product_id' => $_GET["id"],
			'image_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"],
			'image_path' => $_POST["hidden_path"],
		);
		$_SESSION["cart"][0] = $item_array;
	}
}
if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["cart"] as $keys => $value) {
			if ($value["product_id"] == $_GET["id"]) {
				unset($_SESSION["cart"][$keys]);
?>
				<div class="alert alert-dark text-center" role="alert">
					Usunieto z koszyka.
				</div>
				<meta http-equiv="refresh" content="2">
<?php
			}
		}
	}
} ?>


<body>
	<div class="container-md-fluid container-xl">
		<h1 class="py-3">Twój koszyk: </h1>
		<?php if (!empty($_SESSION["cart"])) {
			$total = 0;
			?>
			</tr>
			<div class="border rounded my-2">
				<a href="strona_produktu.php" class="text-decoration-none link-dark">
					<?php
					foreach ($_SESSION["cart"] as $key => $value) {
					?>
						<div class="row">
							<div class="col-12 d-flex justify-content-xl-start justify-content-sm-center py-2 px-4">
								<a href="strona_produktu.php" class="text-decoration-none link-dark">
									<img class="img-fluid d-inline" src="<?= $value['image_path'] ?>" style="max-width:100px; max-height:100px;">
									<p class="d-inline mx-3" style="font-size: 1.3em"><?= $value['image_name'] ?></p>
									<p class="d-inline mx-3" style="font-size: 1.3em">Cena: <?= $value["item_quantity"] * $value["product_price"] . " zł"; ?></p>
									<p class="d-inline mx-3" style="font-size: 1.3em">ilosc: <?= $value['item_quantity'] . " szt" ?></p>
								</a>
								<a href="koszyk.php?action=delete&id=<?php echo $value["product_id"]; ?>" class="text-danger ">Remove Item</a>

							</div>
						</div>
					<?php } ?>
					<div class="row">
						<div class="col-12 d-flex justify-content-end">
							<p class="d-inline mx-3" style="font-size: 1.3em">Cena ostateczna: <?= $total = $total + ($value["item_quantity"] * $value["product_price"]) . " zł"?></p>
						</div>
					</div>
				</a>
			</div>

			<div class="row text-center ">
				<div class="col-12 text-center">
					<?php
					if (isset($_SESSION['user'])) {
					?>
						<form class="d-flex justify-content-center " action="">
							<button class="btn btn-outline-success w-50" type="submit">Złóż zamówienie</button>
						</form>
					<?php
					} else {
					?>
						<form class="d-flex justify-content-center me-2" action="login.php">
							<button class="btn btn-outline-success w-50" type="submit">Zaloguj sie by złożyć zamówienie</button>
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
							<p class="d-inline mx-3" style="font-size: 1.3em">Koszyk jest pusty! </p>
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
</body>

</html>