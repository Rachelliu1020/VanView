<?php
ob_start();
session_start();
session_regenerate_id();

if(isset($_REQUEST['comment']) && !empty($_REQUEST['comment'])
    && isset($_REQUEST['topic']) && !empty($_REQUEST['topic'])
    && isset($_SESSION['authority']) && $_SESSION['authority']===1){

    $comment = trim($_REQUEST['comment']);
    $email = $_SESSION['email'];
    $topic = $_REQUEST['topic'];

    require_once('../config.php');
    //insert email, topic, comment into comments table
    $query = "insert into comments(email, topic, comment) VALUES ('$email', '$topic', '$comment')";
    mysqli_query($db, $query) or die(mysqli_error($db));
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}else if(!isset($_REQUEST['postComment'])){
    header("Location: ../register.php");
}else{
    echo "Post Comment error. Please try again.  <a href='javascript:history.back()'>Go Back</a>";
}
ob_end_flush();
