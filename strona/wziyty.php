<?php
session_start();
if($_SESSION['rola'] != ("klient" || "administrator")){

    header("Location: wziyty.php 401 Unauthorized");
    exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" lang="pl-en">
<head>
    <title>LooKreacja</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script>
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</head>
<body class="border border border-10 border-secondary rounded  ">
<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Aktlualności</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="zabiegi.php">Zabiegi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cennik.php">Cennik</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeria.php">Gelaria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./oceny.php">Oceny</a>
            </li>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Konto użytkownika
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <?php
            if (empty($_SESSION["username"])){
                echo "<button class='dropdown-item'  type='button'><a class='nav-link' href='login.php'>Logowanie</a></button>";
                echo "<button class='dropdown-item'  type='button'><a class='nav-link' href='rejestracja.php'>Rejestracja</a></button>";

            }
            if (!empty($_SESSION["username"])){
                echo " <button class='dropdown-item'  type='button'><a class='nav-link' href='wziyty.php'>Wizyty</a></button>";
                echo "<button class='dropdown-item'  type='button'><a class='nav-link' href='logut.php'>Wyloguj się</a></button>";
            }
            ?>
        </div>
    </div>
</nav>
<br><br>
<div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
        <h2>Rezerwacja wizyty</h2>

        <?php if (isset($_GET['error4'])) { ?>
            <div class="alert alert-success" role="alert">
                <?=$_GET['error4']?>
            </div>
            <?php
        }
        ?>
    </div>

    <form method="POST" action="rezerwacja.php">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                <div class="tour-booking-form">
                    <form>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <h4 class="tour-form-title">Wybierz opcje</h4>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label required" for="select">Zabieg</label>
                                    <div class="select">
                                        <select id="select" name="zabieg" class="form-control">
                                            <?php
                                            include("databse.php");
                                            $db = new Database();

                                            $sql = "SELECT nazwa, id FROM zabieg;";
                                            $result = $db->get($sql);

                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {

                                                    echo "<option value = '".$row["id"]."' >".$row["nazwa"]."</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="datepicker">Data wizyty</label>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input  id="datepicker" name="data" value="2022-02-20"
                                                min="2022-02-20" max="2032-02-20" type="datetime-local"  placeholder="Data" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Podaj dodatkowe informacje</label>
                                    <textarea class="form-control" id="textarea" name="informacja" pattern="[A-Za-z0-9]+" rows="4" placeholder="(opcjonalne)"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button type="submit" name="singlebutton" class="btn btn-primary">Zarezerwuj wizytę</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<div class="container">
    <form method="POST" action="potwierdzenieK.php">
        <div class="row">
            <div class="col">
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Potwierdzenie rezerwacji</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?=$_GET['error']?>
                    </div>
                    <?php
                }
                ?>
                <div class="form-outline mb-4">
                    <select  class="form-control form-control-lg" name="potwierdzenieK" id="cars">
                        <optgroup label="Wybierz datę rezerwacji">
                            <?php

                            $klient = $_SESSION['klient_id'];

                            $date = date('Y-m-d H:i:s');

                            $sql = "SELECT czas, Zabieg_id,id, potwierdzoneK FROM wizyta WHERE Klient_id = '$klient' AND czas >= '$date';";
                            $result = $db->get($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                                    if ($row["potwierdzoneK"] == false) {

                                        echo "<option value = '" . $row["id"] . "' >" . $row["czas"] . "</option>";
                                    }
                                }
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>
                <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Potwierdź</button>
                </div>
    </form>
</div>
<div class="col">
    <form method="POST" action="edycja_rezerwacja.php">
        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Edycja rezerwacji</h3>

        <?php if (isset($_GET['error2'])) { ?>
            <div class="alert alert-success" role="alert">
                <?=$_GET['error2']?>
            </div>
            <?php
        }
        ?>

        <div class="form-outline mb-4">
            <select  class="form-control form-control-lg" name="dataE" id="cars">
                <optgroup label="Wybierz rezerwację">
                    <?php

                    $klient = $_SESSION['klient_id'];

                    $date = date('Y-m-d H:i:s');

                    $sql = "SELECT czas, Zabieg_id,id FROM wizyta WHERE Klient_id = '$klient' AND czas >= '$date' AND potwierdzoneA = false;";
                    $result = $db->get($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            if ($row["potwierdzoneK"] == false) {

                                echo "<option value = '" . $row["id"] . "' >" . $row["czas"] . "</option>";
                            }
                        }
                    }
                    ?>
                </optgroup>
            </select>
        </div>
        <div class="form-outline mb-4">
            <select  class="form-control form-control-lg" name="zabiegE" id="cars">
                <optgroup label="Wybierz nowy zabieg">
                    <?php

                    $klient = $_SESSION['klient_id'];


                    $sql = "SELECT nazwa, id FROM zabieg;";
                    $result = $db->get($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {


                            echo "<option value = '" . $row["id"] . "' >" . $row["nazwa"] . "</option>";
                        }
                    }
                    ?>
                </optgroup>
            </select>
        </div>
        <div class="form-outline mb-4">
            <input  id="datepicker" name="nowadataE" value="2022-02-20"
                    min="2022-02-20" max="2032-02-20" type="datetime-local"  placeholder="Data" class="form-control" required>
        </div>
        <div class="pt-1 mb-4">
            <button class="btn btn-info btn-lg btn-block" type="submit">Edytuj</button>
        </div>
    </form>
</div>
<div class="w-100"></div>
<div class="col">
    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Usunięcie rezerwacji</h3>
    <?php if (isset($_GET['error3'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error3']?>
        </div>
        <?php
    }
    ?>
    <form method="POST" action="usuwanie_rezerwacji.php">
        <div class="form-outline mb-4">
            <select  class="form-control form-control-lg" name="usuwanie" id="cars">
                <optgroup label="Wybierz rezerwację">
                    <?php

                    $klient = $_SESSION['klient_id'];

                    $date = date('Y-m-d H:i:s');

                    $sql = "SELECT czas, Zabieg_id,id FROM wizyta WHERE Klient_id = '$klient'AND czas >= '$date' AND potwierdzoneA = false;";
                    $result = $db->get($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            echo "<option value = '" . $row["id"] . "' >" . $row["czas"] . "</option>";

                        }
                    }
                    ?>
                </optgroup>
            </select>
        </div>
        <div class="pt-1 mb-4">
            <button class="btn btn-info btn-lg btn-block" type="submit">Usuń</button>
        </div>
    </form>
</div>
<div class="col">
    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Historia rezerwacji</h3>
    <table class="table">

        <thead>
        <tr>
            <th scope="col">Pracownik</th>
            <th scope="col">Data zabiegu</th>
            <th scope="col">Nazwa zabiegu</th>
        </tr>
        </thead>
    </table>
    <?php

    $klient = $_SESSION['klient_id'];

    $sql = "Select imie ,nazwisko, zabieg.nazwa, wizyta.czas from pracownik Inner join wizyta on pracownik.id=wizyta.Pracownik_id Inner join zabieg on zabieg.id=wizyta.Zabieg_id where wizyta.Klient_id='$klient';";
    $result = $db->get($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            echo '<table class="table"><tbody><tr><th>'.$row["imie"]." ".$row["nazwisko"].'</th><th>'.$row["czas"].'</th><th>'.$row["nazwa"].'</th></tr></tbody></table>';

        }
    }
    ?>
</div>
</div>
</div>


<div id="carouselExampleIndicators" class="carousel slide" >
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <br><br><br><br><br>
                    <table class="table">
                        <thead>

                        <tr>
                            <th scope="col" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                </svg>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col" style="font-size: 30px; " >
                                <?php
                                echo date("Y F");
                                ?>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <?php
                    $sql = 'SELECT day(w.czas) as d ,hour(w.czas) as h,hour(ADDTIME(w.czas, z.czas)) as k FROM wizyta as w JOIN zabieg as z on z.id = w.zabieg_id WHERE month(w.czas) = month(current_date());';
                    $result = $db->get($sql);

                    $dates = array();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $dates[] = $row;
                        }
                    }
                    $maxDays = date('t');
                    foreach(range(1,$maxDays) as $i){
                        echo " <table class='table'>
               
                   <tbody>
                   <tr>
                   <th>".$i."</th>";

                        foreach(range(8,18) as $j){
                            $rezerwacja = false;
                            foreach ($dates as $d){
                                if (($d["d"] == $i || $d["k"] == $i) && $d["h"] == $j){
                                    $rezerwacja = true;
                                    break;
                                }
                            }
                            if ($rezerwacja) {
                                echo "<td>".$j.":00<br><span style='color: red'>rezerwacja</span>"."<br>"."</td>";
                            }
                            else{
                                echo "<td>".$j.":00<br><span style='color: green'>wolny</span>"."<br>"."</td>";
                            }
                        }
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <br><br><br><br><br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                </svg>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col" style="font-size: 30px; " >
                                <?php
                                echo date("Y F", strtotime('+1 months'));
                                ?>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <?php
                    $sql = 'SELECT day(czas) as d ,hour(czas) as h FROM wizyta WHERE month(czas) = month(current_date())+1;';
                    $result = $db->get($sql);
                    $dates = array();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $dates[] = $row;
                        }
                    }
                    $maxDays = date('t');
                    foreach(range(1,$maxDays) as $i){

                        echo " <table class='table'>
               
                   <tbody>
                   <tr>
                   <th>".$i."</th>";
                        foreach(range(8,18) as $j){
                            $rezerwacja = false;
                            foreach ($dates as $d){
                                if ($d["d"] == $i && $d["h"] == $j){
                                    $rezerwacja = true;
                                    break;
                                }
                            }
                            if ($rezerwacja) {
                                echo "<td>".$j.":00<br><span style='color: red'>rezerwacja</span>"."<br>"."</td>";

                            }
                            else{

                                echo "<td>".$j.":00<br><span style='color: green'>wolny</span>"."<br>"."</td>";
                            }
                        }
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>
            </div>        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <br><br><br><br><br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                </svg>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col" style="font-size: 30px; " >
                                <?php
                                echo date("Y F", strtotime('+2 months'));
                                ?>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <?php
                    $sql = 'SELECT day(czas) as d ,hour(czas) as h FROM wizyta WHERE month(czas) = month(current_date())+2;';
                    $result = $db->get($sql);
                    $dates = array();
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $dates[] = $row;
                        }
                    }
                    $maxDays = date('t');
                    foreach(range(1,$maxDays) as $i){
                        echo " <table class='table'>
               
                   <tbody>
                   <tr>
                   <th>".$i."</th>";
                        foreach(range(8,18) as $j){
                            $rezerwacja = false;
                            foreach ($dates as $d){
                                if ($d["d"] == $i && $d["h"] == $j){
                                    $rezerwacja = true;
                                    break;
                                }
                            }
                            if ($rezerwacja) {
                                echo "<td>".$j.":00<br><span style='color: red'>rezerwacja</span>"."<br>"."</td>";

                            }
                            else{
                                echo "<td>".$j.":00<br><span style='color: green'>wolny</span>"."<br>"."</td>";
                            }
                        }
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>
            </div>        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</body>
<br><br><br><br>
<section>
    <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    <em class="fas fa-gem me-3"></em>LooKreacja
                </h6>
                <p>
                    Najlepszy gabniet kosmetyczny
                </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    Linki
                </h6>
                <p>
                    <a href="#!" class="text-reset">Regulamin</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Ustawienia</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Pomoc</a>
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    Kontakt
                </h6>
                <p><em class="fas fa-home me-3"></em> Gdańsk, 14-330 PL</p>
                <p>
                    <em class="fas fa-envelope me-3"></em>
                    projekt@gmail.com
                </p>
                <p><em class="fas fa-phone me-3"></em> +48 987 654 321</p>
                <p><em class="fas fa-print me-3"></em> +48 123 456 789</p>
            </div>
        </div>
    </div>
</section>
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#">Szymon Szczurowski</a>
</div>
</html>