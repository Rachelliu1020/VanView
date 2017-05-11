<?php
ob_start();
session_start();

if(isset($_REQUEST['firstname']) && !empty($_REQUEST['firstname'])
    && isset($_REQUEST['lastname']) && !empty($_REQUEST['lastname'])
    && isset($_REQUEST['email']) && !empty($_REQUEST['email'])
    && isset($_REQUEST['username']) && !empty($_REQUEST['username'])
    && isset($_REQUEST['password']) && !empty($_REQUEST['password'])) {

    $fname = trim($_REQUEST['firstname']);
    $lname = trim($_REQUEST['lastname']);
    $email = trim($_REQUEST['email']);
    $username = trim($_REQUEST['username']);
    $password = md5($_REQUEST['password']);

    require_once('config.php');
    $query = "select * from users where email = '$email'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    if (mysqli_num_rows($result) === 0) {

        //insert fname, lname, email and password into users table
        $query = "insert into users(firstname, lastname, email, username, password) VALUES ('$fname', '$lname', '$email', '$username', '$password')";
        mysqli_query($db, $query) or die(mysqli_error($db));

        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $fname;
        $_SESSION['lastname'] = $lname;
        $_SESSION['username'] = $username;
        $_SESSION['authority'] = 1;

        setcookie('email', $email, time()+60*5);
        header("Location: ./index.php");
    }else{
        echo "Account already exists for ". $email.". Please try again to <a href='register.php'>register</a> or <a href='login.php'>log in.</a>";
    }
}else if(!isset($_REQUEST['register'])){
    header("Location: ./register.php");
}else{
    echo "Register error. Please try again to <a href='register.php'>register</a> or <a href='login.php'>log in</a>.";
}
ob_end_flush();