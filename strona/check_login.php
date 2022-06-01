<?php
if (isset($_POST['username']) && isset($_POST['password'])){

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    if (empty($username)){
        header("Location: login.php?error=Zle podano e-mail");
    }else if (empty($password)){
        header("Location: login.php?error=Zle podano haslo");
    }else{

        include("databse.php");
        $db = new Database();

        $sql = "SELECT * , klient.id as KiD , rola.nazwa as Rola FROM dane_logowanie  Inner join klient on klient.id=dane_logowanie.id   inner join rola on rola.id=Rola_id where haslo='".$password."' and email='".$username."';";


        echo $sql;

        $result = $db->get($sql);


        if ($result->num_rows > 0) {

            session_start();

            $row = $result->fetch_assoc();
            $_SESSION['klient_id'] = $row["KiD"];
            $_SESSION['rola'] = $row["Rola"];
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;

            if($_SESSION['rola'] == ("administrator")){
                header("Location: administrator.php");
            }else {
                header("Location: index.php");
           }
        }else{
            header("Location: login.php?error= Podano zle dane");
        }
    }
}else {
    header("Location: login.php");
}

    ?>

