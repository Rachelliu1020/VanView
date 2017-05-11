<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank you</title>
    <link rel="stylesheet" type="text/css" href="../Styles/base.css">
    <script type="text/javascript" src="formValidation.js"></script>
    <style>
        #firstlink {
            color: #2D3954;
            font-size: 130%;
            font-weight:bold;
            display:block;
            width:150px;
            margin-left:auto;
            margin-right:auto;
            margin-top:50px;
            margin-bottom:0px;
            text-decoration:none;
        }
        #nextlink{
            color: #2D3954;
            font-size: 130%;
            font-weight:bold;
            display:block;
            /*margin-left:860px;*/
            width:150px;
            margin-left:auto;
            margin-right:auto;
            margin-top:0px;
            margin-bottom:0px;
            text-decoration:none;

        }
        a:hover {
            color: #99CC00;
        }
    </style>
</head>

<body class="body">
<div class="container">
    <div id="vanview">
        <a href="../index.php" ><img src="../images/logo.png" alt="Vancouver image1" width="90" height="90"></a>
        <a href="../index.php" ><h1>VANVIEW</h1></a>
    </div>

    <?php
        include("../sections/loginHeader.php");
    ?>

    <div id="header_nav">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../Nat_Land/nat_land.php">Natural Landscapes</a></li>
            <li><a href="../Cult_Land/cult_land.php">Cultural Landscapes</a></li>
            <li><a href="../Events/events.php">Events</a></li>
            <li><a class="navigation_after_selected" href="./contact.php"><span>Contact Us</span></a></li>
            <li><a href="../Sitemap/site_map.php">Site Map</a></li>
        </ul>
    </div>
</div>
</header>

<div class="container">
    <div id="left_column">
        <h3>Enjoy your Vanview</h3>
        <img src="../images/vancouver7.gif" alt="Vancouver image1" width="150" height="100">
        <img src="../images/vancouver5.gif" alt="Vancouver image2" width="150" height="100">
        <img src="../images/vancouver9.gif" alt="Vancouver image3" width="150" height="100">
        <img src="../images/vancouver3.gif" alt="Vancouver image4" width="150" height="100">
        <img src="../images/vancouver1.gif" alt="Vancouver image5" width="150" height="100">
    </div>

    <div id="right_column">
        <?php
            if(isset($_REQUEST['firstname']) && !empty($_REQUEST['firstname'])
                && isset($_REQUEST['lastname']) && !empty($_REQUEST['lastname'])
                && isset($_REQUEST['email']) && !empty($_REQUEST['email'])
                && isset($_REQUEST['subject']) && !empty($_REQUEST['subject'])
                && isset($_REQUEST['comment']) && !empty($_REQUEST['comment'])) {

                $fname = trim($_REQUEST['firstname']);
                $lname = trim($_REQUEST['lastname']);
                $email = trim($_REQUEST['email']);
                $subject = trim($_REQUEST['subject']);
                $comment = trim($_REQUEST['comment']);

                $favour_part = "";
                $useful_part = "";
                $add_part = "";

                if(isset($_REQUEST['favpart1'])){
                    $favour_part = $_REQUEST['favpart1'];
                }

                if(isset($_REQUEST['usfpart2'])){
                    $useful_part = $_REQUEST['usfpart2'];
                }

                if(isset($_REQUEST['addpart3'])){
                    $add_part = $_REQUEST['addpart3'];
                }

                //store feedback into feedbacks table
                require_once('../config.php');
                $query = "INSERT INTO feedbacks(firstname, lastname, email, subject, comment, favour_part, useful_part, add_part) VALUES('$fname','$lname','$email','$subject','$comment','$favour_part','$useful_part','$add_part')";
                mysqli_query($db, $query) or die(mysqli_error($db));

                //show thanks info
                echo "<h2>Thank you for your feedback!</h2>";

                if (isset($_SESSION['authority']) && $_SESSION['authority']===1) {
                    echo "<p>Dear, ".$_SESSION['username'].",</p>";
                    echo "<p style='width:700px; height:600px;'>Thank your for your consistent support! We will look at your feedback and response to you as soon as possible.</p>";
                }else{
                    echo "<p>Dear, guest,</p>";
                    echo "<p style='width:700px; height:600px;'> Thank you for your support. if you want to keep more contact with us, you can register as our member. <a href='../register.php'>Join us</a> now!</p>";
                }
            }else if(!isset($_REQUEST['feedback'])){
                header("Location: ./contact.php");
            }else{
                echo "Feedback submitting error. Please try again to <a href='contact.php'>Contact us</a>.";
            }
            ob_end_flush();
        ?>

    </div>
</div>
<footer>
    <div>
        <h3><a href="./contact.php">Contact Us</a><a  href="../Sitemap/site_map.php">Site Map</a></h3>
        <h4 id="Disclaimer">Disclaimer: This site is not for business, just for sharing information. </h4>
    </div>
</footer>
</body>
</html>