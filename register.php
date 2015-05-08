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
                <a class="navbar-brand" href="index.php">424</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php">Home</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="active"><a href="register.php">Register</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class=""><a href="recover_account.php">Recover Account</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form name="registration" id = "registration" method="post" action="register.php" onsubmit="checkpassword(document.getElementById('pwdid').value, document.getElementById('repwdid').value)">
        <div class=outerbox_register>

            <p id = "matchpwd" style="color:red; text-align: center; font-weight: bold; font-size: 30px; margin-top: 25px; display: none;">Please match the password and re-type password </p>

            <p class="title">Registration Form</p>
            <div class="registerpart">

                <input type="text" class="type_register" id ="name" name="firstname" placeholder="First name">
                <input type="text" class="type_register" id ="name" name="lastname" placeholder="Last name">
                <input type="email" class="type_register" name="username" placeholder="E-mail address (*Required)">
                <input id="pwd" class="type_register" type="PASSWORD" name="pwd" value="" placeholder = "Password (*Required)">
                <input type="PASSWORD" class="type_register" id="repwd" name="repwd" placeholder="Re-type Password">

                <input type="text" class="type_register" name="phonenumber" placeholder="Phone Number (e.g. 123-345-6789)">
                <input type="date" class="type_register" name="birthday" placeholder="Birthday (mm-dd-yyyy)" style="height: 30px;">
                <select class = "securityquestion" name="securityquestion">
                    <option value="">Choose Security question　　　　　　▼</option>
                    <option value="petname">What is your pet name?</option>
                    <option value="schoolname">Which University did you attend?</option>
                    <option value="gradyear">What year did / will you graduate?</option>
                    <option value="maiden">What is your mother's maiden name?</option>
                    <option value="nickname">What was your childhood nickname?</option>
                    <option value="oldmiddle">What is the middle name of your child?</option>
                    <option value="firstcar">What was the model of your first car?</option>
                </select>
                <input type="text" class ="type_register" name="securityanswer" placeholder="Answer for Security Question">

                <div id="honeypot-check" style="display:none">
                    This is to check if you are human.
                    <input type="text" name="honeypot" value=""/>
                </div>


            </div>
            <input type="submit" value="Register" class="submit" style="margin: 10px;">

            <div class = "forgot1">
                Have an account? Sign in <a href="signin.php">HERE</a>
            </div>
        </div>
    </form>
</body>
</html>

