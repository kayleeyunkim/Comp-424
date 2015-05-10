<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/424.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/jquery.min.js"></script>
    <script type="text/javascript" src="assets/password_strength/strength.js"></script>
    <script type="text/javascript" src="assets/password_strength/strength.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function ($) {
            $('#pwd').strength();
        });

        $('#pwd').strength({
            strengthClass: 'strength',
            strengthMeterClass: 'strength_meter',
            strengthButtonClass: 'button_strength'
        });
    </script>


    <?php
    if ($_POST) {
        $valid = true;
        $error_quote = "";
        $return_sign_in = "";

        if (!isset($_POST['password']) || (empty($_POST['password']))) {
            $valid = false;
            $error_quote = "Please fill all the fields.";
        }

        if (!isset($_POST['repwd']) || (empty($_POST['repwd']))) {
            $valid = false;
            $error_quote = "Please fill all the fields.";
        }

        if (!isset($_POST['email']) || (empty($_POST['email']))) {
            $valid = false;
            $error_quote = "Please fill all the fields.";
        }

        if ($_POST['password'] != $_POST['repwd'])
        {
            $error_quote = "Passwords are not matched.";
            $valid = false;
        }


        if ($valid) {
            $database = 'captain_vahab';
            $user = 'vahab';
            $password = '5bPKpsmPvfEujKVb';
            $host = 'localhost';

            $connection = mysql_connect($host, $user, $password);
            $db = mysql_select_db('captain_vahab', $connection);

            if (!$connection)
                die('Connection Failed' . mysql_error());

            if (!$db)
                die('Database connection Failed' . mysql_error());

            $newpassword = $_POST['password'];
            $email = $_POST['email'];


            $query = "UPDATE users SET password = \"$newpassword\" WHERE email = \"$email\"";

            $result = mysql_query($query);

            if ($result)
            {
                $error_quote = "New Password sets successfully";

            }

            $return_sign_in = "<h1 style='text-align: center; margin-top: 70px;'><a href='signin.php'>Sign In Here</a></h1>";
        }

        else {
            $error_quote = "Please fill all the fields.";
        }
    }
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



<form name="reset_password" id = "reset_password" method="post" action="setnewpassword.php">
    <span class="result"> <?php echo "</br><div style='font-size: 20px; text-align: center; color: red'>$return_sign_in</div>" ?></span>
    <div class="outerbox_forgot_username" id = "outerbox_forgot_username">
        <p class="title">Set New Password</p>
        <input class ="type_register" type = "email" name = "email" value ="" placeholder="Enter E-mail address">
        <input id="pwd" class="type_register" type="PASSWORD" name="password" value="" placeholder = "Type New Password">
        <input type="PASSWORD" class="type_register" id="repwd" name="repwd" placeholder="Re-type Password">
        <input type="submit" name ="checkanswer" value="Set Password" class="submit" style="margin: 10px;">
    </div>
</form>

</body>
</html>