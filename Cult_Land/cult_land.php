<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cultural Landscapes</title>
    <link rel="stylesheet" type="text/css" href="../Styles/base.css">
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
            <li><a class="navigation_after_selected" href="cult_land.php"><span>Cultural Landscapes</span></a></li>
            <li><a href="../Events/events.php">Events</a></li>
            <li><a href="../Contact/contact.php">Contact Us</a></li>
            <li><a href="../Sitemap/site_map.php">Site Map</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <h2 class="subpage_heading">Cultural Landscapes</h2>
    <div id="image_gallery">
        <ul>
            <li><a href="Stanley_Park.php"><img src="../images/stanleypark_small.gif" alt="Stanley Park page" width="400" height="250"><br>Stanley Park</a></li>
            <li><a href="Gastown.php"><img src="../images/gastown_small.gif" alt="Gastown page" width="400" height="250"><br>Gastown</a></li>
            <li><a href="Capilano_Suspension_Bridge.php"><img src="../images/CapilanoSuspensionBridge_small.gif" alt="Capilano Suspension Bridge page" width="400" height="250"><br>Capilano Suspension Bridge</a></li>
            <li><a href="Vancouver_Aquarium.php"><img src="../images/Vancouver_Aquarium_small.gif" alt="Vancouver Aquarium page" width="400" height="250"><br>Vancouver Aquarium</a></li>
        </ul>
    </div>		<div id="none2">

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
