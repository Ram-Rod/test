<?php require "login/loginheader.php"; ?>
<?php
    session_start();
    session_destroy();
    header("location:main_login.php");
