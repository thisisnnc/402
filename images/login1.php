<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','trackkingsystem') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index1.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" >
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3>Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>