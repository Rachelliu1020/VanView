<?php
ob_start();
session_start();
session_regenerate_id();

if(isset($_REQUEST['email'])&&!empty($_REQUEST['email'])
    && $_REQUEST['password'] && !empty($_REQUEST['password'])){

    $email = trim($_REQUEST['email']);
    $password = md5(trim($_REQUEST['password']));

    require_once('config.php');

    $query= "select * from users where email = '$email' and password='$password'";
    $result = mysqli_query($db,$query)or die(mysqli_error($db));

    if(mysqli_num_rows($result)===0){
        //login fail
        echo "Login error. Please try again to <a href='register.php'>register</a> or <a href='login.php'>log in</a>.";
    }else{
        //login success
        $row = mysqli_fetch_assoc($result);

        $_SESSION['authority'] = 1;
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['username'] = $row['username'];

        setcookie('email', $email, time()+60*5);

        header("Location: ./index.php");
    }



}else if(!isset($_REQUEST['login'])){
    header("Location: ./register.php");
}else{
    echo "Login error. Please try again to <a href='register.php'>register</a> or <a href='login.php'>log in</a>.";

}
ob_end_flush();