<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Snowboarding and Skiing</title>
    <link rel="stylesheet" type="text/css" href="../Styles/base.css">
    <script type="text/javascript" src="../sections/postCommentValidation.js"></script>
</head>

<body class="body">
<div class="container">
    <div id="vanview">
        <a href="../index.php" ><img src="../images/logo.png" alt="Vancouver image1" width="90" height="90"></a>
        <a href="../index.php" ><h1>VANVIEW</h1></a>
    </div>

    <?php
        require_once("../sections/loginHeader.php");
    ?>

    <div id="header_nav">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../Nat_Land/nat_land.php">Natural Landscapes</a></li>
            <li><a href="../Cult_Land/cult_land.php">Cultural Landscapes</a></li>
            <li><a class="navigation_after_selected" href="../Events/events.php"><span>Events</span></a></li>
            <li><a href="../Contact/contact.php">Contact Us</a></li>
            <li><a href="../Sitemap/site_map.php">Site Map</a></li>
        </ul>
    </div>
</div>

<div class="container">

    <div id="left_column">
        <h3>Events</h3>
        <ul>
            <li><a href="VIWF.php">Vancouver International<br>Wine Festival</a></li>
            <li><a href="Snow_Ski.php">Snowboarding and Skiing</a></li>
            <li><a href="Cel_of_Light.php">Celebration of Light</a></li>
            <li><a href="Canada_Day.php">Canada Day</a></li>
        </ul>
        <h3>Skiing Locations</h3>
        <a id="map_link" href="https://www.google.ca/maps/search/Vancouver+skiing+location/@49.2874333,-123.1208236,12z"><img id="map_small" src="../images/snow_ski_map_small.gif" alt="Skiing locations" width="250" height="155"><span>[View Larger Map]</span></a>
    </div>

    <div id="right_column">
        <h2>Snowboarding and Skiing</h2>
        <div id="right_image">
            <img src="../images/snow_ski.gif" alt="People Snowboarding Here" width="710" height="422">
        </div>

        <div class="description">
            <p>
                Greater Vancouver is a host to beautiful mountains well equipped for people to
                engage in winter sports such as snowboarding and skiing.
                Popular spots include <a href="../Nat_Land/grouse_mountain.php"> Grouse Mountain</a> and
                <a href="../Nat_Land/whistler.php"> Whistler & Blackcomb Mountains. </a>
                Be sure to check weather forecasts and plan ahead because sometimes there is not enough
                snow to safely ski or snowboard!
            </p>
        </div>

        <?php
            //show comments and members can post a comment if they log in
            $topic = 10;
            require_once('../config.php');
            require_once('../sections/showComment.php');
            require_once('../sections/postComment.php');
        ?>


    </div>


</div>
<footer>
    <div>
        <h3><a href="../Contact/contact.php">Contact Us</a><a  href="../Sitemap/site_map.php">Site Map</a></h3>
        <h4 id="Disclaimer">Disclaimer: This site is not for business, just for sharing information. </h4>
    </div>
</footer>
</body>
</html>
<?php
ob_end_flush();
?>