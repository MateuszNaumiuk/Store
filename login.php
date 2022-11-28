<!DOCTYPE html>
<html lang="pl">

<head>
    <?php
    // connect to db
    require("bootstrapConnection.php");
    require("connection.php");
    ?>
    <title>Login</title>
</head>

<body>
    <?php
    // navbar
    include("navbar.php");

    if (array_key_exists('sign_in', $_POST)) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $stmt = $conn->query("SELECT * FROM users WHERE login = '$login' or email = '$login'");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();

        // wypisanie
        if ($result) {
            foreach ($result as $row) {
                if ($row->login === $login || $row->email === $login) {
                    if (password_verify($pass, $row->pass)) {
                        $_SESSION['user']= $row->login;
                        $_SESSION['user_id']= $row->user_id; 
                        $_SESSION['priv'] = $row->privileges;

                        if($login == "admin")
                        {
                        header("Refresh:3; url=index.php");
    ?>
                        <div class="alert alert-dark text-center" role="alert">
                            Pomyślnie zalogowano! Witaj adminie.
                        </div>
    <?php
                        } else
                        { 
                            header("Refresh:3; url=index.php");
        ?>
                            <div class="alert alert-dark text-center" role="alert">
                                Pomyślnie zalogowano! Za chwilę zostaniesz przekierowany.
                            </div>
        <?php
                }
                    } else {
                        echo "<h3 class='text-center'>Wrong username or password!</h3>";
                        header("refresh: 5");
                    }
                } else {
                    echo "<h3 class='text-center'>Wrong username or password!</h3>";
                    header("refresh: 5");
                }
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
                            <label class="form-label" for="login">Login or email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="pass" class="form-control" />
                            <label class="form-label" for="pass">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="sign_in" class="btn btn-outline-success btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="register.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    // footer
    include("footer.php");
    ?>
</body>

</html>
