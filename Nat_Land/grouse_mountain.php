<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grouse Mountain</title>
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
            <li><a href="whistler.php">Whistler & Blackcomb</a></li>
            <li><a href="grouse_mountain.php">Grouse Mountain</a></li>
            <li><a href="english_bay.php">English Bay</a></li>
            <li><a href="kits_beach.php">Kitsilano Beach</a></li>
        </ul>
        <h3>A Map to Grouse Mountain</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/grouse+mountain/@49.372289,-123.099487,15z/data=!4m2!3m1!1s0x0:0x4d63448ce84b46f6?sa=X&amp;ei=1qjhVLCNDNjpoATmqoHQBA&amp;sqi=2&amp;ved=0CIMBEPwSMBE" ><img id="map_small" src="../images/grouse_map.png" alt="Grouse Mountain map" width="226" height="160"><span>[View Larger Map]</span></a>
        <p><strong>Address:</strong> 6400 Nancy Greene Way, North Vancouver, BC V7R 4K9</p>
        <p><strong>Phone:</strong> (604) 980-9311</p>

    </div>


    <div id="right_column">
        <h2>Grouse Mountain</h2>
        <div id="right_image">
            <img src="../images/grouse_mountain.jpg" alt="Grouse Mountain" width="636" height="395">
        </div>

        <div class="description">
            <p>
                Welcome to Grouse Mountain, where fun activities and a beautiful view await!
                Grouse mountain, known as the peak of Vancouver is a great destination for skiing, snowboarding,
                and ice skating for the winter. Don't be worried if it is summer and no snow, because Grouse Mountain
                offers various summer activities such as a birds of prey wildlife demonstration, lumberjack shows,
                a 2.9 km (1.8 mile) hiking trail knowns as the Grouse Grind, and you can engage in ziplining! You can take in the beauty of the mountains from
                the scenic chairlift ride.
                Visit <a href="https://www.grousemountain.com">grousemountain.com</a> for more information!
            </p>
        </div>

        <?php
        //show comments and members can post a comment if they log in
        $topic = 2;
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
