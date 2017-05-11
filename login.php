<?php
ob_start();
session_start();
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Form</title>

    <link href="Styles/login.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">

        function validate()
        {
            var error="";

            //email validation
            var email = document.getElementById( "email" );
            if( email.value == "" || email.value.indexOf( "@" ) == -1 )
            {
                error = "Invalid email address: " + email.value;
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
            }

            //password validation
            var password = document.getElementById( "password" );
            if( password.value == "") {
                error = "Password missing";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
            } else{
                return true;
            }

        }
    </script>
</head>


<body class="body">
<?php
    $email="";
    if(isset($_COOKIE['email'])){
        $email = $_COOKIE['email'];
    }
?>
<div class="container">
    <form id="loginForm" name="loginForm" method="post" action="processLogin.php" onsubmit="return validate();">
        <table width="400" align="center" cellpadding="2" cellspacing="0">
            <tr>
                <td colspan="2" class="tableFirst">LOGIN</td>
            </tr>

            <tr>
                <td >&nbsp;</td>
                <td></td>
            </tr>

            <tr>
                <th width="113">Email</th>
                <td width="188"><input name="email" type="email" class="textfield" id="email" value="<?php echo $email;?>"/></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input name="password" type="password" class="textfield" id="password" /></td>
            </tr>

            <tr>
                <td >&nbsp;</td>
                <td></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" style="font-size:120%;" name="login" value="login" /></td>
            </tr>

        </table>
    </form>
    <p id="error_para" ></p>
    <div class="link_div">
        <a href="index.php">【Home】</a>  &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="register.php">【Register】</a>
    </div>
</div>

</body>
</html>

<?php ob_end_flush();?>