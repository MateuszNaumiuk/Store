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
        <div class="row my-3">
            <p class="border-bottom border-secondary fw-bold text-center" style="font-size:2.5em">Panel Administratora</p>
            <div class="col-xl-2 col-md-4">
                <div class="row">
                    <div class="order_table">
                        <h3 class="h4 my-3">Zamówienia</h3>
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
                    <div class="user_base">
                        <h3 class="h4 my-3">Dane klientów</h3>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Id klienta</th>
                                    <th scope="col">Login</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Hasło</th>
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
                                $zapytanie = $conn->query("SELECT `user_id`, `login`, email, pass, fname, lname, birthDate, phoneNumber, country, town, street, house_nr, zipcode, privileges FROM users");
                                while ($row = $zapytanie->fetch()) {
                                    echo "
                                <tr>" .
                                        "<td>" . $row['user_id'] . "</td>" .
                                        "<td>" . $row['login'] . "</td>" .
                                        "<td>" . $row['email'] . "</td>" .
                                        "<td>" . $row['pass'] . "</td>" .
                                        "<td>" . $row['fname'] . "</td>" .
                                        "<td>" . $row['lname'] . "</td>" .
                                        "<td>" . $row['birthDate'] . "</td>" .
                                        "<td>" . $row['phoneNumber'] . "</td>" .
                                        "<td>" . $row['country'] . "</td>" .
                                        "<td>" . $row['town'] . "</td>" .
                                        "<td>" . $row['street'] . "</td>" .
                                        "<td>" . $row['house_nr'] . "</td>" .
                                        "<td>" . $row['zipcode'] . "</td>" .
                                        "<td>" . $row['privileges'] . "</td>";
                                        echo '<td><a href="usuwanie.php?id='.$row['user_id'].'"><button type="button" class="btn btn-danger">Usuń</button></a></td>';
                                        echo '<td><a href="edytowanie.php?id='.$row['user_id'].'"><button type="button" class="btn btn-primary">Edytuj</button></a></td>'.
                                        "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>


                    </div>


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