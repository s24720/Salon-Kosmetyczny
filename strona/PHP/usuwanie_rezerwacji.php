<?php
$usun = $_POST['usuwanie'];


$sql = "DELETE FROM wizyta WHERE id = $usun;";

echo $sql;
$conn = new mysqli("localhost", "szymon", "haslo", "loki");;
if (mysqli_query($conn, $sql)) {
    header("Location: wziyty.php");
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);




