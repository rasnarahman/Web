<?php
session_start();
$sid=session_id();

session_destroy();
unset($_SESSION);

echo "You just cleared php session with id = $sid";

header("Location:userlogin.php");
?>
