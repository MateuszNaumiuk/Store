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
                <div class="col-md-3 col-sm-12 my-5" style="text-align:center;">
                    <form method="POST">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Zamowienia
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <button type="submit" name="zamowienia" value="zamowienia" class="btn btn-secondary my-4">Zamowienia</button><br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Klienci
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <button type="submit" name="klienci" value="klienci" class="btn btn-secondary my-4">Klienci</button><br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Produkty
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <button type="submit" name="products" value="products" class="btn btn-secondary my-4">Produkty</button><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-9 mx">
                    <?php
                    if (isset($_POST['zamowienia'])) {
                    ?>
                        <div class="col-12">
                            <h3 class="my-3 text-center"><b>Zamówienia</b></h3>
                            <div class="table-responsive">
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
                                                <td> <?= $row['user_id'] ?> </td>
                                                <td> <?= $row['picture_id'] ?> </td>
                                                <td> <?= $row['order_date'] ?> </td>
                                                <td> <?= $row['order_status'] ?> </td>
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
                        </div>
                    <?php
                    } else if (isset($_POST['klienci'])) {
                    ?>
                        <div class="col-12">
                            <h3 class="my-3 text-center"><b>Klienci</b></h3>
                            <div class="table-responsive">
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
                        <form action="dodawanie.php" method="POST">
                        <input type="submit" id="addClient" name="addClient" class="btn btn-outline-success w-100 my-5" value="Dodaj">
                        </form>
                    <?php
                    } else if (isset($_POST['products'])) {
                    ?>
                        <div class="col-12">
                            <h3 class="my-3 text-center"><b>Produkty</b></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Id produktu</th>
                                            <th scope="col">Nazwa produktu</th>
                                            <th scope="col">Cena</th>
                                            <th scope="col">Opis</th>
                                            <th scope="col">Wysokość</th>
                                            <th scope="col">Szerokość</th>
                                            <th scope="col">image_path</th>
                                            <th scope="col">Uprawnienia</th>
                                            <th scope="col">Nazwa kategorii</th>
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
                                                <td> <?= $row['height'] ?> </td>
                                                <td> <?= $row['width'] ?> </td>
                                                <td> <?= $row['image_path'] ?> </td>
                                                <td> <?= $row['privileges'] ?> </td>
                                                <td> <?= $row['category'] ?> </td>
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
                        <form action="dodawanie.php" method="POST">
                        <input type="submit" id="addProduct" name="addProduct" class="btn btn-outline-success w-100 my-5" value="Dodaj">
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>



        </div>

    </div>
    <?php
    include("footer.php");
    ?>

</body>

</html>
