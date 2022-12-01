<!DOCTYPE html>
<html lang=pl>

<head>
    <?php
    require("bootstrapConnection.php");
    require("connection.php");
    require("navbar.php");
    ?>
</head>

<body>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $zapytanie = $conn->query("SELECT * FROM users WHERE 'user_id'= $id");
        $row = $zapytanie->fetch()
    ?>
        <div class="container">
            <form method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Podaj imię</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Podaj imie">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Podaj nazwisko</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Podaj nazwisko">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Numer telefonu</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Podaj numer telefonu">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Data urodzenia</label>
                    <input type="text" class="form-control" id="birthDate" name="birthDate" placeholder="Podaj datę urodzenia">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Państwo</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Podaj państwo">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Miasto</label>
                    <input type="text" class="form-control" id="town" name="town" placeholder="Podaj miasto">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Ulica</label>
                    <input type="text" class="form-control" id="street" name="street" placeholder="Podaj ulicę">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Numer domu</label>
                    <input type="text" class="form-control" id="house_nr" name="house_nr" placeholder="Podaj numer domu">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Kod pocztowy</label>
                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Podaj numer domu">
                </div>

                <div class="mb-3">
                    <?php
                    $zapytanie = $conn->query("SELECT * FROM all_privileges");
                    while ($row = $zapytanie->fetch()) {
                    ?>
                        <input type="radio" id="<?= $row['privileges'] ?>" name="user_type" value="<?= $row['privileges'] ?>" checked>
                        <label for=""><?= $row['privileges'] ?></label><br>

                    <?php
                    }
                    ?>
                </div>

                <input type="submit" name="Edytuj" class="btn btn-primary" value="Zapisz zmiany" />
                <input type="submit" name="Cofnij" class="btn btn-danger" value="Wróć" />
            </form>
        </div>
        <?php

        if (isset($_POST['Edytuj'])) {
            $fname =  $_REQUEST["fname"];
            $lname =  $_REQUEST["lname"];
            $phoneNumber =  $_REQUEST["phoneNumber"];
            $birthDate =  $_REQUEST["birthDate"];
            $country =  $_REQUEST["country"];
            $town =  $_REQUEST["town"];
            $street =  $_REQUEST["street"];
            $house_nr =  $_REQUEST["house_nr"];
            $zipcode =  $_REQUEST["zipcode"];
            $privileges =  $_POST["user_type"];
            $zapytanie = $conn->prepare("UPDATE users SET fname = '" . $fname . "',  lname = '" . $lname . "',  birthDate = '" . $birthDate . "', phoneNumber = '" . $phoneNumber . "', country = '" . $country . "', town = '" . $town . "', street = '" . $street . "', house_nr = '" . $house_nr . "', zipcode = '" . $zipcode . "', privileges = '" . $privileges . "' WHERE user_id = $id ");
            $zapytanie->execute();
        ?>
            <meta http-equiv='refresh' content='0;url=klienci.php'>
        <?php
        }
        if (isset($_POST['Cofnij'])) {
        ?>
            <meta http-equiv='refresh' content='0;url=klienci.php'>
        <?php
        }
    }
    if (isset($_GET['pic'])) {
        $id = $_GET['pic'];
        $zapytanie = $conn->query("SELECT * FROM pictures WHERE 'picture_id'= $id");
        $row = $zapytanie->fetch();
        ?>

        <div class="container">
            <form method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Podaj nazwę produktu</label>
                    <input type="text" class="form-control" id="pic_name" name="pic_name" value="" placeholder="Podaj  nazwę produktu">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Podaj Cene</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Podaj Cene">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Podaj Opis</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Podaj Opis">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Podaj wysokość</label>
                    <input type="text" class="form-control" id="height" name="height" placeholder="Podaj wysokość">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Podaj szerokość</label>
                    <input type="text" class="form-control" id="width" name="width" placeholder="Podaj szerokość">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Podaj ścieżkę do obrazka</label>
                    <input type="text" class="form-control" id="image_path" name="image_path" value="obrazki/asdasd.jpg ">
                </div>

                <div class="mb-3">
                    <?php
                    $zapytanie = $conn->query("SELECT * FROM all_privileges");
                    while ($row = $zapytanie->fetch()) {
                    ?>
                        <input type="radio" id="<?= $row['privileges'] ?>" name="privileges" value="<?= $row['privileges'] ?>" checked>
                        <label for=""><?= $row['privileges'] ?></label><br>

                    <?php
                    }
                    ?>
                </div>

                <div class="mb-3">
                    <?php
                    $zapytanie = $conn->query("SELECT * FROM category");
                    while ($row = $zapytanie->fetch()) {
                    ?>
                        <input type="radio" id="<?= $row['cat_name'] ?>" name="category" value="<?= $row['cat_name'] ?>" checked>
                        <label for=""><?= $row['cat_name'] ?></label><br>

                    <?php
                    }
                    ?>
                </div>

                <input type="submit" name="Edytuj" class="btn btn-primary" value="Zapisz zmiany" />
                <input type="submit" name="Cofnij" class="btn btn-danger" value="Wróć" />
            </form>
        </div>
        <?php

        if (isset($_POST['Edytuj'])) {
            $picname =  $_REQUEST["pic_name"];
            $price =  $_REQUEST["price"];
            $description =  $_REQUEST["description"];
            $height =  $_REQUEST["height"];
            $width =  $_REQUEST["width"];
            $imagePath =  $_REQUEST["image_path"];
            $privileges =  $_POST["privileges"];
            $categoryName =  $_REQUEST["category"];
            $zapytanie = $conn->prepare("UPDATE pictures SET pic_name = '" . $picname . "',  price = '" . $price . "',  description = '" . $description . "', height = '" . $height . "', width = '" . $width . "', image_path = '" . $imagePath . "', privileges = '" . $privileges . "' , category = '" . $categoryName . "' WHERE picture_id = $id ");
            $zapytanie->execute();
        ?>
            <meta http-equiv='refresh' content='0;url=products.php'>
        <?php
        }
        if (isset($_POST['Cofnij'])) {
        ?>
            <meta http-equiv='refresh' content='0;url=products.php'>
        <?php
        }
    }
    if (isset($_GET['order'])) {
        $id = $_GET['order'];
        $zapytanie = $conn->query("SELECT * FROM order_info WHERE 'order_id'= $id");
        $row = $zapytanie->fetch();
        ?>

        <div class="container">
            <form method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Podaj datę zamówienia</label>
                    <input type="text" class="form-control" id="order_date" name="order_date" placeholder="Podaj datę zamówienia">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Podaj status zamówienia</label>
                    <input type="text" class="form-control" id="order_status" name="order_status" placeholder="Podaj status zamówienia">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Podaj imię</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Podaj imię">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Podaj nazwisko</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Podaj nazwisko">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Podaj telefon</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Podaj telefon">
                </div>

                <div class="mb-3">
                    <strong>Podaj id użytkownika</strong><br>

                    <?php
                    $zapytanie = $conn->query("SELECT * FROM users");
                    while ($row = $zapytanie->fetch()) {
                    ?>
                        <input type="radio" id="<?= $row['user_id'] ?>" name="user_id" value="<?= $row['user_id'] ?>" checked>
                        <label for=""><?= $row['user_id'] ?></label><br>

                    <?php
                    }
                    ?>
                </div>

                <div class="mb-3">
                    <strong>Podaj id produktu</strong><br>
                    <?php
                    $zapytanie = $conn->query("SELECT * FROM pictures");
                    while ($row = $zapytanie->fetch()) {
                    ?>
                        <input type="radio" id="<?= $row['picture_id'] ?>" name="picture_id" value="<?= $row['picture_id'] ?>" checked>
                        <label for=""><?= $row['picture_id'] ?></label><br>

                    <?php
                    }
                    ?>
                </div>


                <input type="submit" name="Edytuj" class="btn btn-primary" value="Zapisz zmiany" />
                <input type="submit" name="Cofnij" class="btn btn-danger" value="Wróć" />
            </form>
        </div>
        <?php

        if (isset($_POST['Edytuj'])) {
            $orderDate =  $_REQUEST["order_date"];
            $orderStatus =  $_REQUEST["order_status"];
            $fname =  $_REQUEST["fname"];
            $lname =  $_REQUEST["lname"];
            $phone =  $_POST["phone"];
            $userID =  $_REQUEST["user_id"];
            $pictureID =  $_REQUEST["picture_id"];
            $zapytanie = $conn->prepare("UPDATE order_info SET order_date = '" . $orderDate . "', order_status = '" . $orderStatus . "', fname = '" . $fname . "', lname = '" . $lname . "', phone = '" . $phone . "',  `user_id` = '" . $userID . "',  picture_id = '" . $pictureID . "' WHERE order_id = $id ");
            $zapytanie->execute();
        ?>
            <meta http-equiv='refresh' content='0;url=zamowienia.php'>
        <?php
        }
        if (isset($_POST['Cofnij'])) {
        ?>
            <meta http-equiv='refresh' content='0;url=zamowienia.php'>
    <?php
        }
    }
    ?>


    <!-- footer -->
    <?php
    include("footer.php");
    ?>
</body>

</html>