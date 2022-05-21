<?php
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['telephone']) && isset($_POST['mail']) && isset($_POST['password'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = test_input($_POST['name']);
    $surname = test_input($_POST['surname']);
    $telephone = test_input($_POST['telephone']);
    $mail = test_input($_POST['mail']);
    $password = test_input($_POST['password']);
    $women = test_input($_POST['women']);
    $man = test_input($_POST['man']);
    $other = test_input($_POST['other']);

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
        echo "good";
    }
}else {
    header("Location: rejestracja.php");
}

?>