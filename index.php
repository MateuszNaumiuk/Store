<!DOCTYPE html>
<html lang="pl">

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	?>
	<title>BetaShop</title>
</head>

<body>
	<header>
		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark border border-secondary">
			<div class="container-fluid">
				<a class="navbar-brand order-first" href="index.html"><img src="img/logo.png" width="180" height="60"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link d-block align-middle" href="ulubione.html"><i class="bi bi-heart" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i> Ulubione</a>
						</li>
						<li class="nav-item">
							<a class="nav-link d-block" href="koszyk.html"><i class="bi-cart" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i>Koszyk</a>
						</li>
						<li class="nav-item">
							<a class="nav-link d-block " href="konto.html"><i class="bi-person" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i>Konto</a>
						</li>
					</ul>
				</div>
				<form class="d-flex me-2 w">
					<input class="form-control me-2 form-control-resposive" type="search" placeholder="Czego szukasz?" aria-label="Search">
					<button class="btn btn-outline-success" type="submit"><i class="bi-search"></i></button>
				</form>
			</div>
		</nav>
		<nav class="navbar navbar-expand-lg navbar-light bg-second_navbar border border-secondary navdisappear">
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto ">
					<li class="nav-item text-center px-5 ">
						<a class="nav-link text-dark " href="strona_kategorii.html">Laptopy i Komputery</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.html">Smartfony i smartwatche</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.html">Gaming i Streaming</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.html">Podzespoły Komputerowe</a>
					</li>
					<li class="nav-item text-center px-5">
						<a class="nav-link text-dark" href="strona_kategorii.html">Urządzenia peryferyjne</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<a href="#"><img class="img-fluid mt-5 mb-4" src="img/baner.png" alt="Baner"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 border-top border-secondary ml-5">
					<p class="border-bottom border-secondary py-2 fw-bold " style="font-size:2.5vw">Polecamy!</p>
					<div class="row">
						<div class="container text-center my-3">
							<div class="row mx-auto mt-5 my-auto justify-content-center">
								<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img"><img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid"> </div>
													<div class="card-img-overlay">Slide 1</div>
												</div>
											</div>
										</div>

										<?php
										for ($i = 1; $i < 5; $i++) {
										?>
											<div class="carousel-item">
												<div class="col-md-3">
													<div class="card">
														<div class="card-img"> 
															<img src="img/sprzet<?=$i?>.jpg" class="img-fluid" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'" >
														</div>
													</div>
												</div>
											</div>
										<?php
										}
										?>
									</div> <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="text-center text-lg-start bg-light text-muted mt-3">
		<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
			<div class="me-5 d-none d-lg-block">
				<span>Nasze social Media:</span>
			</div>
			<div>
				<a href="https://www.facebook.com/" target="_blank" class="me-4 text-reset">
					<i class="bi bi-facebook"></i>
				</a>
				<a href="https://twitter.com/" target="_blank" class="me-4 text-reset">
					<i class="bi bi-twitter"></i>
				</a>
				<a href="https://www.youtube.com/" target="_blank" class="me-4 text-reset">
					<i class="bi bi-youtube"></i>
				</a>
				<a href="https://www.instagram.com/" target="_blank" class="me-4 text-reset">
					<i class="bi bi-instagram"></i>
				</a>
			</div>
		</section>

		<section class="">
			<div class="container text-center text-md-start mt-5">
				<div class="row mt-3">
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<h6 class="text-uppercase fw-bold mb-4">
							<i class="fas fa-gem me-3"></i>O nas
						</h6>
						<p>
							Jesteśmy firmą od lat zajmującą się sprzedażą detaliczną artykułów komputerowych.
							Stawiamy na jakość oraz zadowolenie naszych klientów.
						</p>
					</div>



					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
						<h6 class="text-uppercase fw-bold mb-4">
							BetaShop
						</h6>
						<p>
							<a href="o_nas.html" class="text-reset">O nas</a>
						</p>
						<p>
							<a href="regulamin.html" class="text-reset">Regulamin</a>
						</p>
						<p>
							<a href="polityka_prywatnosci.html" class="text-reset">Polityka Prywatności</a>
						</p>
						<p>
							<a href="forum.html" class="text-reset">Forum</a>
						</p>
					</div>



					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
						<h6 class="text-uppercase fw-bold mb-4">
							Przydatne linki
						</h6>
						<p>
							<a href="wspolpraca.html" class="text-reset">Współpraca</a>
						</p>
						<p>
							<a href="faq.html" class="text-reset">FAQ</a>
						</p>
						<p>
							<a href="pomoc.html" class="text-reset">Pomoc techniczna</a>
						</p>
						<p>
							<a href="montaz.html" class="text-reset">Usługi montażu</a>
						</p>
					</div>



					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
						<h6 class="text-uppercase fw-bold mb-4">
							Kontakt
						</h6>
						<p><i class="bi bi-house me-3"></i> Siedlce 08-110, Sekulska 3</p>
						<p>
							<i class="bi bi-envelope me-3"></i>
							info@Beta.shop
						</p>
						<p><i class="bi bi-telephone me-3"></i>123 456 789</p>
						<p><i class="bi bi-printer me-3"></i> + 01 234 567 89</p>
					</div>
				</div>
			</div>
		</section>

		<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
			© 2022 Copyright:
			<a class="text-reset fw-bold" href="#">BetaShop.com</a>
		</div>
	</footer>

	<script type="text/javascript" src="carouselScript.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>