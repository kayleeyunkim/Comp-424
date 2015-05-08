<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Registration In</title>
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


    $errorempty = "";

    if ($_POST)
    {
        if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password'])
            || empty($_POST['phone_number']) || empty($_POST['birth_date']) || empty($_POST['security_question']) || empty($_POST['security_answer']))
        {
            $errorempty = "Please fill all the fields";
        }

        else if (isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['email']) || isset($_POST['password'])
            || isset($_POST['phone_number']) || isset($_POST['birth_date']) || isset($_POST['security_question']) || isset($_POST['security_answer']))
        {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone_number = $_POST['phone_number'];
            $birth_date = $_POST['birth_date'];
            $security_question = $_POST['security_question'];
            $security_answer = $_POST['security_answer'];

            $query = "INSERT INTO users (first_name, last_name, email, password, phone_number, birth_date, security_question, security_answer) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$password."', '".$phone_number."', '".$birth_date."', '".$security_question."', '".$security_answer."')";

            $result = mysql_query($query);

            if ($result)
            {
                $result_quote = "User created successfully.";
            }

            else
            {
                $result_quote = "User created failed.";
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
                <li class="active"><a href="recover_account.php">Recover Account</a></li>
            </ul>
        </div>
    </div>
</nav>

<form name="registration" id = "registration" method="post" action="register.php">
    <div class=outerbox_register>
        <span class = "result"> <?php echo "</br><div style='font-size: 20px; text-align: center; color: red'>$result_quote</div>"?></span>

        <p class="title">Registration Form</p>
        <div class="registerpart">

            <input type="text" class="type_register" id ="name" name="first_name" placeholder="First name">
            <input type="text" class="type_register" id ="name" name="last_name" placeholder="Last name">
            <input type="email" class="type_register" name="email" placeholder="E-mail address (*Required)">
            <input id="pwd" class="type_register" type="PASSWORD" name="password" value="" placeholder = "Password (*Required)">
            <input type="PASSWORD" class="type_register" id="repwd" name="repwd" placeholder="Re-type Password">

            <input type="text" class="type_register" name="phone_number" placeholder="Phone Number (e.g. 123-345-6789)">
            <input type="date" class="type_register" name="birth_date" placeholder="Birthday (e.g. yyyy-mm-dd)" style="height: 30px; padding-top: 0px;">
            <select class = "securityquestion" name="security_question">
                <option value="">Choose Security question　　　　　　▼</option>
                <option value="petname">What is your pet name?</option>
                <option value="schoolname">Which University did you attend?</option>
                <option value="gradyear">What year did / will you graduate?</option>
                <option value="maiden">What is your mother's maiden name?</option>
                <option value="nickname">What was your childhood nickname?</option>
                <option value="oldmiddle">What is the middle name of your child?</option>
                <option value="firstcar">What was the model of your first car?</option>
            </select>
            <input type="text" class ="type_register" name="security_answer" placeholder="Answer for Security Question">
            <!--
            <div id="honeypot-check" style="display:none">
                This is to check if you are human.
                <input type="text" name="honeypot" value=""/>
            </div>
            -->

        </div>
        <input type="submit" name="submit" value="Register" class="submit" style="margin: 10px;">
        <span class = "error"> <?php echo "</br><div style='font-size: 20px; text-align: center; color: red'>$errorempty</div>"?></span>

        <div class = "forgot1">
            Have an account? Sign in <a href="signin.php">HERE</a>
        </div>
    </div>
</form>
</body>
</html>
