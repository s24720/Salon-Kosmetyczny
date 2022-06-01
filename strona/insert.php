<?php

if(isset($_POST['submit']))
{
  ;
    $opinia = $_POST['opinia'];
    $nick = $_POST['nick'];

    include("databse.php");
    $db = new Database();


    $sql = "INSERT INTO opinie (Salon_id, opina, data, nick)VALUES 
             ('1','$opinia',CURRENT_TIMESTAMP,'$nick')";

    $result = $db->get($sql);

    if ($result == true) {
        header("Location: oceny.php");
    }

}
?>


