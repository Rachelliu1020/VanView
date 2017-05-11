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
        <h3>A Map of Vancouver Aquarium</h3>
        <a id="map_link" href="https://www.google.ca/maps/place/vancouver+aquarium/@49.300796,-123.130929,15z/data=!4m2!3m1!1s0x0:0x5f251627980ee358?sa=X&amp;ei=hfjeVIPSIZDXoASOuIKABA&amp;ved=0CJABEPwSMA4"><img id="map_small" src="../images/Vancouver_Aquarium_map_small.gif" alt="Vancouver Aquarium map" width="250" height="136"><span>[View Larger Map]</span></a>
        <p><strong>Address: </strong>845 Avison Way, Vancouver, BC V6G 3E2</p>
        <p><strong>Price: </strong><br>Adult: $29;<br>Senior65+: $20;<br>Youth(13-18): $20;<br>Student: $20;<br>Child(4-12): $15;<br>Child(3&amp;Under): Free.</p>
        <p><strong>Hours of Operation: </strong><br>10 a.m.-5 p.m.daily, and 9:30 a.m.-6 p.m.seasonally/statutory holiday weekends.
        <p><strong>Phone: </strong>604-659-3400</p>
    </div>


    <div id="right_column">
        <h2>Vancouver Aquarium</h2>
        <div id="right_image">
            <img src="../images/vancouver_aquarium_big.jpg" alt="Vancouver Aquarium image" width="700" height="525">
        </div>

        <div class="description">
            <p>
                The Vancouver Aquarium (officially the Vancouver Aquarium Marine Science Centre) is a public aquarium located in Stanley Park in Vancouver, British Columbia, Canada. In addition to being a major tourist attraction for Vancouver, the aquarium is a centre for marine research, conservation and marine animal rehabilitation.

                The Vancouver Aquarium was one of the first facilities to incorporate professional naturalists into the galleries to interpret animal behaviours. Prior to this, at the London Zoo Fish House, naturalists James S. Bowerbank, Ray Lankester, David W. Mitchell and Philip H. Gosse (the creator of the word aquarium) had regularly held "open house" events, but the Vancouver Aquarium was the first to employ educational naturalists on a full-time basis. Aquarium research projects extend worldwide, and include marine mammal rescue and rehabilitation.

                On August 9, 2010 Prime Minister Stephen Harper and B.C. Premier Gordon Campbell announced capital funding of up to $15 million. The province would donate $10 million in funding over the next three years to help pay for a planned expansion of the 54-year-old facility, Premier Gordon Campbell said. Harper added that Ottawa would hand over up to $5 million to the aquarium for infrastructure upgrades. The aquarium, however, remains a nonprofit organization. The property is owned by the City of Vancouver and rented to the Aquarium for $40,000 a year since 1991 (prior to which it was $1 per year).

                In October 2009 the Vancouver Aquarium was designated as a Coastal America Learning Center by the US Environmental Protection Agency. As the first Learning Center in Canada, this designation is intended to strengthen the Canadian/U.S. partnership for protecting and restoring shared ocean resources.
            </p>
        </div>

        <?php
        //show comments and members can post a comment if they log in
        $topic = 8;
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
