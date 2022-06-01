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

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $tel = preg_match('/^[0-9]{11}+$/', $telephone);

    if (empty($name)){
        header("Location: rejestracja.php?error=Imie jest niepoprawne");
    }else if (empty($surname)){
        header("Location: rejestracja.php?error=Nazwisko jest niepoprawne");
    }else if (empty($telephone) || !$tel){
        header("Location: rejestracja.php?error=Numer telefonu jest niepoprawny(format:48xxxxxxxxx)");
    }else if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL) ){
        header("Location: rejestracja.php?error=E-mail jest niepoprawne)");
    }else if (empty($password) || !$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
        header("Location: rejestracja.php?error=Haslo jest niepoprawne");
    }else{

        include("databse.php");
        $db = new Database();

        $sql = "INSERT INTO dane_logowanie(email, haslo, Rola_id) VALUE ( '".$mail."','".$password."',1);";
        $result = $db->get($sql);
        $sql2 = "SELECT id FROM dane_logowanie WHERE email = '".$mail."'";
        $result = $db->get($sql2);
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $sql3 = "INSERT INTO klient(imie, nazwisko,nr_tel, Salon_id, Dane_logowanie_id) VALUE ('".$name."','".$surname."','". $telephone . "'," . "1,"."$id".");";
        $result = $db->get($sql3);

        header("Location: login.php");

    }
}else {
    header("Location: rejestracja.php");
}

?>