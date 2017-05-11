<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vancouver Aquarium</title>
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
        <h3>Canada Day Locations</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/Days+Inn+Vancouver+Downtown/@49.2845126,-123.1155258,14z/data=!4m5!1m2!2m1!1scanada+day!3m1!1s0x0000000000000000:0x74df97559668a163"><img id="map_small" src="../images/canada_day_map_small.gif" alt="Canada Day map" width="250" height="136"><span>[View Larger Map]</span></a>
    </div>

    <div id="right_column">
        <h2>Canada Day</h2>
        <div id="right_image">
            <img src="../images/canada_day.gif" alt="Vancouver Aquarium image" width="770" height="578">
        </div>

        <div class="description">
            <p>
                Canada Day is the Independence day of Canada. It is held on July 1st to commemorate the founding of Canada
                by the uniting of the three colonies into a single country on July 1st, 1867.
                Come celebrate Canada day on July 1st. One Popular spot that the celebration is held is at
                Canada Place. More information about this year's celebration will come in due time!
            </p>
        </div>

        <?php
        //show comments and members can post a comment if they log in
        $topic = 12;
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