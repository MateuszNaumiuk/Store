<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php")
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
				<p class="my-3 fw-light">betashop>*kategoria*>*podkategoria*</p>
				<div class="row">
					<div class="col-4">
						<img src="img/intelek.jpg" class="img-fluid">
					</div>

					<div class="col-8">
						<div class="row">
							<div class="col-12">
								<p style="font-size:2.7vw;" class="fw-light">Procesor Intel Pentium G4560</p>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<i class="bi bi-star-fill d-inline" style="color: #ffc107; font-size:1.3vw;"></i>
								<i class="bi bi-star-fill d-inline" style="color: #ffc107; font-size:1.3vw;"></i>
								<i class="bi bi-star-fill d-inline" style="color: #ffc107; font-size:1.3vw;"></i>
								<i class="bi bi-star-fill d-inline" style="color: #ffc107; font-size:1.3vw;"></i>
								<i class="bi bi-star-fill d-inline mr-2" style="color: #ffc107; font-size:1.3vw;"></i>
								<p class="d-inline">(ilosc ocen)</p>
							</div>
						</div>

						<div class="row mt-4 border-bottom">
							<div class="col-4">
								<p style="font-size:0.85vw;">Producent: Intel</p>
							</div>
							<div class="col-4">
								<p style="font-size:0.85vw;">Kod Producenta: XXXXXXXXXX</p>
							</div>
							<div class="col-4">
								<p style="font-size:0.85vw;">Kod produktu: 123456789</p>
							</div>




						</div>
						<div class="row mt-4 ">
							<div class="col-6 pb-2 ">
								<div class="row">
									<div class="col-12">
										<p style="font-size:0.9vw;">Generacja: 6</p>
										<p style="font-size:0.9vw;">Taktowanie: 3.6GHZ</p>
										<p style="font-size:0.9vw;">Pamięć Cache: 12MB</p>
										<a href="#" class="text-dark text-decoration-none"><u class="fw-bold" style="font-size:0.9vw;">Pełna specyfikacja</u></a>
									</div>
									<div class="row mt-5">
										<div class="col-12">
											<p style="font-size:1vw;">Zintegrowany układ graficzny:</p>
										</div>
									</div>
									<div class="row">
										<button class="btn btn-outline-success w-50" type="submit">Tak <br> +150zł</button>
										<button class="btn btn-outline-success w-50" type="submit">Nie</button>
									</div>
								</div>
							</div>
							<div class="col-6 border rounded">
								<div class="row py-3">
									<div class="col-6 text-center">
										<del style="font-size:1vw;">850zł</del>
									</div>
									<div class="col-6 text-center">
										<p style="font-size:1.5vw;" class="fw-bold">799zł!</p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<form class="d-flex me-2 w">
											<input type="number" class="form-control w-25 me-2" placeholder="1">
											<button class="btn btn-outline-success w-75" type="submit">Dodaj do koszyka</button>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-12 pt-4 pb-3">
										<i class="bi bi-clock d-inline me-3 ms-3" style="font-size:2vw;"></i>
										<p class="d-inline" style="font-size:1vw;">U ciebie za dwa dni!</p>
									</div>
									<div class="col-12 py-3">
										<i class="bi bi-truck d-inline me-3 ms-3" style="font-size:2vw;"></i>
										<p class="d-inline" style="font-size:1vw;">Darmowa dostawa!</p>
									</div>
									<div class="col-12 py-3">
										<i class="bi bi-check-circle d-inline me-3 ms-3" style="font-size:2vw;"></i>
										<p class="d-inline" style="font-size:1vw;">Dostępny w dużej ilości!</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 border rounded text-justify">
						<p style="font-size:2vw;" class="ms-2 my-3"><i class="bi bi-cpu me-3"></i>Opis</p>
						<p class="ms-5 me-5" style="font-size:1vw;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin ipsum sit amet ex porta tempor. Mauris consequat erat dapibus velit venenatis, vitae hendrerit leo sodales. Fusce fringilla lobortis consequat. Nulla semper purus a condimentum consequat. Morbi et placerat sem. Vivamus pellentesque sed nisl feugiat laoreet. Ut pharetra orci leo, ut consequat neque tincidunt a. In tempor dolor justo, eget maximus arcu sodales eu. Suspendisse nec facilisis justo.

							Nam eu turpis maximus, ultricies lorem sed, hendrerit metus. In ullamcorper, nulla vel ultrices suscipit, orci justo sodales dolor, laoreet ullamcorper felis elit at lacus. In hac habitasse platea dictumst. Vestibulum tellus velit, gravida nec tincidunt nec, porta at odio. Sed at porta ligula, semper egestas dolor. Nunc ultricies, massa eget fermentum scelerisque, magna libero fermentum massa, vehicula semper metus arcu fringilla risus. Pellentesque at pulvinar nulla. Donec elementum est vel orci hendrerit dapibus.

							Sed cursus semper massa sed fermentum. Maecenas ligula massa, maximus non molestie at, blandit sit amet sapien. Phasellus efficitur in mauris quis scelerisque. In porttitor lectus ut risus interdum varius. Vestibulum porta enim eu luctus fringilla. Phasellus nec porta diam, iaculis accumsan metus. Phasellus gravida magna sed libero pretium tincidunt. Etiam felis est, accumsan ac ante a, vulputate efficitur mi. Nam et lacus pharetra, tempus ligula non, suscipit est. Aliquam eleifend urna sit amet nunc viverra, vitae dictum nisi fringilla. In vulputate mauris a purus mattis, eu aliquam ante laoreet. Integer vestibulum, ligula vel fringilla viverra, quam mauris elementum elit, nec aliquam magna mauris at dolor. In non lobortis arcu. Curabitur at tincidunt magna. Vivamus diam nunc, dignissim tincidunt nibh nec, laoreet tempor augue.

							Proin condimentum consequat blandit. Aliquam vel felis nisl. Ut scelerisque metus lectus, pellentesque rutrum velit efficitur vel. Vestibulum eget elit orci. Proin efficitur massa vitae orci consectetur condimentum. Sed ultrices enim erat, eget scelerisque elit auctor vitae. Nam maximus euismod erat, a dictum leo suscipit eget. Morbi consequat turpis vel dolor vulputate suscipit.

							Aenean iaculis ex velit, sit amet venenatis nisl convallis sit amet. Integer non sem ultricies, commodo justo sed, ornare nulla. Nam id lacus tempor, lacinia augue at, pharetra quam. Vestibulum elementum nunc sed tempor ultrices. Curabitur efficitur orci sit amet turpis elementum scelerisque. Nam feugiat lorem lectus, ac pulvinar erat convallis eget. Sed eu viverra velit. Sed rhoncus turpis ac viverra finibus.</p>
					</div>
				</div>

			</div>
		</section>
	</main>

	<!-- footer -->
	<?php
	include("footer.php");
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>