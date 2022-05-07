<?php

    if (isset($POST['submit'])) {
        include_once 'dbh.inc.php';

        $first = $_POST['first'];
        $last = $_POST['last']
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        if (empty($first) ||   (empty($last)  ||   (empty($email)  || (empty($uid)  ||  (empty($pwd)) {
            header("Location: ../index.php?signup=empty");
            exit();
        } else {
            if(!preg_match("/^[a-zA]*$/", $first) || !preg_match("/^[a-zA]*$/", $last))
                header("Location: ../index.php?signup=char");
                exit();
             } else {
            header("Location: ../index.php?signup=success");
            exit();
             }
        }
    }
}else{
        header("Location: ../index.php);
        exit();
    }