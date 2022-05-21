<?php
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['password'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = test_input($_POST['name']);
    $surname = test_input($_POST['surname']);
    $telephone = test_input($_POST['telephone']);
    $mail = test_input($_POST['email']);
    $password = test_input($_POST['password']);


    if (empty($name)){
        header("Location: rejestracja.php?error=Zle podano imie");
    }else if (empty($surname)){
        header("Location: rejestracja.php?error=Zle podano nazwisko");
    }else if (empty($telephone)){
        header("Location: rejestracja.php?error=Zle podano numer telefonu");
    }else if (empty($mail)){
        header("Location: rejestracja.php?error=Zle podano e-mail");
    }else if (empty($password)){
        header("Location: rejestracja.php?error=Zle podano haslo");
    }else{
        $conn = new mysqli("localhost", "szymon", "haslo", "loki");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO dane_logowanie(email, haslo, Rola_id) VALUE ( '".$mail."','".$password."',1);";
        $result = $conn->query($sql);
        $sql2 = "SELECT id FROM dane_logowanie WHERE email = '".$mail."'";
        $result = $conn->query($sql2);
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $sql3 = "INSERT INTO klient(imie, nazwisko,nr_tel, Salon_id, Dane_logowanie_id) VALUE ('".$name."','".$surname."','". $telephone . "'," . "1,"."$id".");";
        $result = $conn->query($sql3);

        header("Location: login.php");

    }
}else {
    header("Location: rejestracja.php");
}

?>