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
    $id = $_GET['id'];
    $zapytanie = $conn->query("SELECT * FROM users WHERE 'user_id'= $id");
    $row = $zapytanie->fetch();
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
                <strong>Upoważnienia</strong><br>
                <input type="radio" id="admin" name="user_type" value="admin">
                <label for="html">admin</label><br>
                <input type="radio" id="user" name="user_type" value="user">
                <label for="html">user</label><br>
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
        echo $privileges;
        $zapytanie = $conn->prepare("UPDATE users SET fname = '" . $fname . "',  lname = '" . $lname . "',  birthDate = '" . $birthDate . "', phoneNumber = '" . $phoneNumber . "', country = '" . $country . "', town = '" . $town . "', street = '" . $street . "', house_nr = '" . $house_nr . "', zipcode = '" . $zipcode . "', privileges = '" . $privileges . "' WHERE user_id = $id ");
        $zapytanie->execute();
    ?>
        <meta http-equiv='refresh' content='0;url=zarzadzanie.php'>
    <?php
    }
    if (isset($_POST['Cofnij'])) {
    ?>
        <meta http-equiv='refresh' content='0;url=zarzadzanie.php'>
    <?php
    }
    ?>

    <!-- footer -->
    <?php
    include("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>