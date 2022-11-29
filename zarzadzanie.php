<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>Zarzadzanie</title>
    <?php
    require("bootstrapConnection.php");
    require("connection.php");
    ?>
</head>

<body>
    <?php require("navbar.php"); ?>
    <div class="container-fluid">
        <p class="border-bottom border-secondary fw-bold text-center" style="font-size:2.5em">Panel Administratora</p>
        <div class="container">
            <div class="row">
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
                                echo "
                                <tr>" .
                                    "<td>" . $row['order_id'] . "</td>" .
                                    "<td>" . $row['user_id'] . "</td>" .
                                    "<td>" . $row['picture_id'] . "</td>" .
                                    "<td>" . $row['order_date'] . "</td>" .
                                    "<td>" . $row['order_status'] . "</td>" .
                                    "<td>" . $row['fname'] . "</td>" .
                                    "<td>" . $row['lname'] . "</td>" .
                                    "<td>" . $row['phone'] . "</td>" .
                                    "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3 class="my-3 text-center"><b>Klienci</b></h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id klienta</th>
                                <th scope="col">Login</th>
                                <th scope="col">Email</th>
                                <th scope="col">Imię</th>
                                <th scope="col">Nazwisko</th>
                                <th scope="col">Data urodzenia</th>
                                <th scope="col">Numer telefonu</th>
                                <th scope="col">Kraj</th>
                                <th scope="col">Miasto</th>
                                <th scope="col">Ulica</th>
                                <th scope="col">Nr domu</th>
                                <th scope="col">Kod pocztowy</th>
                                <th scope="col">Upoważnienia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $zapytanie = $conn->query("SELECT `user_id`, `login`, email, fname, lname, birthDate, phoneNumber, country, town, street, house_nr, zipcode, privileges FROM users");
                            while ($row = $zapytanie->fetch()) {
                            ?>
                                <tr>
                                    <td> <?= $row['user_id'] ?> </td>
                                    <td> <?= $row['login'] ?> </td>
                                    <td> <?= $row['email'] ?> </td>
                                    <td> <?= $row['fname'] ?> </td>
                                    <td> <?= $row['lname'] ?> </td>
                                    <td> <?= $row['birthDate'] ?> </td>
                                    <td> <?= $row['phoneNumber'] ?> </td>
                                    <td> <?= $row['country'] ?> </td>
                                    <td> <?= $row['town'] ?> </td>
                                    <td> <?= $row['street'] ?> </td>
                                    <td> <?= $row['house_nr'] ?> </td>
                                    <td> <?= $row['zipcode'] ?> </td>
                                    <td> <?= $row['privileges'] ?> </td>
                                    <td><a href="usuwanie.php?id=<?= $row['user_id'] ?>"><button type="button" class="btn btn-danger">Usuń</button></a></td>
                                    <td><a href="edytowanie.php?id=<?= $row['user_id'] ?>"><button type="button" class="btn btn-primary">Edytuj</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3 class="my-3 text-center"><b>Produkty</b></h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id produktu</th>
                                <th scope="col">Nazwa produktu</th>
                                <th scope="col">Cena</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Id kategorii</th>
                                <th scope="col">Wysokość</th>
                                <th scope="col">Szerokość</th>
                                <th scope="col">image_path</th>
                                <th scope="col">Uprawnienia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $zapytanie = $conn->query("SELECT * FROM pictures");
                            while ($row = $zapytanie->fetch()) {
                            ?>
                                <tr>
                                    <td> <?= $row['picture_id'] ?> </td>
                                    <td> <?= $row['pic_name'] ?> </td>
                                    <td> <?= $row['price'] ?> </td>
                                    <td> <?= $row['description'] ?> </td>
                                    <td> <?= $row['category_id'] ?> </td>
                                    <td> <?= $row['height'] ?> </td>
                                    <td> <?= $row['width'] ?> </td>
                                    <td> <?= $row['image_path'] ?> </td>
                                    <td> <?= $row['privileges'] ?> </td>
                                    <td><a href="usuwanie.php?pic=<?= $row['picture_id'] ?>"><button type="button" class="btn btn-danger">Usuń</button></a></td>
                                    <td><a href="edytowanie.php?pic=<?= $row['picture_id'] ?>"><button type="button" class="btn btn-primary">Edytuj</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>