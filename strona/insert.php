<?php
include_once 'dp.php';

if(isset($_POST['submit']))
{
    $opinia = $_POST['opinia'];
    $sql = "INSERT INTO opinie (Salon_id, opina, data)VALUES 
             ('1','$opinia',CURRENT_TIMESTAMP)";

    $conn = new mysqli("localhost", "szymon", "haslo", "loki");;
    if (mysqli_query($conn, $sql)) {
        header("Location: oceny.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<?php

