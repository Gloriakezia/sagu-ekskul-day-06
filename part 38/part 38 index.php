<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form>
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Uaername">
    <br>
    <input type="Password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign up</button>
</form>



</php
    $sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'Admin', 'test123');";
   mysqli_query($conn, $sql)
    }

?>

</body>
</html>