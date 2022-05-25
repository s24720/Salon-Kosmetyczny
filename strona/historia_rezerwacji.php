<?php

$historia = $_POST['historia'];


$sql = "DELETE FROM wizyta WHERE id = $historia;";


$conn = new mysqli("localhost", "szymon", "haslo", "loki");;
if (mysqli_query($conn, $sql)) {
    header("Location: wziyty.php?error=$sql");

} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);




