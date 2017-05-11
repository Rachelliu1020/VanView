<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events</title>
    <link rel="stylesheet" type="text/css" href="../Styles/base.css" >
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
    <h2 class="subpage_heading">Events</h2>
    <div id="image_gallery">
        <ul>
            <li><a href="VIWF.php"><img src="../images/viwf_small.gif" alt="Vancouver International Wine Festival page" width="400" height="228"><br>Vancouver International<br>Wine Festival</a></li>
            <li><a href="Snow_Ski.php"><img src="../images/snow_ski_small.gif" alt="Snowboarding and Skiing Page" width="400" height="256"><br>Snowboarding and Skiing</a></li>
            <li><a href="Cel_of_Light.php"><img src="../images/cel_of_light_small.gif" alt="Celebration of Light" width="400" height="250"><br>Celebration of Light</a></li>
            <li><a href="Canada_Day.php"><img src="../images/canada_day_small.gif" alt="Canada Day page" width="400" height="250"><br>Canada Day</a></li>
        </ul>
    </div>
    <div id="none3">

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