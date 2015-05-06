<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Forgot Username</title>
    <link rel="stylesheet" href="assets/424.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>

    <?php
    /**
     * Created by PhpStorm.
     * User: Kaylee's Desktop
     * Date: 2015-05-05
     * Time: 오후 8:26
     */
    ?>

</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">424</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Sign In</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Account Settings</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form name="forgot_username" id = "forgot_username" method="post" action="forgot_username.php">
        <div class="outerbox_forgot_username">
            <p class="title">Find Password</p>
            <div class = "method_div">
                <input type="text" class="type_signin" id ="email" name="firstname" placeholder="Enter your e-mail address">

            </div>

            <input type="submit" value="Send temporary password" class="submit" style="margin: 10px;">

            <div class = "forgot1">
                Want to Sign In? Click <a href="signin.php">HERE</a><BR/>
                Forgot Username? Click <a href="forgot_username.php">HERE</a><BR/>
                New user? Register <a href="register.php">HERE</a>
            </div>
        </div>
    </form>

</body>
</html>

