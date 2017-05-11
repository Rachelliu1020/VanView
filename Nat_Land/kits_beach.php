<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kitsilano Beach</title>
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
            <li><a href="whistler.php">Whistler & Blackcomb</a></li>
            <li><a href="grouse_mountain.php">Grouse Mountain</a></li>
            <li><a href="english_bay.php">English Bay</a></li>
            <li><a href="kits_beach.php">Kitsilano Beach</a></li>
        </ul>
        <h3>A Map to Kitsilano Beach</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/Kitsilano+Beach/data=!4m2!3m1!1s0x54867235a01f461d:0xa4855feea57361ac?sa=X&amp;ei=0qHhVLWMA4juoATPw4H4Dw&amp;ved=0CIQBEPIBMA4" ><img id="map_small" src="../images/kitsilano_map.png" alt="Kitsilano Beach map" width="241" height="160"><span>[View Larger Map]</span></a>
        <p><strong>Address:</strong> 1499 Arbutus Street (at Cornwall Avenue) </p>
        <p><strong>Area:</strong> 13.47 hectares </p>

    </div>


    <div id="right_column">
        <h2>Kitsilano (Kits) Beach</h2>
        <div id="right_image">
            <img src="../images/kitsilano_beach.jpg" alt="Kitsilano" width="700" height="484">
        </div>

        <div class="description">
            <p>
                One of the top 5 beaches in Vancouver, Kitsilano (Kits) Beach is beautiful and clean!<br>
                Kits Beach is Vancouver's most beautiful beaches and it is perfect place to go for getting that summer tan that
                you always wanted! The view of the city, ocean, and the mountains are phenomenal. Plus many activities such as
                tennis, kite flying, volleyball, jogging, etc. make this beach very popular and fun for everyone.
                Kits Pool is a large, heated salt-water outdoor pool almost three times the size of an Olympic pool that is also
                located in Kits Beach for kids and adults to splash around in. Summer in Vancouver can't be anymore
                wonderful when you come have fun at Kits Beach!
        </div>

        <?php
        //show comments and members can post a comment if they log in
        $topic = 4;
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