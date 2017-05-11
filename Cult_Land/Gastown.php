<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gastown</title>
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
        <h3>A Map of Gastown</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/Gastown,+Vancouver,+BC/data=!4m2!3m1!1s0x54867177614ef47b:0xd1fea64d6d378461?sa=X&amp;ei=he_eVLrYK4K1ogTi34CwBw&amp;ved=0CIQBEPIBMA4"><img id="map_small" src="../images/Gastown_map_samll.gif" alt="Gastown map" width="250" height="155"><span>[View Larger Map]</span></a>
        <p><strong>Address: </strong>Gastown, Vancouver, BC</p>
        <p><strong>Landmark: </strong>The Gastown Steam Clock</p>
        <p><strong>Services: </strong>Grocery or Drug Store, Retail Store, Restaurants.</p>
    </div>


    <div id="right_column">
        <h2>Gastown</h2>
        <div id="right_image">
            <img src="../images/gastown_big.jpg" alt="Gastown image" width="700" height="411">
        </div>

        <div class="description">
            <p>Gastown is a national historic site in Vancouver, British Columbia, at the northeast end of Downtown adjacent to the Downtown Eastside.Its historical boundaries were the waterfront (now Water Street and the CPR tracks), Columbia Street, Hastings Street, and Cambie Street, which were the borders of the 1870 townsite survey, the proper name and postal address of which was Granville, B.I. ("Burrard Inlet"). The official boundary does not include most of Hastings Street except for the Woodward's and Dominion Buildings, and stretches east past Columbia St., to the laneway running parallel to the west side of Main Street.
            </p>
            <p>Gastown's most famous (though nowhere near oldest) landmark is the steam-powered clock on the corner of Cambie and Water Street. It was built in 1977 to cover a steam grate, part of Vancouver's distributed steam-heating system, as a way to harness the steam and to prevent street people from sleeping on the spot in cold weather.Its original design was faulty and it had to be powered by electricity after a breakdown. The steam mechanism was completely restored with the financial support of local businesses as it had become a major tourist attraction, and is promoted as a heritage feature although it is of modern invention. The steam used is low pressure downtown-wide steam heating network (from a plant adjacent to the Georgia Viaduct) that powers a miniature steam engine in its base, in turn driving a chain lift. The chain lift moves steel balls upward, where they are unloaded and roll to a descending chain. The weight of the balls on the descending chain drives a conventional pendulum clock escapement, geared to the hands on the four faces. The steam also powers the clock's sound production as whistles are used instead of bells to produce the Westminster "chime" and to signal the time. In October 2014 the clock was temporarily removed for major repairs by its original builder, and is due to be reinstalled in January 2015.
            </p>
        </div>

        <?php
        //show comments and members can post a comment if they log in
        $topic = 7;
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
