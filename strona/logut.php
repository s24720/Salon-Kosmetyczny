<?php
session_start();
$_SESSION["rola"] = "";
$_SESSION["username"] = "";
$_SESSION["password"] = "";
header("Location: index.php");
?>