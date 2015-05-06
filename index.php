<?php
function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
    } else {
<<<<<<< Updated upstream
      $pageURL .= $_SERVER["SERVER_NAME"];
=======
        $pageURL .= $_SERVER["SERVER_NAME"];
>>>>>>> Stashed changes
    }
    return $pageURL;
}
$baseUrl = curPageURL();
header("Location: $baseUrl/signin.php");
die();