<?php

if(isset($_POST['submit']))
{
  ;
    $opinia = $_POST['opinia'];
    $nick = $_POST['nick'];

  $x = htmlentities($opinia, ENT_QUOTES);
  $y = htmlentities($nick, ENT_QUOTES);
  echo $x;

    include("databse.php");
    $db = new Database();


    $sql = "INSERT INTO opinie (Salon_id, opina, data, nick)VALUES 
             ('1','$x',CURRENT_TIMESTAMP,'$y')";

    $result = $db->get($sql);

    if ($result == true) {
        header("Location: oceny.php");
    }

}
?>


