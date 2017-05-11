<?php
ob_start();
session_start();
session_regenerate_id();

$status = "";
if (isset($_SESSION['authority']) && $_SESSION['authority']===1) {
    $status = 'readonly';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="../Styles/base.css">
    <script type="text/javascript" src="formValidation.js"></script>
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
            <li><a href="../Events/events.php">Events</a></li>
            <li><a class="navigation_after_selected" href="contact.php"><span>Contact Us</span></a></li>
            <li><a href="../Sitemap/site_map.php">Site Map</a></li>
        </ul>
    </div>
</div>


<div class="container">
    <div id="left_column">
        <h3>Enjoy your Vanview</h3>
        <img src="../images/vancouver7.gif" alt="Vancouver image1" width="150" height="100">
        <img src="../images/vancouver5.gif" alt="Vancouver image2" width="150" height="100">
        <img src="../images/vancouver9.gif" alt="Vancouver image3" width="150" height="100">
        <img src="../images/vancouver3.gif" alt="Vancouver image4" width="150" height="100">
        <img src="../images/vancouver1.gif" alt="Vancouver image5" width="150" height="100">
    </div>

    <div id="right_column">
        <h2>Contact Us</h2>
        <p>Please fill out this form and provide comments or feedbacks to the author.</p>
        <p>Feel free to contact us if you have any ideas about our content. You also can reach us by email at:<p>
        <p><a href="mailto:rachelliu1020@gmail.com">rachelliu1020@gmail.com</a></p>

        <form name="form" id="form" method="post" action="receiveInfo.php" onsubmit=" return validateForm()">
            <table>

                <tr>
                    <td><label for="firstname"><span class="star">*</span>First Name:  </label></td>
                    <td><input type="text" name="firstname" id="firstname" <?php echo $status;?>><span id="reminderFirstname"></span></td>
                </tr>
                <tr>
                    <td><label for="lastname"><span class="star">*</span>Last Name:  </label></td>
                    <td><input type="text" name="lastname" id="lastname" <?php echo $status;?>><span id="reminderLastname"></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="email"><span class="star">*</span>Email:  </label></td>
                    <td><input type="text" name="email" id="email" <?php echo $status;?>><span id="reminderEmail"></span></td>
                </tr>
                <?php
                //if log in, show the first name and last name and email
                if (isset($_SESSION['authority']) && $_SESSION['authority']===1){
                    echo "<script>";
                    echo "document.getElementById('firstname').value='".$_SESSION['firstname']."';";
                    echo "document.getElementById('lastname').value='".$_SESSION['lastname']."';";
                    echo "document.getElementById('email').value='".$_SESSION['email']."';";
                    echo "</script>";
                }
                ?>
                <tr>
                    <td><label for="subject"><span class="star">*</span>Subject:  </label></td>
                    <td><input type="text" name="subject" id="subject" ><span id="reminderSubject"></span></td>
                </tr>

                <tr>
                    <td><label for="comment"><span class="star">*</span>Comment:  </label></td>
                    <td><textarea name="comment" id="comment" cols="60" rows="10" onfocus="textDisappear()" onblur="textAppear()">Enter your comments here</textarea>
                        <br><span id="reminderComment"></span></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Give us additional feedback by doing the following survey.</legend>
                            <h4>Which part is the most interesting to you ?</h4>
                            <input type="radio" name="favpart1" id="favNat_Land1" value="Natural_Landscape">Natural Landscapes<br>
                            <input type="radio" name="favpart1" id="favCul_Land1" value="Cultural_Landscape">Cultural Landscapes<br>
                            <input type="radio" name="favpart1" id="events1" value="events">Events

                            <h4>Which part gave you the most useful information?</h4>
                            <input type="radio" name="usfpart2" id="favNat_Land2" value="Natural_Landscape">Natural Landscapes<br>
                            <input type="radio" name="usfpart2" id="favCul_Land2" value="Cultural_Landscape">Cultural Landscapes<br>
                            <input type="radio" name="usfpart2" id="events2" value="events">Events

                            <h4>Which part do you think need to add more landscapes introduction?</h4>
                            <input type="radio" name="addpart3" id="favNat_Land3" value="Natural_Landscape">Natural Landscapes<br>
                            <input type="radio" name="addpart3" id="favCul_Land3" value="Cultural_Landscape">Cultural Landscapes<br>
                            <input type="radio" name="addpart3" id="events3" value="events">Events
                        </fieldset>
                        <br><span id="reminderRadio"></span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="feedback" value="Send Feedback" id="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<footer>
    <div>
        <h3><a href="./contact.php">Contact Us</a><a  href="../Sitemap/site_map.php">Site Map</a></h3>
        <h4 id="Disclaimer">Disclaimer: This site is not for business, just for sharing information. </h4>
    </div>
</footer>
</body>
</html>
<?php
ob_end_flush();
?>