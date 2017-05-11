<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>English Bay</title>
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

    <div id="left_column">
        <h3>Natural Landscapes</h3>
        <ul>
            <li><a href="whistler.php">Whistler &amp; Blackcomb</a></li>
            <li><a href="grouse_mountain.php">Grouse Mountain</a></li>
            <li><a href="english_bay.php">English Bay</a></li>
            <li><a href="kits_beach.php">Kitsilano Beach</a></li>
        </ul>
        <h3>A Map to English Bay Beach</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/English+Bay+Beach/@49.286311,-123.143487,15z/data=!4m2!3m1!1s0x0:0x2e8b93c8034168e0?sa=X&amp;ei=h6nhVJDtKsqzogSBjIFg&amp;ved=0CIgBEPwSMAs" ><img id="map_small" src="../images/english_bay_map.png" alt="English Bay map" width="250" height="160"><span>[View Larger Map]</span></a>
        <p><strong>Address:</strong> Vancouver, BC V6E 1V3</p>
        <p><strong>Phone:</strong> (604) 873-7000</p>

    </div>


    <div id="right_column">
        <h2>English Bay</h2>
        <div id="right_image">
            <img src="../images/english_bay.jpg" alt="English Bay" width="700" height="467">
        </div>

        <div class="description">
            <p>
                English Bay is a scenic and historical wonder.<br>
                Looking for some fun activities to do outside while in Vancouver's downtown area? Well
                look no further as English Bay can provide all that and more! English Bay Beach, also known as
                First Beach, is the most popular beach area that stretchesall acroos the city. The Stanley Park
                Seawall is a popular running and biking route that runs along the east side of the beach. This beach
                hosts a variety of events all year such as the Celebration of Light, a fireworks competition that is held for
                two weeks every summer, and it is the largest offshore fireworks display in the world. Another
                summer event that is held is the Vancouver Pride Parade. A popular annual winter event is the Polar
                Bear Swim. English Bay Beach also has various works of art that is awe inspiring to see, such as
                the laughing statues, consisting of 15 bronze sculptures of laughing men.
                Another famous landmark at English Bay is the Inukshuk, where you can watch the sunrise or sunset from and
                into the ocean and mountains.
            </p>
        </div>
        <?php
        //show comments and members can post a comment if they log in
        $topic = 3;
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
