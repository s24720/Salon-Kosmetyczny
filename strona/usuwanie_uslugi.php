<?php

    $usun = $_POST['usuwanie'];


    $sql = "DELETE FROM zabieg WHERE id = $usun;";

    $conn = new mysqli("localhost", "szymon", "haslo", "loki");
    if (mysqli_query($conn, $sql)) {
        header("Location: administrator.php?error2=Skasowano");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>


