<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "szymon";
    $dbpass = "haslo";
    $db = "loki";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

?>