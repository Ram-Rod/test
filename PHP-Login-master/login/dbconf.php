<?php require "login/loginheader.php"; ?>
<?php
//DATABASE CONNECTION VARIABLES
$host = "pixel2product.com"; // Host name
$username = "cody"; // Mysql username
$password = "marley"; // Mysql password
$db_name = "Bayside_Camp"; // Database name

//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix."members";
$tbl_attempts = $tbl_prefix."loginAttempts";
