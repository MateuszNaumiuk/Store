<header>
    <section style="margin-bottom: 7em;" id="nav-section">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand order-first" href="index.php"><img src="img/logoblack.png" width="180" height="60"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="ulubione.php"><i class="bi bi-heart" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i> Ulubione</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="koszyk.php"><i class="bi-cart" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i>Koszyk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produkty.php"><i class="bi-bag" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i>Produkty</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto" id="navbar-drop">
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['user'])) {
                            ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-person" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i>Konto
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-white bg-dark" href="konto.php">Dane</a></li>
                                <?php
                                if ($_SESSION['priv'] == 'admin') {
                                ?>
                                    <li><a class="dropdown-item text-white bg-dark" href="zarzadzanie.php">Zarządzaj</a></li>
                                <?php
                                }
                                ?>
                                <li>
                                    <a class="dropdown-item text-white bg-dark" href="logout.php">Wyloguj</a>

                                </li>
                            </ul>
                        </li>
                    <?php
                            } else {
                    ?>
                        <a class="nav-link" href="login.php"><i class="bi-person" style="font-size: 30px;margin-left:20px; margin-right:10px;"></i>Zaloguj</a>
                    <?php
                            }
                    ?></a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
</header>
<div class="content">