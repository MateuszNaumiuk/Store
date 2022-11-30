<!DOCTYPE html>
<html lang=pl>

<head>
    <?php
    require("bootstrapConnection.php");
    require("connection.php");
    ?>
    <title>Klienci</title>

</head>

<body>

    <?php
    require("navbar.php");
    ?>

    <main>
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
        <!-- footer -->
        <?php
        include("footer.php");
        ?>
    </main>
</body>

</html>