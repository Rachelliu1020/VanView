<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site-Map</title>
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
            <li><a href="../Events/events.php">Events</a></li>
            <li><a href="../Contact/contact.php">Contact Us</a></li>
            <li><a class="navigation_after_selected" href="../Sitemap/site_map.php"><span>Site Map</span></a></li>
        </ul>
    </div>
    <div class="site_map" width="250">
        <div id="map_natural">
            <ul>
                <li><a href="../Nat_Land/nat_land.php"><h3>Natural Landscapes</h3></a></li>
                <li><a href="../Nat_Land/whistler.php">Whistler &amp; Blackcomb</a></li>
                <li><a href="../Nat_Land/grouse_mountain.php">Grouse Mountain</a></li>
                <li><a href="../Nat_Land/english_bay.php">English Bay</a></li>
                <li><a href="../Nat_Land/kits_beach.php">Kitsilano Beach</a></li>
            </ul>
        </div>
        <div id="map_cultural">
            <ul>
                <li><a href="../Cult_Land/cult_land.php"><h3>Cultural Landscapes</h3></a></li>
                <li><a href="../Cult_Land/Capilano_Suspension_Bridge.php">Capilano Suspension Bridge</a></li>
                <li><a href="../Cult_Land/Gastown.php">Gastown</a></li>
                <li><a href="../Cult_Land/Stanley_Park.php">Stanley Park</a></li>
                <li><a href="../Cult_Land/Vancouver_Aquarium.php">Vancouver Aquarium</a></li>
            </ul>
        </div>
        <div id="map_events">
            <ul>
                <li><a href="../Events/events.php"><h3>Events</h3></a></li>
                <li><a href="../Events/Canada_Day.php">Canada Day</a></li>
                <li><a href="../Events/Cel_of_Light.php">Celebration of Light</a></li>
                <li><a href="../Events/Snow_Ski.php">Snowboarding and Skiing</a></li>
                <li><a href="../Events/VIWF.php">Vancouver Int. Wine Festival</a></li>
            </ul>
        </div>

        <div id="map_contact">
            <ul>
                <li><a href="../Contact/contact.php"><h3>Contact Us</h3></a></li>
            </ul>
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