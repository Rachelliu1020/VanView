<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Natural Landscapes</title>
    <link rel="stylesheet" type="text/css" href="../Styles/base.css" >
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
            <li><a class="navigation_after_selected" href="nat_land.php"><span>Natural Landscapes</span></a></li>
            <li><a href="../Cult_Land/cult_land.php">Cultural Landscapes</a></li>
            <li><a href="../Events/events.php">Events</a></li>
            <li><a href="../Contact/contact.php">Contact Us</a></li>
            <li><a href="../Sitemap/site_map.php">Site Map</a></li>
        </ul>
    </div>
</div>


<div class="container">
    <h2 class="subpage_heading">Natural Landscapes</h2>
    <div id="image_gallery">
        <ul>
            <li><a href="whistler.php"><img src="../images/Whistler_Blackcomb.jpg" alt="Whistler & Blackcomb page" width="400" height="230"><br>Whistler & Blackcomb</a></li>
            <li><a href="grouse_mountain.php"><img src="../images/grouse_mountain.jpg" alt="Grouse Mountain page" width="400" height="230"><br>Grouse Mountain</a></li>
            <li><a href="english_bay.php"><img src="../images/english_bay.jpg" alt="English Bay page" width="400" height="230"><br>English Bay</a></li>
            <li><a href="kits_beach.php"><img src="../images/kitsilano_beach.jpg" alt="Kitsilano Beach page" width="400" height="230"><br>Kitsilano Beach</a></li>
        </ul>
    </div>
    <div id="none1">

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