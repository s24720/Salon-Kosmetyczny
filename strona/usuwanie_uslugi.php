<?php
if(isset($_POST['submit']))
{
    $usun = $_POST['usun'];

    $sql = "DELETE FROM `zabieg` WHERE `zabieg`.`nazwa` = $usun;";

    $conn = new mysqli("localhost", "szymon", "haslo", "loki");;
    if (mysqli_query($conn, $sql)) {
        header("Location: administrator.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>


