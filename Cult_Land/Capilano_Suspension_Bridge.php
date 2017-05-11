<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capilano Suspension Bridge</title>
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
            <li><a href="../Nat_Land/nat_land.php">Natural Landscapes</a></li>
            <li><a class="navigation_after_selected" href="cult_land.php"><span>Cultural Landscapes</span></a></li>
            <li><a href="../Events/events.php">Events</a></li>
            <li><a href="../Contact/contact.php">Contact Us</a></li>
            <li><a href="../Sitemap/site_map.php">Site Map</a></li>
        </ul>
    </div>
</div>

<div class="container">

    <div id="left_column">
        <h3>Cultural Landscapes</h3>
        <ul>
            <li><a href="Stanley_Park.php">Stanley Park</a></li>
            <li><a href="Capilano_Suspension_Bridge.php">Capilano Suspension Bridge</a></li>
            <li><a href="Gastown.php">Gastown</a></li>
            <li><a href="Vancouver_Aquarium.php">Vancouver Aquarium</a></li>
        </ul>
        <h3>Capilano Suspension Bridge Map</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/capilano+suspension+bridge/@49.342934,-123.114818,15z/data=!4m2!3m1!1s0x0:0xf350b3ec85130f5e?sa=X&amp;ei=6-zeVImcFdGwogTMlIHABw&amp;sqi=2&amp;ved=0CIABEPwSMBE"><img id="map_small" src="../images/Capilano-Suspension-Bridge_map_small.gif" alt="Capilano Suspension Bridge map" width="250" height="136"><span>[View Larger Map]</span></a>
        <p><strong>Address: </strong>3735 Capilano Rd, North Vancouver, BC V7R 4J1</p>
        <p><strong>Height: </strong>70 m</p>
        <p><strong>Location: </strong>North Vancouver</p>
        <p><strong>Bridge type: </strong>Simple suspension bridge, Suspension bridge</p>
    </div>


    <div id="right_column">
        <h2>Capilano Suspension Bridge</h2>
        <div id="right_image">
            <img src="../images/CapilanoSuspensionBridge_big.jpg" alt="Capilano Suspension Bridge image" width="700" height="469">
        </div>

        <div class="description">
            <p>
                The Capilano Suspension Bridge is a simple suspension bridge crossing the Capilano River in the District of North Vancouver, British Columbia, Canada. The current bridge is 140 metres (460 ft) long and 70 metres (230 ft) above the river. It is part of a private facility, with an admission fee, and draws over 800,000 visitors a year.
            </p>
            <p>As well as the bridge and Treetops Adventure, the first venue of its kind in North America, the park also features rain forest ecotours, award-winning gardens, nature trails, North America's largest private collection of First Nations totem poles, period decor and costumes, and exhibits highlighting the park's history and the surrounding temperate rain forest. Guests can also witness a First Nations performance, featuring their traditional Regalia (ceremonial dress), masks, dancing and storytelling.In June 2011, a new attraction called Cliff Walk was added to the park. This adventure is included with the entrance fee.
            </p>
        </div>

        <?php
        //show comments and members can post a comment if they log in
        $topic = 6;
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
