<?php
    $zabieg = $_POST['zabieg'];
    $data = $_POST['data'];
    $informacja = $_POST['informacja'];

    $sql = "INSERT INTO wizyta (Klient_id, Salon_id, Pracownik_id, czas, Zabieg_id, informacje) VALUES
             ('1','1',1, '$data', '$zabieg','$informacja')";

    $conn = new mysqli("localhost", "szymon", "haslo", "loki");;
    if (mysqli_query($conn, $sql)) {
        header("Location: wziyty.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>


