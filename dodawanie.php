<!DOCTYPE html>
<html lang=pl>

<head>
    <?php
    require("bootstrapConnection.php");
    require("connection.php");
    ?>
</head>

<body>
    <?php
    require("navbar.php");
    ?>

    <?php
    if (isset($_POST['addClient'])) {
    ?>
        <div class="container">
            <form method="POST" action="">
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
                <input type="submit" name="Dodaj" class="btn btn-primary" value="Dodaj" />
                <input type="submit" name="Cofnij" class="btn btn-danger" value="Wróć" />
            </form>
        </div>
    <?php
    }
    if (isset($_POST['Dodaj'])) {
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
        $zapytanie = $conn->prepare("INSERT INTO users (fname, lname, phoneNumber, birthDate, country, town, street, house_nr, zipcode, privileges) VALUES ('$fname', '$lname', '$phoneNumber', '$birthDate', '$country', '$town', '$street', '$house_nr', '$zipcode', '$privileges')");
        $zapytanie->execute();
    ?>

        <meta http-equiv='refresh' content='0;url=zarzadzanie.php'>
    <?php
    } else
    if (isset($_POST['Cofnij'])) {
    ?>
        <meta http-equiv='refresh' content='0;url=zarzadzanie.php'>
        <?php
    }
    if (isset($_POST['addProduct'])) {
        ?>
            <div class="container">
                <form method="POST">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Podaj nazwę produktu</label>
                        <input type="text" class="form-control" id="pic_name" name="pic_name">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Podaj Cene</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Podaj Opis</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Podaj wysokość</label>
                        <input type="text" class="form-control" id="height" name="height">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Podaj szerokość</label>
                        <input type="text" class="form-control" id="width" name="width">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Podaj ścieżkę do obrazka</label>
                        <input type="text" class="form-control" id="image_path" name="image_path">
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

                    <input type="submit" name="DodajProdukt" class="btn btn-primary" value="DodajProdukt" />
                    <input type="submit" name="Cofnij" class="btn btn-danger" value="Wróć" />
                </form>
            </div>
            <?php
            }

            if (isset($_POST['DodajProdukt'])) {
                $picname =  $_REQUEST["pic_name"];
                $price =  $_REQUEST["price"];
                $description =  $_REQUEST["description"];
                $height =  $_REQUEST["height"];
                $width =  $_REQUEST["width"];
                $imagePath =  $_REQUEST["image_path"];
                $privileges =  $_POST["privileges"];
                $categoryName =  $_REQUEST["category"];
                $zapytanie = $conn->prepare("INSERT INTO pictures (pic_name, price, `description`, height, width, image_path, privileges, category) VALUES ('$picname', '$price', '$description', '$height', '$width', '$imagePath', '$privileges', '$categoryName')");
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
</body>

</html>