<?php

$historia = $_POST['historia'];

include("databse.php");
$db = new Database();

$sql = "DELETE FROM wizyta WHERE id = $historia;";
$result = $db->get($sql);

if ($result == true) {
    header("Location: wziyty.php?error=$sql");
}

?>


