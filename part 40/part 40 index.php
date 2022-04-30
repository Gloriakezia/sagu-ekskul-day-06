<?php 
    include_once '29.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd,)
    VALUES (?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init();
if (!mysqli_stmt_init($conn, $sql)) {
    echo "SQL error";
} else [
    mysqli_stmt_bind_param($stmt, "sssss, $first, $last, $email, $uid, $pwd");
]

header("Location: ../29.php?signup=succes");