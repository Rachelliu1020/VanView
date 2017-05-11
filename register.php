<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link href="Styles/login.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">

        function validate()
        {
            var error="";

            //first name validation
            var fname = document.getElementById( "fname" );
            if( fname.value == "") {
                error = "First Name missing";
                document.getElementById("error_para").innerHTML = error;
                return false;
            }

            //last name validation
            var lname = document.getElementById( "lname" );
            if( lname.value == "") {
                error = "Last Name missing";
                document.getElementById("error_para").innerHTML = error;
                return false;
            }

            //email validation
            var email = document.getElementById( "email" );
            if( email.value == "" || email.value.indexOf( "@" ) == -1 )
            {
                error = "Invalid email address: " + email.value;
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
            }

            //user name validation
            var username = document.getElementById( "username" );
            if( username.value == "") {
                error = "User Name missing";
                document.getElementById("error_para").innerHTML = error;
                return false;
            }

            //password validation
            var password = document.getElementById( "password" );
            if( password.value == "") {
                error = "Password missing";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
            } else if (password.value.length < 6 ) {
                error = "Password too short";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
            }

            //confirm password validation
            var confirm_password = document.getElementById( "confirm_password" );
            if( confirm_password.value == "" )
            {
                error = "Password confirmation missing";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
            } else if( confirm_password.value != password.value)
            {
                error = "Passwords do not match";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
            }else
            {
                return true;
            }
        }
    </script>
</head>


<body class="body">

<div class="container">
    <form id="registerForm" name="registerForm" method="post" action="processRegister.php" onsubmit="return validate();">
        <table width="400" border="0" align="center" cellpadding="2" cellspacing="0">
            <tr>
                <td colspan="2" class="tableFirst">REGISTER MEMBER</td>
            </tr>

            <tr>
                <td >&nbsp;</td>
                <td></td>
            </tr>

            <tr>
                <th>First Name </th>
                <td><input name="firstname" type="text" class="textfield" id="fname" /></td>
            </tr>

            <tr>
                <th>Last Name </th>
                <td><input name="lastname" type="text" class="textfield" id="lname" /></td>
            </tr>

            <tr>
                <th>Email </th>
                <td><input name="email" type="email" class="textfield" id="email" /></td>
            </tr>

            <tr>
                <th>User Name </th>
                <td><input name="username" type="text" class="textfield" id="username" /></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input name="password" type="password" class="textfield" id="password" /></td>
            </tr>

            <tr>
                <th>Confirm Password </th>
                <td><input name="confirm_password" type="password" class="textfield" id="confirm_password" /></td>
            </tr>

            <tr>
                <td >&nbsp;</td>
                <td></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" style="font-size:120%;" name="register" value="register" /></td>
            </tr>

        </table>
    </form>

    <p id="error_para" ></p>

    <div class="link_div">
        <a href="index.php">【Home】</a>  &nbsp;&nbsp; | &nbsp;&nbsp;  <a href="login.php">【Log In】</a>
    </div>
</div>
</body>
</html>
