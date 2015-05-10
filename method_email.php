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
        if ($_POST) {
            $valid = true;
            $error_quote = "";


            if (!isset($_POST['email']) || (empty($_POST['email']))) {
                $valid = false;
                $error_quote = "Please fill all the fields.";
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

                $email = $_POST['email'];

                $query = "SELECT * FROM users WHERE email = \"$email\"";

                $result = mysql_query($query);

                if ($result) {
                    $error_quote = "E-mail successfully sent.";


                    while ($row = mysql_fetch_assoc($result1)) {
                        $from = '<comp424@vahab.com>';
                        $to = $email;
                        $subject = 'Hi!';
                        $body = "Hi,\n\nHow are you?";

                        $headers = array(
                            'From' => $from,
                            'To' => $to,
                            'Subject' => $subject
                        );

                        $smtp = Mail::factory('smtp', array(
                            'host' => 'ssl://smtp.gmail.com',
                            'port' => '465',
                            'auth' => true,
                            'username' => 'johndoe@gmail.com',
                            'password' => 'passwordxxx'
                        ));

                        $mail = $smtp->send($to, $headers, $body);

                        if (PEAR::isError($mail)) {
                            echo('<p>' . $mail->getMessage() . '</p>');
                        } else {
                            echo('<p>Message successfully sent!</p>');
                        }
                    }
                }
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
<form name="method_email" id = "method_email" method="post">
    <div class="outerbox_forgot_username">
        <span class="result"> <?php echo "</br><div style='font-size: 20px; text-align: center; color: red'>$error_quote</div>" ?></span>
        <p class="title">Find Password</p>
        <input type="text" value="" class="type_register" name="email" placeholder="Enter your E-mail address">
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

