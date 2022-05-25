<?php

if(isset($_POST['submit']))
{
    $opinia = $_POST['opinia'];
    $nick = $_POST['nick'];
    $sql = "INSERT INTO opinie (Salon_id, opina, data, nick)VALUES 
             ('1','$opinia',CURRENT_TIMESTAMP,'$nick')";

    $conn = new mysqli("localhost", "szymon", "haslo", "loki");;
    if (mysqli_query($conn, $sql)) {
        header("Location: oceny.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>


