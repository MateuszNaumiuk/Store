<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php
    // connect to db
    require("../connection.php");
    ?>

</head>

<body>
    <?php
    if (array_key_exists('sign_in', $_POST)) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $stmt = $conn->query("SELECT * FROM users WHERE login = '$login'");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();

        // wypisanie
        if ($result) {
            foreach ($result as $row) {
                if ($row->login === $login) {
                    if (password_verify($pass, $row->pass)) {
                        session_id($row->user_id);
                        session_start();
                        setcookie("login", $row->user_id, time() + 186400);
    ?>
                        <form method="POST">
                            <a>Pomyslnie zalogowano</a>
                            <button id="stop_session" class="btn btn-danger" name="stop_session">Wyloguj</button>
                            <?= header("location:index.php");?>
                        </form>
    <?php
                    } else {
                        echo "<h3 class='text-center'>Wrong username or password!</h3>";
                        header("refresh: 5");
                    }
                } else {
                    echo "<h3 class='text-center'>Wrong username or password!</h3>";
                    header("refresh: 5");
                }
            }

            if (isset($_POST['stop_session'])) {
                setcookie("login", $row->user_id, time() - 186400);
                session_abort($row->user_id);
            }
        } else {
            echo "<h3 class='text-center'>Wrong username or password!</h3>";
            header("refresh: 5");
        }
    }

    ?>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <form method="POST" action="login.php" id="log_form">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="login" name="login" class="form-control" />
                            <label class="form-label" for="login">Login</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="pass" class="form-control" />
                            <label class="form-label" for="pass">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="sign_in" class="btn btn-primary btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="register.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
