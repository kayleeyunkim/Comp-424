<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Forgot Username</title>
    <link rel="stylesheet" href="assets/424.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">

        function redirect() {
            if (document.getElementById('method_security_question').checked) {
                alert("1");
                window.location.href = 'method_security.php';
            }

            if (document.getElementById('method_email').checked) {
                alert("2");
                window.location.href = 'method_email.php';
            }
        }
    </script>

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
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">424</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class=""><a href="signin.php">Log In</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class=""><a href="register.php">Register</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class=""><a href="#">Recover Account</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form name="forgot_password" id = "forgot_password" method="post" action="forgot_password.php">
        <div class="outerbox_forgot_username">
            <p class="title">Find Password</p>
            <div class = "method_div">

                <div class = "method_div">
                    <input type="radio" name="find_method" id = "method_security_question"value="security_question" class="method_button"><p class = "method">　Find by Security Question</p><br/><br/>
                    <input type="radio" name="find_method" id = "method_email" value="email" class="method_button"><p class = "method">　Find by E-mail address</p> <br/><br/>
                </div>


            </div>

            <input type="submit" value="Find Password" class="submit" style="margin: 10px;" onclick="redirect()">

            <div class = "forgot1">
                Want to Sign In? Click <a href="signin.php">HERE</a><BR/>
                Forgot Username? Click <a href="forgot_username.php">HERE</a><BR/>
                New user? Register <a href="register.php">HERE</a>
            </div>
        </div>
    </form>

</body>
</html>

