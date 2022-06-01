<?php
session_start();

    $zabieg = $_POST['zabieg'];
    $data = $_POST['data'];
    $informacja = $_POST['informacja'];
    $klient = $_SESSION['klient_id'];

include("databse.php");
$db = new Database();

    $sql = "INSERT INTO wizyta (Klient_id, Salon_id, Pracownik_id, czas, Zabieg_id, informacje) VALUES
             ('$klient' ,1,1,'$data', '$zabieg','$informacja')";

$result = $db->get($sql);

if ($result == true) {
    header("Location: wziyty.php?error4=Dokonano rezerwacji");
}

?>


