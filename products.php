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
            <h3 class="my-3 text-center"><b>Produkty</b></h3>
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
        <!-- footer -->
        <?php
        include("footer.php");
        ?>
    </main>
</body>

</html>