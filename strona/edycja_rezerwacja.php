<?php
$data = $_POST['dataE'];
$zabieg = $_POST['zabiegE'];
$nowadata = $_POST['nowadataE'];

include("databse.php");
$db = new Database();

$sql = "UPDATE wizyta SET czas = '$nowadata', Zabieg_id = '$zabieg' WHERE  id = '$data';";

$result = $db->get($sql);

if ($result == true) {
    header("Location: wziyty.php?error2=Rezerwacja edytowana");
}

?>



