<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celebration of Light</title>
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
        <h3>Celebration of Light Location</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/Sunset+Beach+Park/@49.2797464,-123.1427556,15z/data=!4m5!1m2!2m1!1sCelebration+of+Light!3m1!1s0x0000000000000000:0x6ee8acb0cf88be00"><img id="map_small" src="../images/cel_of_light_map_small.gif" alt="Celebration of Light map" width="250" height="136"><span>[View Larger Map]</span></a>
        <p><strong>Address: </strong>Sunset Beach Park, 1204 Beach Ave, Vancouver, V6E 1V3</p>
        <p><strong>Location: </strong>Downtown</p>
    </div>


    <div id="right_column">
        <h2>Celebration of Light</h2>
        <div id="right_image">
            <img src="../images/cel_of_light.gif" alt="Celebration of Light image" width="750" height="502">
        </div>

        <div class="description">
            <p>
                The Honda Celebration of Light is BC's largest public event and one of the longest running offshore fireworks
                competition in the world! It is operated by the Not-for-profit Vancouver FIreworks Festival Society. The event
                attracts up to 400,000 spectators each year and is located at <a href="../Nat_Land/english_bay.php">English Bay</a>
                near downtown Vancouver. The festival lasts for about 2 weeks.

                The festival for 2015 will mark the 25th anniversary for the festival, and more countries will participate!
                2015's festival dates are JULY 25, JULY 29, and AUGUST 1.
                Visit <a href="http://www.hondacelebrationoflight.com">hondacelebrationoflight.com</a> for more information!
            </p>
            <object id="vedio2" style="width: 700px; height: 450px;" width="700" height="450" data="http://www.youtube.com/v/YyQe-EdB-xc" type="application/x-shockwave-flash">
                <param name="data" value="http://www.youtube.com/v/YyQe-EdB-xc" />
                <param name="src" value="http://www.youtube.com/v/YyQe-EdB-xc" />
            </object>
        </div>

        <?php
            //show comments and members can post a comment if they log in
            $topic = 11;
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