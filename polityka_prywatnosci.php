<!DOCTYPE html>
<html lang="pl">

<head>
	<?=
	require("bootstrapConnection.php")
	?>

	<title>BetaShop</title>
</head>

<body>
	<header>
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border border-secondary">
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

	<main>
		<section class="page">
			<div class="container">
				<div class="row text-justify bg-second_navbar border rounded my-2">
					<div class="col-12 py-5 px-4">
						<h1>Polityka Prywatności </h1>
						<h3> 1. </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at mauris facilisis, luctus nisi non, commodo elit. Integer tempor est a erat convallis, ac facilisis arcu tristique. Pellentesque tristique ut dolor ac ultrices. Suspendisse bibendum porta tellus non dictum. Praesent sollicitudin orci vel urna dignissim congue. Nunc tempor felis quis mattis facilisis. Nullam dictum faucibus est, blandit vulputate purus. Donec ac dignissim tellus. Ut euismod nunc sed facilisis aliquet. Maecenas ultricies, lacus eu blandit mattis, neque dui cursus ex, a aliquet nunc lectus vel dolor.

							Sed interdum eu dui in egestas. Cras mattis vestibulum lorem </p>
						<h3> 2. </h3>
						<p>in pharetra justo lacinia ac. Nam sed lorem nulla. Curabitur cursus feugiat tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ut nibh felis. Cras felis arcu, imperdiet vitae dui in, molestie pretium massa. Aenean nec leo ligula.

							In nec risus nec odio vulputate molestie. Curabitur efficitur, mauris in tincidunt lacinia </p> sapien tellus varius felis, ut facilisis sem lacus a arcu. Vivamus faucibus sapien odio, in pellentesque neque molestie nec. Pellentesque facilisis auctor magna, et mattis ex elementum vestibulum. Morbi vel lectus vel ante suscipit congue in eget turpis. Nunc ultricies nulla in sapien sagittis commodo. Fusce sit amet odio ut augue molestie egestas. Sed non orci id tortor convallis varius. Vestibulum porttitor est vitae ex faucibus suscipit.

						Sed at feugiat neque, ut maximus sapien. Phasellus pellentesque ante sed nisl commodo iaculis. <h3> 3. </h3>
						<p> Maecenas laoreet leo eu ante ultricies sollicitudin. Sed dignissim pulvinar dolor sit amet congue. Pellentesque interdum magna eu odio faucibus vestibulum. Aenean fermentum eleifend leo, tincidunt lobortis augue aliquet vitae. Vestibulum vitae iaculis nisi.

							Sed fringilla ut nisi a pretium. Nunc viverra, risus at dictum fermentum, velit urna rutrum libero </p> ac ullamcorper enim lacus vitae dui. Nulla sed nulla libero. Fusce blandit venenatis ipsum eu molestie. Phasellus sem nisl, imperdiet vel venenatis nec, fermentum vel elit. Integer facilisis massa sodales mauris blandit tincidunt. Nulla dui nisl, dignissim vel est eget, vehicula interdum ipsum. Praesent tempus eros in volutpat malesuada. Vivamus porttitor ipsum nec odio pretium aliquam. Vestibulum in lectus placerat, hendrerit augue a, dignissim ipsum. Aliquam faucibus nunc ut ultrices convallis. Vivamus volutpat quis nunc laoreet egestas. Mauris pulvinar placerat risus.

						Morbi euismod eros eget pulvinar venenatis. Curabitur sit amet turpis in libero pellentesque vehicula. <h3> 4. </h3>
						<p> Nam a massa mattis, porttitor orci vitae, interdum nisl. Suspendisse eu eros id mi dapibus auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non imperdiet dui. Nam commodo dolor vel libero varius, elementum tincidunt quam fringilla. Nam mi ligula, porttitor a dui vel, volutpat porttitor lorem. Praesent a massa sit amet felis semper cursus quis nec lectus. Aliquam tempus sem sed est posuere tempus. Vivamus ultricies vulputate orci, varius gravida metus euismod et. Integer congue, ex nec laoreet dictum, augue diam scelerisque tellus, eget cursus nunc nibh at sapien. Morbi sed erat in mi sodales mattis. Integer et eros eu ipsum consequat molestie.

							Quisque lacinia nisi id faucibus consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> Sed rhoncus, tellus nec ullamcorper sagittis, metus dui ornare turpis, nec posuere ipsum quam consequat arcu. Pellentesque neque lorem, tincidunt sit amet felis id, vestibulum sodales erat. Morbi sit amet maximus odio. Quisque nec mattis dui. Vestibulum cursus vulputate ornare.

						Proin finibus dui interdum sem malesuada, ut tincidunt urna rutrum. Vestibulum vitae turpis vitae ipsum tempor <h3> 5. </h3>
						<p>feugiat. Quisque aliquam scelerisque dapibus. Maecenas nisi lacus, condimentum vitae semper sed, vehicula a velit. Nunc vehicula rutrum magna, eu sodales mi varius eu. Cras scelerisque nisl id dignissim consectetur. Etiam commodo quam gravida nibh laoreet finibus. Morbi faucibus risus ligula, ac faucibus dui sollicitudin sed. Cras eu tortor vitae tellus feugiat sagittis. Quisque ultrices eu enim sagittis hendrerit. Phasellus justo mi, blandit nec sapien vel, pellentesque pharetra urna. Nullam et eleifend libero. Duis felis orci, pellentesque a quam feugiat, fringilla iaculis eros. Etiam eget est iaculis, ornare lacus ac, rutrum ex. Phasellus sapien urna, rhoncus quis turpis convallis, semper volutpat tortor.

							Aenean tempor a eros vel convallis. Nam dapibus nisl nec fringilla sollicitudin. Nullam ultrices nec massa vel commodo. Maecenas posuere nunc justo. Nullam sed interdum ex, at tincidunt orci. Nam id odio vel lectus tincidunt aliquam accumsan pellentesque augue. Proin suscipit laoreet mauris, non mollis est porta finibus. Morbi ligula risus, aliquet a enim sit amet, vehicula ultrices nibh. Nulla euismod accumsan suscipit. Integer quis consequat odio. Donec vel felis at nibh dignissim varius non at risus.

							Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce accumsan quam mi, ultricies ultricies ipsum tristique eu. Vivamus quis tortor a justo sodales bibendum nec sit amet nisi. Aenean sed consequat tellus. Maecenas rutrum justo sit amet pharetra ullamcorper. Nulla vehicula sed sem vel blandit. Cras blandit lectus sed lacus ultricies tincidunt. In congue varius est, vel rutrum quam venenatis tristique. Nulla a est et velit aliquam auctor. Fusce varius neque feugiat tellus convallis, quis laoreet ligula dignissim. In ut ante sit amet turpis suscipit mollis quis ut mi. </p>

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


	</main>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>