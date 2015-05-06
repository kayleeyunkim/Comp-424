<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/424.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function validation() {

        }
    </script>

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

    <form name="signinform" id ="signinform" method="post" action="signin.php" onsubmit="validation()">
        <div class="outside" id="outside">
            <p class = "title" id = "title">Sign In</p>
            <div class="loginpart">
                <input type="email" id="email" class="type_signin" name="email" placeholder="Enter your e-mail address">
                <input type="PASSWORD" id="pwdid" class="type_signin" name="password" placeholder="Enter your password">
                <div class="rememberdiv">
                    <input type="checkbox" name="remember" value="remember" class="remember"><p class = "remember1">　Remember me</p>
                </div>
            </div>

            <input type="submit" value="Sign In" class="submit">

            <div class = "forgot">
                Forgot user e-mail? Click <a href="forgot_username.php">HERE</a> <br/>
                Forgot password? Click <a href="forgot_password.php">HERE</a><BR/>
                New user? Register <a href="register.php">HERE</a>
            </div>
        </div>
    </form>

</body>
</html>

