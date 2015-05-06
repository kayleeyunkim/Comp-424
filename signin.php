<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sign In</title>
    <link rel="stylesheet" href="./assets/424.css" type="text/css" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap-theme.min.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">424</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="" onclick=""><a href="#">Register</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class=""><a href="#">Recover Account</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form name="signinform" id ="signinform" method="post" action="signin.php" onsubmit="validation()">
        <div class="outside" id="outside">

            <div class="row">
                <div class="col-lg-12">
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
                <input type="submit" value="Sign In" class="submit" class="text-left">
                <div class = "forgot">
                    <!-- Forgot user e-mail? Click <a href="forgot_username.php">HERE</a> <br/> -->
                    Forgot password? Click <a href="forgot_password.php">HERE</a><BR/>
                    New user? Register <a href="register.php">HERE</a>
                </div>
            </div>
        </div>
    </form>


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
</body>

</html>
