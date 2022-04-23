<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


<?php

/*
$_COOKIE
$_SESSION
*/

setcookie("name", "Daniel", time() - 86400);

$_SESSION["name"] = "12";

?>

</body>

</html>



