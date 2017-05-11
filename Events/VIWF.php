<?php
ob_start();
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vancouver International Wine Festival</title>
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
    </div>

    <div id="right_column">
        <h2>Vancouver International Wine Festival</h2>
        <div id="right_image">
            <img src="../images/viwf.gif" alt="wine here" width="700" height="434">
        </div>

        <div class="description">
            <p>
                The Vancouver International Wine Festival is the place to broaden your knowledge
                of fine wine and delectable food. It is Canada's premier wine show and one of the biggest
                in North America!
                The festival has three main goals: </p>
            <ul>
                <li>to provide an educational and entertaining wine experience for
                    the public and trade. </li>
                <li> to be a premier marketing opportunity for the wine industry and festival partners </li>
                <li> to raise funds for the Bard on the Beach Theatre Society. </li>
            </ul>
            <p>
                Visit <a href="http://www.vanwinefest.ca">vanwinefest.ca</a> or call
                604-873-3311 Toll Free: 1-877-321-3121 for ticket prices and more information!
            </p>
        </div>

        <?php
            //show comments and members can post a comment if they log in
            $topic = 9;
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