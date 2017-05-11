<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Whistler</title>
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
        <h3>A Map to Whistler &amp; Blackcomb</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/whistler+blackcomb/@50.114964,-122.948647,15z/data=!4m2!3m1!1s0x0:0x5ce9daf022b0baa?sa=X&amp;ei=Jp3hVKaAE4vSoASC9YDADQ&amp;ved=0CIcBEPwSMBA" ><img id="map_small" src="../images/whistler_map.jpg" alt="Whistler map" width="250" height="160"><span>[View Larger Map]</span></a>
        <p><strong>Address:</strong> 4545 Blackcomb Way, Whistler, BC V0N 1B4</p>
        <p><strong>Phone:</strong> (604) 967-8950</p>

    </div>


    <div id="right_column">
        <h2>Whistler &amp; Blackcomb Mountains</h2>
        <div id="right_image">
            <img src="../images/Whistler_Blackcomb.jpg" alt="Whistler & Blackcomb" width="677" height="429">
        </div>

        <div class="description">
            <p>
                Whistler and Blackcomb Mountains are your number 1 destinations for winter sports!
                <br>
                Whistler and Blackcomb are two side-by-side mountains popular for outdoor activities, including hiking, and
                bike riding in the summer. Skiing and snowboarding in the winter, and much more! The two mountains combined offer
                over 200 marked runs, 8171 acres of terrain, 16 alpine bowls and three glaciers. Remember to get the latest reports,
                weather forecasts and live conditions to plan an adventurous day!
                Visit <a href="https://www.whistlerblackcomb.com">whistlerblackcomb.com</a> for more information!
            </p>

            <embed src="http://www.youtube.com/embed/4znaMiuVJVc?enablejsapi=1&amp;playerapiid=ytplayer&amp;version=3&amp;wmode=opaque&amp;rel=0" id="ytPlayer" width="470" height="293" wmode="opaque">

        </div>

        <?php
            //show comments and members can post a comment if they log in
            $topic = 1;
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