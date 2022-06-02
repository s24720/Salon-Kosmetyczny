<?php
$usun = $_POST['usuwanie'];

include("databse.php");
$db = new Database();

$sql = "DELETE FROM wizyta WHERE id = '$usun' ;";
$result = $db->get($sql);

if ($result == true) {
    header("Location: administrator.php?error11=Rezerwacja skasowana");
}
?>



