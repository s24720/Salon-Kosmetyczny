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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="PHP/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="filter: brightness(60%)" class="d-block w-100" src="https://www.positivelyaware.com/sites/default/files/article-images/Christies-Place-1000x350px.jpg" height="350" alt="First slide">
        </div>
        <div class="carousel-item">
            <img style="filter: brightness(60%)" class="d-block w-100" src="https://rotenso.com/wp-content/uploads/2021/10/apartament-exclusive-5-edited-1000x350px.jpg" height="350" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img style="filter: brightness(60%)" class="d-block w-100" src="https://rotenso.com/wp-content/uploads/2021/10/apartament-exclusive-edited-1000x350px.jpg" height="350" alt="Third slide">
        </div>
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
<div class="container">
    <div style="margin-top:-10px; text-align: center; padding:30px;"> <div  style= font-size:40px;">
            <span  class="display-3" itemprop="headline">Salon kosmetyczny LooKreacja</span></div>
        </br>
        </br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <span class="display-4" itemprop="headline">LooKreacja</span>
                </br>
                </br>
                <span class="text-muted">Secret Avenue The Beauty Institute w Gdańsku to salon kosmetyczny w którym możesz skorzystać z kompleksowych usług kosmetycznych oraz zasięgnąć fachowych porad z zakresu pielęgnacji.
Oferujemy szeroki wachlarz zabiegów medycyny estetycznej, kosmetyki ciała oraz pielęgnacji twarzy, ciała i paznokci.</span>
            </div>
            <div class="col-sm">
                <div style="text-align: center;">
                    <img src="https://afrodytasalon.pl/006-2" width="350" height="300" class="border border border-10 border-secondary rounded" alt="">
                </div>
            </div>
        </div>
    </div>

    </br>
    </br>
    </br>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
    <div  class="banner"> <img style="filter: brightness(60%)" src="https://secret-avenue.pl/wp-content/uploads/2019/08/re4.jpg" width="1000" height="600" class="border border border-10 border-secondary rounded" alt="">
        <div class="container">
            <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                <div class="home_slider_title">
                    <h1 style="color: white">Doradzimy i pomożemy w</br>wyborze zabiegu</h1></div>
                </br>
                <div class="home_slider_subtitle"><h4 style="color: rgba(255,255,255,0.98)">Secret Avenue The Beauty Institute w </br> Gdańsku to
                        miejsce w którym możesz skorzystać z kompleksowych usług </br>kosmetycznych oraz zasięgnąć fachowych porad z zakresu pielęgnacji.</h4></div>
                <div class="button button_light home_button"><a href="#">Shop Now</a></div>
            </div>
        </div>
    </div>


    <div style=" margin-top:-10px; text-align: center; padding:30px;"> <div  style= font-size:40px;">
            </br>
            <span  class="display-3" itemprop="headline">VOUCHERY - LooKreacja</span></div>
    </div>
    <div class="container">
        <div style="text-align: center;">
            <h2><span class="text-muted">Na dowolne zabiegi, dla siebie lub na prezent</span></h2>
        </div>
    </div>

    <div class="container" style="background-color: #e4c9c4;">
        <div class="row">
            <div class="col">
                <div class="wrapper d-flex justify-content-center align-items-center">
                    <div class="card">
                        <div class="cross-bg">
                        </div>
                        <div class="content">

                            <div class="logo text-right">
                                <i class="bi bi-arrow-through-heart"></i>
                            </div>

                            <div class="text-center text-uppercase text-white off">

                                <h1 class="mt-0">100</h1>
                                <h5 class="mt-0">PLN</h5>

                            </div>

                            <div class="text-center text-uppercase text-white">
                                </br>
                                <a href="#"><h3 style="color: burlywood" class="m-0"><span>KUP</span></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="wrapper d-flex justify-content-center align-items-center">
                    <div class="card">
                        <div class="cross-bg">
                        </div>
                        <div class="content">

                            <div class="logo text-right">
                                <i class="bi bi-arrow-through-heart"></i>
                            </div>

                            <div class="text-center text-uppercase text-white off">

                                <h1 class="mt-0">200</h1>
                                <h5 class="mt-0">PLN</h5>

                            </div>

                            <div class="text-center text-uppercase text-white">
                                </br>
                                </br>
                                <a href="#"><h3 style="color: burlywood" class="m-0"><span>KUP</span></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="wrapper d-flex justify-content-center align-items-center">
                    <div class="card">
                        <div class="cross-bg">
                        </div>
                        <div class="content">

                            <div class="logo text-right">
                                <i class="bi bi-arrow-through-heart"></i>
                            </div>

                            <div class="text-center text-uppercase text-white off">

                                <h1 class="mt-0">500</h1>
                                <h5 class="mt-0">PLN</h5>

                            </div>

                            <div class="text-center text-uppercase text-white">
                                </br>
                                <a href="#"><h3 style="color: burlywood" class="m-0"><span>KUP</span></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>
    </br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <span class="display-4" itemprop="headline">Bony kwotowe – idealne na prezent</span>
                </br>
                </br>
                <span class="text-muted">Po zamówieniu otrzymasz bon w podanym mailu. Ważność bonu to trzy miesiące od daty zakupu.
                                         Bony kwotowe to także idealny pomysł na prezent. Możesz odebrać je w formie eleganckiego vouchera
                    w kopercie i wręczyć czy to na święta, dzień kobiet, na urodziny czy z dowolnej okazji.
                </span>
            </div>
            <div class="col-sm">
                <div style="text-align: center;">
                    <img src="https://bohoswing.com/wp-content/uploads/2019/03/201903-voucher-boho-swing.jpg" width="350" height="300" class="border border border-10 border-secondary rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</br>
</br>

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