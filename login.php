<?php
$errMsg = "";
$email = "";
$passw = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']) &&  $_POST['submit'] == 'Login') {

    include './auth/Login.auth.php';

    $email = $_POST['email'];
    $passw = $_POST['password'];

    $login = new Login($email, $passw);

    if ($login->isFieldEmpty()) {
        $errMsg = "Email and Password is required field";
    } else if (!$login->isPasswMatch()) {
        $errMsg = "Please provide correct email and password";
    } else {
        $login->proceedLogin();
    }
    
}

session_start();
if (isset($_SESSION['redirect_login']) && $_SESSION['redirect_login'] == 'no_access_token') {
    $errMsg = "Please login to continue";
}
unset($_SESSION['redirect_login']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/spectre.min.css">
    <link rel="stylesheet" href="./static/css/spectre-exp.min.css">
    <link rel="stylesheet" href="./static/css/spectre-icons.min.css">
    <link rel="stylesheet" href="./static/css/main.css">
    <script defer src="./static/js/alpine.min.js"></script>
    <title>Login | Cyber Tuition Saujana</title>
</head>
<body>
    <?php
    include './views/components/NavBasic.php';
    include './views/components/BasicHeader.php';

    // Render Navbar Basic
    navBasic();
    // Render Basic Header with the title "Login to Dashboard"
    basicHeader("Login to Dashboard");
    ?>
    <!-- /* Form container section */ -->
    <section class="container">
        <div class="columns">
            <div class="column col-4 col-sm-12 col-mx-auto">
                <br><br>
                <!-- /* A placeholder for displaying error login */ -->
                <?php
                if (!empty($errMsg)) {
                    ?>
                    <div x-data="{
                        displayError: true,
                        close() {
                            this.displayError = false;
                        }
                    }" x-show="displayError" x-transition.duration.500ms>
                        <div class="toast toast-error mx-2" >
                            <button class="btn btn-clear float-right" x-on:click="close()"></button>
                            <?php echo $errMsg; ?>
                        </div>
                        <br><br>
                    </div>
                    <?php
                }
                ?>
                <!-- /* Login form section */ -->
                <form class="form-horizontal my-2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
                    <div class="form-group">
                        <div class="col-3 col-sm-12">
                            <label class="form-label" for="email">Email</label>
                        </div>
                        <div class="col-9 col-sm-12">
                            <input type="email" id="email" class="form-input" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-3 col-sm-12">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="col-9 col-sm-12">
                            <input type="password" id="password" class="form-input" placeholder="Password" autocomplete="current-password" name="password">
                        </div>
                    </div>
                    <p class="text-right">
                        <button class="btn btn-primary" type="submit" name="submit" value="Login">Login</button>
                    </p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>