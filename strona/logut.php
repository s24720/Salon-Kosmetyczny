<?php
session_start();
$_SESSION["rola"] = "";
$_SESSION["username"] = "";
$_SESSION["password"] = "";
header("Location: main_log.php");
?>