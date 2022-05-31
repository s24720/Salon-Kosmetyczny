<?php
if (isset($_POST['nazwa']) && isset($_POST['cena']) && isset($_POST['czas'])) {

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $nazwa = test_input($_POST['nazwa']);
    $cena = test_input($_POST['cena']);
    $czas = test_input($_POST['czas']);

    if (empty($nazwa)) {
        header("Location: administrator.php?error=Nie podano nazwy zabiegu");
    } else if (empty($cena)) {
        header("Location: administrator.php?error=Nie podano ceny zabiegu");
    } else if (empty($czas)) {
        header("Location: administrator.php?error=Nie podano czasu trwania zabiegu");
    } else {

        $nazwa = $_POST['nazwa'];
        $cena = $_POST['cena'];
        $czas = $_POST['czas'];
        $rodzaj = $_POST['rodzaj'];


        $sql = "INSERT INTO zabieg (nazwa, cena, czas, Rodzaj_id) VALUES 
             ('$nazwa','$cena','$czas','$rodzaj')";

        $conn = new mysqli("localhost", "szymon", "haslo", "loki");
        if (mysqli_query($conn, $sql)) {
            header("Location: administrator.php?error=Dodano zabieg");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
?>


