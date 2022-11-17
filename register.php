<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // connect to db
    require("bootstrapConnection.php");
    require("connection.php");
    ?>
</head>

<body>
    <?php
    // navbar
    include("navbar.php");

    if (isset($_POST['register_in'])) {
        $login = $_POST['login'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $hashPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->query("SELECT * FROM users WHERE login = '$login'");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();

        if ($result) {
            echo "<h3 style='text-align: center;'>Account with this credentials already exists</h3>";
            header("refresh: 5");
        } else {
            $sql = "INSERT INTO users (`login`, `pass`,`email`) VALUES (:login_,  :password_, :email_)";
            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ':login_' => $login,
                ':password_' => $hashPassword,
                ':email_' => $email

            ));

            echo "<h3 style='text-align: center;'>Account created successfully</h3>";
            header("refresh: 5;login.php");
        }
    }
    ?>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <form method="POST" action="register.php">
                        <!-- Login input -->
                        <div class="form-outline mb-4">
                            <input type="login" name="login" class="form-control" />
                            <label class="form-label" for="login">Login</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="Email" name="email" class="form-control" />
                            <label class="form-label" for="Email">Email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="pass" class="form-control" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="register_in" class="btn btn-outline-success btn-block mb-4">Create account</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Already a member? <a href="login.php">Login</a></p>
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