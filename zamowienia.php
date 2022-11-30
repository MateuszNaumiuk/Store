<!DOCTYPE html>
<html lang=pl>

<head>
	<?php
	require("bootstrapConnection.php");
	require("connection.php");
	?>
	<title>Zamówienia</title>

</head>
<body>

	<?php
	require("navbar.php");
	?>

	<main>
	<div class="col-12">
                    <h3 class="my-3 text-center"><b>Zamówienia</b></h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id zamówienia</th>
                                <th scope="col">Id klienta</th>
                                <th scope="col">Id produktu</th>
                                <th scope="col">Data zamówienia</th>
                                <th scope="col">Status</th>
                                <th scope="col">Imię</th>
                                <th scope="col">Nazwisko</th>
                                <th scope="col">Numer telefonu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $zapytanie = $conn->query("SELECT * FROM order_info");
                            while ($row = $zapytanie->fetch()) {
								?>
                                <tr>
                                    <td> <?= $row['order_id'] ?> </td> 
                                    <td>  <?=$row['user_id'] ?> </td>
                                    <td> <?= $row['picture_id'] ?>  </td>
                                    <td> <?= $row['order_date'] ?> </td>
                                    <td> <?=$row['order_status'] ?> </td>
                                    <td> <?= $row['fname'] ?> </td>
                                    <td> <?= $row['lname'] ?> </td>
                                    <td> <?= $row['phone'] ?> </td>
									<td><a href="usuwanie.php?order=<?= $row['order_id'] ?>"><button type="button" class="btn btn-danger">Usuń</button></a></td>
                                    <td><a href="edytowanie.php?order=<?= $row['order_id'] ?>"><button type="button" class="btn btn-primary">Edytuj</button></a></td>
                                    </tr>
									<?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
		<!-- footer -->
		<?php
		include("footer.php");
		?>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
