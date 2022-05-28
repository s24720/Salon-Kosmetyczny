<?php

if(isset($_POST['submit']))
{
    include "polaczenie.php";
    $conn = OpenCon();


    $opinia = $_POST['opinia'];
    $nick = $_POST['nick'];
    $sql = "INSERT INTO opinie (Salon_id, opina, data, nick)VALUES 
             ('1','$opinia',CURRENT_TIMESTAMP,'$nick')";

    if (mysqli_query($conn, $sql)) {
        header("Location: oceny.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

    CloseCon($conn);


}
?>


