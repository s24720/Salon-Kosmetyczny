<?php
$data = $_POST['dataE'];
$zabieg = $_POST['zabiegE'];
$nowadata = $_POST['nowadataE'];

$sql = "UPDATE wizyta SET czas = '$nowadata', Zabieg_id = '$zabieg' WHERE  id = '$data';";

$conn = new mysqli("localhost", "szymon", "haslo", "loki");;
if (mysqli_query($conn, $sql)) {
    header("Location: administrator.php");
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);



