<?php
$potwierdzenie = $_POST['potwierdzenieK'];


$sql = "UPDATE wizyta SET potwierdzoneK = true WHERE  id = '$potwierdzenie';";

$conn = new mysqli("localhost", "szymon", "haslo", "loki");;
if (mysqli_query($conn, $sql)) {
    header("Location: wziyty.php?error=Rezerwacja potwierdzona");
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);




