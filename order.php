<!DOCTYPE html>
<html lang= "pl-PL">

<head>
    <?php
    require("bootstrapConnection.php");
    require("connection.php");
    ?>
    <title>Zamówienie</title>


</head>

<body>
<?php
require("navbar.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div>
                        <label for="basic-url">Imię</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="fname" name="fname">
                        </div>
                    </div>
                    <div>
                        <label for="basic-url">Nazwisko</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="lname" name="lname">
                        </div>
                    </div>
                    <div>
                        <label for="basic-url">Telefon</label>
                        <div class="input-group mb-3">
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Zapisz dane do następnych zamówień
                        </label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-success w-50 mt-5" type="submit" name="submit">Zamawiam i płacę</button>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $usr_id = $_SESSION['user_id'];
                $date = date("Y-m-d");
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $phone = $_POST['phone'];

            ?>
                <div class="alert alert-dark text-center mt-3" role="alert">
                    Produkt zostal kupiony!
                </div>
                <?php

                foreach ($_SESSION["cart"] as $keys => $value) {
                    $p_id = $value["product_id"];
                    $sql = ("INSERT INTO order_info VALUES ('null', '$usr_id', '$p_id','$date','done','$fname','$lname','$phone');");
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    $p_path = $value["image_path"];
                    $p_name = $value["image_name"];
                ?>
                    <div class="alert alert-dark text-center" role="alert">
                        <a href="grafiki/<?= $p_id . ".jpg" ?>" download="<?= $p_id . ".jpg"?>">
                            <button type="button" class="btn btn-outline-success">Pobierz <?= $p_name; ?> </button>
                        </a>
                    </div>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>
