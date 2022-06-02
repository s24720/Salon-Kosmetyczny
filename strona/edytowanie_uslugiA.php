<?php
$zabieg = $_POST['zabiegE'];
$nazwa = $_POST['nazwaE'];
$cena = $_POST['cenaE'];
$czas= $_POST['czasE'];

include("databse.php");
$db = new Database();

$sql = "UPDATE zabieg SET nazwa = '$nazwa', cena = '$cena', czas = '$czas' WHERE  id = '$zabieg';";

$result = $db->get($sql);

if ($result == true) {
    header("Location: administrator.php?error10=Zabieg edytowany");

}

?>



