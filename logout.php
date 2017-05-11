<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log Out</title>
    <link href="Styles/login.css" rel="stylesheet" type="text/css" />

<body class="body">
<div class="container">

<?php

if(isset($_SESSION['authority']) && $_SESSION['authority']===1){
    $username="";
    if(isset($_SESSION['username'])&& !empty($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    echo "<h2>".$username." is now logged out. Thank you.</h2>";
    echo "<a href='login.php'>Log in</a> again.";

    $_SESSION = array();
    //kill any session and cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}else{
    echo "<p><a href='register.php'>register</a> or <a href='login.php'>log in</a> before logging out.</p>";
}

ob_end_flush();
?>

</div>

</body>
</html>
