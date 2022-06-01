<?php
$potwierdzenie = $_POST['potwierdzenieA'];

include("databse.php");
$db = new Database();

$sql = "UPDATE wizyta SET potwierdzoneA = true WHERE  id = '$potwierdzenie';";
$result = $db->get($sql);

if ($result == true) {
    header("Location: administrator.php?error3=Rezerwacja potwierdzona");
}

?>




