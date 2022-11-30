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
                <a href="zamowienia.php"><button type="submit" name="zamowienia" value="zamowienia" class="btn btn-secondary">Zamowienia</button></a>
            </div>
            <div class="row">
                <a href="klienci.php"><button type="submit" name="Klienci" value="Klienci" class="btn btn-secondary">Klienci</button></a>
            </div>
            <div class="row">
                <a href="products.php"><button type="submit" name="products" value="products" class="btn btn-secondary">Produkty</button></a>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>

</body>

</html>