<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" lang="pl-en">
<head>
    <title>LooKreacja</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="PHP/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/PHP/styl2.css" type="text/css" media="screen">

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

                <a class="nav-link" href="./main_log.php">Aktlualności</a>
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
            session_start();

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

<br>


<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Zabiegi pielęgnacyjno-złuszczające</a></h3>

<?php


$conn = new mysqli("localhost", "szymon", "haslo", "loki");;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}


$sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '1';";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $cennik = "<section style='height: 20px' class='type-of-treatment'>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks'>
                                    <tbody><tr  >
                                        <td class='task-name'>".$row["nazwa"]."</td>
                                        <td class='duration'>".$row["czas"]."</td>
                                        <td class='price'>".$row["cena"]."</td>
                                        <td class='price-sale'>"."</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>'";
        echo $cennik;

    }}

echo '<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Zabiegi na ciało z użyciem aparatury</a></h3>';

$sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '2';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks''>
                                    <tbody><tr>
                                        <td class='task-name'>".$row["nazwa"]."</td>
                                        <td class='duration'>".$row["czas"]."</td>
                                        <td class='price'>".$row["cena"]."</td>
                                        <td class='price-sale'>"."</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>";}}

echo '<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Oprawa oka</a></h3>';

$sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '3';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks''>
                                    <tbody><tr>
                                        <td class='task-name'>".$row["nazwa"]."</td>
                                        <td class='duration'>".$row["czas"]."</td>
                                        <td class='price'>".$row["cena"]."</td>
                                        <td class='price-sale'>"."</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>";}}

echo '<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Masaż twarzy</a></h3>';


$sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '4';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks''>
                                    <tbody><tr>
                                        <td class='task-name'>".$row["nazwa"]."</td>
                                        <td class='duration'>".$row["czas"]."</td>
                                        <td class='price'>".$row["cena"]."</td>
                                        <td class='price-sale'>"."</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>";}}

echo '<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Makijaż permanentny</a></h3>';

$sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '5';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks''>
                                    <tbody><tr>
                                        <td class='task-name'>".$row["nazwa"]."</td>
                                        <td class='duration'>".$row["czas"]."</td>
                                        <td class='price'>".$row["cena"]."</td>
                                        <td class='price-sale'>"."</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>";}}

echo '<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Pielęgnacja dłoni i stóp</a></h3>';

$sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '6';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks''>
                                    <tbody><tr>
                                        <td class='task-name'>" . $row["nazwa"] . "</td>
                                        <td class='duration'>" . $row["czas"] . "</td>
                                        <td class='price'>" . $row["cena"] . "</td>
                                        <td class='price-sale'>" . "</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>";
    }

    echo '<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Zabiegi na twarz z użyciem aparatury</a></h3>';

    $sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '7';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks''>
                                    <tbody><tr>
                                        <td class='task-name'>" . $row["nazwa"] . "</td>
                                        <td class='duration'>" . $row["czas"] . "</td>
                                        <td class='price'>" . $row["cena"] . "</td>
                                        <td class='price-sale'>" . "</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>";
        }
    }

    echo '<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Mezoterapia</a></h3>';

    $sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '8';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                             <div class='table-and-explication'>
                                <table class='list-of-tasks''>
                                    <tbody><tr>
                                        <td class='task-name'>" . $row["nazwa"] . "</td>
                                        <td class='duration'>" . $row["czas"] . "</td>
                                        <td class='price'>" . $row["cena"] . "</td>
                                        <td class='price-sale'>" . "</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </section>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
?>

</body>

<footer class="text-center text-lg-start bg-light text-muted">

    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

        <div class="me-5 d-none d-lg-block">
            <span>Zajrzyj na nasze social media:</span>
        </div>

        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </section>


    <section>
        <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>LooKreacja
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
                    <p><i class="fas fa-home me-3"></i> Gdańsk, 14-330 PL</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        projekt@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> +48 987 654 321</p>
                    <p><i class="fas fa-print me-3"></i> +48 123 456 789</p>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="#">Szymon Szczurowski</a>
    </div>
</footer>
</html>