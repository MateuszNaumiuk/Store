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
                <div class="col-3 my-5" style="text-align:center">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Zamowienia
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a href="zamowienia.php"><button type="submit" name="zamowienia" value="zamowienia" class="btn btn-secondary my-4">Zamowienia</button></a><br>
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
                                    <a href="klienci.php"><button type="submit" name="klienci" value="klienci" class="btn btn-secondary my-4">Klienci</button></a><br>
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
                                    <a href="products.php"><button type="submit" name="products" value="products" class="btn btn-secondary my-4">Produkty</button></a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9 mx">

          

                </div>
            </div>



        </div>

    </div>
    <?php
    include("footer.php");
    ?>

</body>

</html>
