<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

</php
    $sql = "SELECT + FORM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqki_fetch_assoc()) {
            echo $row [''];
        }
    }

?>

</body>
</html>