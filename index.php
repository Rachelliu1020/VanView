<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vanview-Homepage</title>

    <link rel="stylesheet" type="text/css" href="./Styles/base.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script>

</head>

<body class="body">

<div class="container">
    <div id="vanview">
        <a href="./index.php" ><img src="./images/logo.png" alt="Vancouver image1" width="90" height="90"></a>
        <a href="./index.php" ><h1>VANVIEW</h1></a>
    </div>

    <?php
    echo "<div class='loginLink'>";
    if(isset($_SESSION['authority']) && $_SESSION['authority']===1){
        echo "Welcome, ".$_SESSION['username']." "."<img src='./images/loginIcon.gif' alt='member icon' width='24' height='23'></a><br>";
        echo  "<a href='./logout.php'>Logout?</a><br/>";
    } else {
        echo "<a href='./login.php'><img src='./images/loginSmallButton.png' alt='login icon'></a><br/>";
        echo "<a href='./register.php'>New user?</a>&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "</div>";

    ?>

    <div id="header_nav">
        <ul>
            <li><a class="navigation_after_selected" href="index.php"><span>Home</span></a></li>
            <li><a href="Nat_Land/nat_land.php">Natural Landscapes</a></li>
            <li><a href="Cult_Land/cult_land.php">Cultural Landscapes</a></li>
            <li><a href="Events/events.php">Events</a></li>
            <li><a href="Contact/contact.php">Contact Us</a></li>
            <li><a href="Sitemap/site_map.php">Site Map</a></li>
        </ul>
    </div>
</div>
<div class="container">

    <div class="fotorama" data-autoplay="true">

        <img src="./images/index4.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index3.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index2.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index1.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index5.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index6.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index7.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index8.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index9.jpg" alt="Vancouver image" width="1080" height="608">
        <img class="indexImg" src="./images/index10.jpg" alt="Vancouver image" width="1080" height="608">
    </div>

    <div class="topic2" ><img id="logo" src="./images/logobg.gif" alt="Vanview" width="1080" height="120"/></div>

    <div class="indexPage2">
        <h4>Start your journey in Vanview.</h4>
        <div>
            <a href="Nat_Land/nat_land.php"><img src="./images/index21.jpg" alt="nat_land" width="340" height="270"><br><h2>Natural Landscapes</h2></a>
            <a id="index202" href="Cult_Land/cult_land.php"><img src="./images/index22.jpg" alt="cult_land" width="340" height="270"><br><h2>Cultural Landscapes</h2></a>
            <a href="Events/events.php"><img src="./images/index23.jpg" alt="events" width="340" height="270"><br><h2>Events</h2></a>
        </div>
    </div>

</div>


<div class="index_footer">

    <ul id="footer1">
        <li><a href="Nat_Land/nat_land.php">Natural Landscapes</a></li>
        <li><a href="Nat_Land/whistler.php">Whistler & Blackcomb</a></li>
        <li><a href="Nat_Land/grouse_mountain.php">Grouse Mountain</a></li>
        <li><a href="Nat_Land/english_bay.php">English Bay</a></li>
        <li><a href="Nat_Land/kits_beach.php">Kitsilano Beach</a></li>
    </ul>
    <ul id="footer2">
        <li><a href="Cult_Land/cult_land.php">Cultural Landscapes</a></li>
        <li><a href="Cult_Land/Stanley_Park.php">Stanley Park</a></li>
        <li><a href="Cult_Land/Gastown.php">Gastown</a></li>
        <li><a href="Cult_Land/Capilano_Suspension_Bridge.php">Capilano Suspension Bridge</a></li>
        <li><a href="Cult_Land/Vancouver_Aquarium.php">Vancouver Aquarium</a></li>
    </ul>
    <ul id="footer3">
        <li><a href="Events/events.php">Events</a></li>
        <li><a href="Events/VIWF.php">Vancouver International Wine Festival</a></li>
        <li><a href="Events/Snow_Ski.php">Snowboarding and Skiing</a></li>
        <li><a href="Events/Cel_of_Light.php">Celebration of Light</a></li>
        <li><a href="Events/Canada_Day.php">CanadaCanada Day</a></li>
    </ul>
    <ul id="footer4">
        <li><a  href="Sitemap/site_map.php">Site Map</a></li>
        <li><a href="Contact/contact.php">Contact Us</a></li>
    </ul>

    <h4 id="Disclaimer">Disclaimer: This site is not for business, just for sharing information. </h4>
</div>

</body>
</html>
<?php
ob_end_flush();
?>
