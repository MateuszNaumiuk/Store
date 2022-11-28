<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // connect to db
    require("bootstrapConnection.php");
    require("connection.php");
    ?>
    <!--recaptcha script-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <?php
    // navbar
    include("navbar.php");

        if (isset($_POST['register_in'])) {

            $login = $_POST['login'];
            $password = $_POST['pass'];
            $email = $_POST['email'];
            // Validation flag
            $all_good = true;

            // Recaptcha validation
            $secret = "6Ld_YB0jAAAAAIzbQFyCm56DAplL3lJI8mH8IP00";
            $response = $_POST['g-recaptcha-response'];
            $check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response);
            $answ = json_decode($check);

            if(!$answ->success==true)
            {
                $_SESSION['e_bot'] = "Potwierdź, że nie jesteś robotem!";
                $all_good = false;
            }
            // Password validation
            if(!preg_match('@[A-Z]@', $password) || !preg_match('@[a-z]@', $password) || !preg_match('@[0-9]@', $password) || strlen($password)<8 || strlen($password)>=25)
            {
                $_SESSION['e_password'] = "Hasło powinno zawierać jedną wielką oraz małą literę, jedną cyfrę oraz 8-25 znaków";
                $all_good = false;
            }
            if(!ctype_alnum($login))
            {
                $_SESSION['e_login'] = "Login może składać się jedynie ze znaków alfanumerycznych";
                $all_good = false;
            }

            if($all_good)
            {
                $hashPassword = password_hash($password, PASSWORD_BCRYPT);

                $stmt = $conn->query("SELECT * FROM users WHERE login = '$login'");
                $stmt->setFetchMode(PDO::FETCH_OBJ);
                $result = $stmt->fetchAll();

                if ($result) {
                    echo "<h3 style='text-align: center;'>Account with this credentials already exists</h3>";
                    header("refresh: 5");
                } else {
                    $sql = "INSERT INTO users (`login`, `pass`,`email`,`privileges`) VALUES (:login_,  :password_, :email_, 'user')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(array(
                        ':login_' => $login,
                        ':password_' => $hashPassword,
                        ':email_' => $email
                    ));

                    echo "<div class='alert alert-dark text-center' role='alert'>Konto zostało stworzone! Za chwilę cię przekierujemy.</div>";
                    header("refresh: 5;login.php");
            }
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
                        <?php
                            if(isset($_SESSION['e_login']))
                            {
                                echo '<div style="color:red">'.$_SESSION['e_login'].' </div>';
                                unset($_SESSION['e_login']);
                            }
                        ?>

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
                        <?php
                            if(isset($_SESSION['e_password']))
                            {
                                echo '<div style="color:red">'.$_SESSION['e_password'].' </div>';
                                unset($_SESSION['e_password']);
                            }
                        ?>

                        <!-- Recaptcha api -->
                        <div class="g-recaptcha my-2" data-sitekey="6Ld_YB0jAAAAAAiL3HbgukBbYGVC_7G07Qth8LAR" data-callback="captchaVerified"></div>
                        <?php
                            if(isset($_SESSION['e_bot']))
                            {
                                echo '<div style="color:red">'.$_SESSION['e_bot'].' </div>';
                                unset($_SESSION['e_bot']);
                            }
                        ?>

                        <!-- Submit button -->
                        <button type="submit" name="register_in" class="btn btn-outline-success btn-block my-2">Create account</button>

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
