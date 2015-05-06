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
                window.location.href = "method_security.php";
            }

            if (document.getElementById('method_email').checked) {
                window.location.href = "method_email.php";
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
            <p class="title">Find Username</p>
            <div class = "method_div">
                <input type="radio" name="find_method" id = "method_security_question"value="security_question" class="method_button"><p class = "method">　Find by Security Question</p><br/><br/>
                <input type="radio" name="find_method" id = "method_email" value="email" class="method_button"><p class = "method">　Find by E-mail address</p> <br/><br/>
            </div>

            <input type="submit" value="Find Username" class="submit" style="margin: 10px;" onclick="redirect()">

            <div class = "forgot1">
                Forgot password? Click <a href="forgot_password.php">HERE</a><BR/>
                New user? Register <a href="register.php">HERE</a><br/>
                Want to Sign In? Click <a href="signin.php">HERE</a>
            </div>
        </div>


    </form>
</body>
</html>

