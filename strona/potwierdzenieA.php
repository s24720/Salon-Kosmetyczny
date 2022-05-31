<?php
$potwierdzenie = $_POST['potwierdzenieA'];


$sql = "UPDATE wizyta SET potwierdzoneA = true WHERE  id = '$potwierdzenie';";

$conn = new mysqli("localhost", "szymon", "haslo", "loki");;
if (mysqli_query($conn, $sql)) {
    header("Location: administrator.php?error3=Rezerwacja potwierdzona");
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);




