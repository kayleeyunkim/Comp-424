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

</body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">424</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
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

    <div class="welcomemsg_div" id="welcomemsg_div">
        <p class="welcomemsg" style="margin-top: 150px;">Welcome! <!--[username]-->, You logged in <!--[login_count]--> times. <br/>
            Current time is <!--[current_time]--> <br/>
            redirect privacy contract LINE HERE <br/>
        </p>

        <h1><a href="logout.php">Log Out</a></h1>


        <h1 style="text-align: center; margin-top: 50px;"> Welcome Back:
            <?php
            $user = $_SESSION['email'];
            echo "$user";


            ?>

            <br/><a href="logout.php">Log Out</a></h1>
    </div>
