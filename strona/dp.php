<?php
$conn = new mysqli("localhost", "szy", "haslo", "loki");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}
?>