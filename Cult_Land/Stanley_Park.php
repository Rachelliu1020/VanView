<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stanley Park</title>
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
        <h3>A Map of Stanley Park</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/Stanley+Park/@49.301705,-123.1417,12z/data=!4m2!3m1!1s0x0:0x364a639db409e216"><img id="map_small" src="../images/stanleypack_map.gif" alt="Stanley Park map" width="250" height="177"><span>[View Larger Map]</span></a>
        <p><strong>Address:</strong> Vancouver, BC V6G 1Z4</p>
        <p><strong>Area:</strong> 4.05 km²</p>
        <p><strong>Phone:</strong> (604) 681-6728</p>

    </div>


    <div id="right_column">
        <h2>Stanley Park</h2>
        <div id="right_image">
            <img src="../images/stanleyPack.jpg" alt="Stanley Park image" width="700" height="467">
        </div>

        <div class="description">
            <p>
                Stanley Park is Vancouver's first, largest, and most beloved urban park!<br>
                Designated a national  historic site of Canada, Stanley Park  is a magnificent green oasis in the midst of the heavily built urban landscape of Vancouver.
                Explore the 400-hectare natural West Coast rainforest and enjoy scenic views of water, mountains, sky, and majestic trees along Stanley Park's famous Seawall. Discover kilometres of trails, beautiful beaches, local wildlife, great eats, natural, cultural and historical landmarks, along with many other adventures. The park offers a wide range of unforgettable experiences for all ages and interests.
            </p>
        </div>

        <?php
        //show comments and members can post a comment if they log in
        $topic = 5;
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
