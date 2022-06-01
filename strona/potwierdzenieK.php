<?php
$potwierdzenie = $_POST['potwierdzenieK'];

include("databse.php");
$db = new Database();

$sql = "UPDATE wizyta SET potwierdzoneK = true WHERE  id = '$potwierdzenie';";
$result = $db->get($sql);

if ($result == true) {
    header("Location: wziyty.php?error=Rezerwacja potwierdzona");
}

?>




