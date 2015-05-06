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
                <li class="active"><a href="signin.php">Log In</a></li>
            </ul>

            <ul class="nav navbar-nav">
                <li class="active"><a href="register.php">Register</a></li>
            </ul>

            <ul class="nav navbar-nav">
                <li class="active"><a href="recover_account.php">Recover Account</a></li>
            </ul>
        </div>
    </div>
</nav>
<form name="method_email" id = "method_email" method="post">
    <div class="outerbox_forgot_username">

        <p class="title">Find Password</p>


        <div class="choose_question" id = "choose_question">
            <input type="email" class="type_register" name="username" placeholder="E-mail address (*Required)">

            <!-- show security question that user choose when register
            <p id="security_question" style="font-size: 13px;">Security question:</p>
            <p id="security_question">show security question that user chose when register</p>
            <input type="text" class ="type_forgot_username2" name="securityanswer" placeholder="Answer for Security Question"> -->
        </div>



        <input type="submit" value="Send temporary password" class="submit" style="margin: 10px;">

        <div class = "forgot2">
            Find password by Security Question, Click <a href="method_security.php">HERE</a><br/>
            Have an account? Sign in <a href="signin.php">HERE</a><br/>
            New user? Register <a href="register.php">HERE</a>
        </div>
    </div>


</form>
</body>
</html>

