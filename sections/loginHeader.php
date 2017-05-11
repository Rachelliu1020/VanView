<?php
echo "<div class='loginLink'>";
if(isset($_SESSION['authority']) && $_SESSION['authority']===1){
    echo "Welcome, ".$_SESSION['username']." "."<img src='../images/loginIcon.gif' alt='member icon' width='24' height='23'></a><br>";
    echo  "<a href='../logout.php'>Logout?</a><br/>";
} else {
    echo "<a href='../login.php'><img src='../images/loginSmallButton.png' alt='login icon'></a><br/>";
    echo "<a href='../register.php'>New user?</a>&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</div>";
?>