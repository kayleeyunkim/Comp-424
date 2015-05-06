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

        function methodfunction() {
            if (document.getElementById('method_security_question').checked)
            {

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


        <div class="choose_question" id = "choose_question">
        <input type="text" class="type_forgot_username" id ="name" name="firstname" placeholder="First name">
        <input type="text" class="type_forgot_username" id ="name" name="lastname" placeholder="Last name">
        <input type="text" class="type_forgot_username2" name="phonenumber" placeholder="Phone Number (e.g. 123-345-6789)">
        <!-- show security question that user choose when register -->
        <p id="security_question" style="font-size: 13px;">Security question:</p>
        <p id="security_question">show security question that user chose when register</p>
        <input type="text" class ="type_forgot_username2" name="securityanswer" placeholder="Answer for Security Question">
    </div>



    <input type="submit" value="Find Username" class="submit" style="margin: 10px;">
</div>


</form>
</body>
</html>

