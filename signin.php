<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sign In</title>
    <link rel="stylesheet" href="./assets/424.css" type="text/css" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap-theme.min.css">

    <?php session_start();

        if ($_POST)
        {
            $valid = true;

            if (!isset($_POST['email']) || (empty($_POST['email'])))
            {
                $valid = false;
            }

            if (!isset($_POST['password']) || (empty($_POST['password'])))
            {
                $valid = false;
            }

            if ($valid)
            {
                $database = 'captain_vahab';
                $user = 'vahab';
                $password = '5bPKpsmPvfEujKVb';
                $host = 'localhost';

                $connection = mysql_connect($host, $user, $password);
                $db = mysql_select_db('captain_vahab', $connection);

                if (!$connection)
                    die('Connection Failed'.mysql_error());

                if (!$db)
                    die('Database connection Failed'.mysql_error());

                $email = $_POST['email'];
                $password = $_POST['password'];

                $query = "SELECT * FROM users WHERE email = \"$email\" AND password = \"$password\"";

                $result = mysql_query($query);

                $row = mysql_fetch_assoc($result);

                if($row)
                {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['logged_in'] = true;
                    $_SESSION['email'] = $email;

                    header("Location: signin.php");
                }

                else
                {
                    $error_quote = "Wrong User E-mail / Password.";
                    //echo "<div style='color:red; text-align:center; font-weight: bold; font-size: 30px; margin-top: 25px;'>
                     //   Wrong Credentials. Please try again or register! </div>";
                }
            }

            else
            {
                $error_quote = "Please fill all the fields.";
                //echo "<div style='color: red; text-align: center; font-weight: bold; font-size: 30px; margin-top: 25px;'>Please check your input.</div>";
            }
        }
    ?>

</head>
<body>

</body>


    <?php
        if (!isset($_SESSION['logged_in']))
        { ?>

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">424</a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="signin.php">Home</a></li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li class=""><a href="register.php">Register</a></li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li class=""><a href="recover_account.php">Recover Account</a></li>
                        </ul>

                    </div>
                </div>
            </nav>

            <form name="signinform" id ="signinform" method="post" action="signin.php" onsubmit="validation()">
                <div class="outside" id="outside">

                    <div class="row">
                        <div class="col-lg-12">
                            <span class = "result"> <?php echo "</br><div style='font-size: 20px; text-align: center; color: red'>$error_quote</div>"?></span>
                            <p class = "title" id = "title">Sign In</p>
                        </div>
                        <div class="loginpart">
                            <div class="col-lg-12">
                            <input type="email" id="email" class="type_signin" name="email" placeholder="Enter your e-mail address">
                            </div>
                            <div class="col-lg-12">
                            <input type="PASSWORD" id="pwdid" class="type_signin" name="password" placeholder="Enter your password">
                            </div>
                            <div class="col-sm-6">
                            <div class="rememberdiv">
                                <input type="checkbox" name="remember" value="remember" class="remember"><p class = "remember1">　Remember me</p>
                            </div>
                            </div>
                        </div>
                        <input type="submit" value="Sign In" class="submit">
                        <div class = "forgot">
                            Forgot user e-mail? Click <a href="forgot_username.php">HERE</a> <br/>
                            Forgot password? Click <a href="forgot_password.php">HERE</a><br/>
                            New user? Register <a href="register.php">HERE</a>
                        </div>
                    </div>
                </div>
            </form>
    <?php }
    else {
        ?>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">424</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="logout.php">Log Out</a></li>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li class=""><a href="recover_account.php">Recover Account</a></li>
                    </ul>
                </div>
            </div>
        </nav>

            <?php
                $user = $_SESSION['email'];

                $query1 = "SELECT first_name, last_name, email, birth_date FROM users WHERE email = \"$user\"";
                $result1 = mysql_query($query1);

                if (!$result1) {
                    echo "Could not successfully run query ($query1) from DB: " . mysql_error();
                    exit;
                }

                if (mysql_num_rows($result1) == 0) {
                    echo "No rows found, nothing to print so am exiting";
                    exit;
                }

            while ($row = mysql_fetch_assoc($result1)) {
            ?>
                <h1 style="text-align: center; margin-top: 100px;"> Welcome! <?php echo $row["first_name"]?> <?php echo $row["last_name"]?>.<br/>
                    You logged in [login_count] times. <br/>
                    Log in time is

                <?php
                    date_default_timezone_set('America/Los_Angeles');
                    echo date("F jS Y\, l h:i:s A") . "<br>";
                ?>

                 <?php
                }
                mysql_free_result($result1);
            ?>

            <br/><a href="logout.php">Log Out</a></h1>
            <?php }?>




<script type="text/javascript">
    function validation() {
    }

    function getCurrentBaseUrl() {
        var baseArr = window.location.href.split('/'),
            baseUrl = baseArr[0] + '/' + baseArr[2];
        return baseUrl;
    }
</script>
<script type="text/javascript" src="./assets/jquery.min.js"></script>
<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>



</html>
