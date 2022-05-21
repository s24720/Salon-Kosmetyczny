<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>LooKreacja</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            <button class="dropdown-item"  type="button"><a class="nav-link" href="login.php">Logowanie</a></button>
            <button class="dropdown-item"  type="button"><a class="nav-link" href="rejestracja.php">Rejestracja</a></button>
            <?php
            session_start();

            if (!empty($_SESSION["username"])){
                echo " <button class='dropdown-item'  type='button'><a class='nav-link' href='wziyty.php'>Wizyty</a></button>";
                echo "<button class='dropdown-item'  type='button'><a class='nav-link' href='logut.php'>Wyloguj się</a></button>";
            }
            ?>
        </div>
    </div>

</nav>


</br>
</br>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;"
                    method="POST"
                    action="register.php">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Rejestracja</h3>

                        <?php if (isset($_GET['error'])) { ?>

                            <div class="alert alert-danger" role="alert">
                                <?=$_GET['error']?>
                            </div>

                            <?php
                        }
                        ?>

                        <div class="form-outline mb-4">
                            <input type="text" name="name" class="form-control form-control-lg" />
                            <label class="form-label">Imię</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="surname" class="form-control form-control-lg" />
                            <label class="form-label" >Nazwisko</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="telephone" class="form-control form-control-lg" />
                            <label class="form-label" >Numer telefonu</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="email" class="form-control form-control-lg" />
                            <label class="form-label" >E-mail</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control form-control-lg" />
                            <label class="form-label">Hasło</label>
                        </div>
                        <!--
                                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                    <h6 class="mb-0 me-4">Płeć:&nbsp;&nbsp;</h6>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <label><input class="form-check-input" type="radio" name="women" > Kobieta </label> <br>

                                                    </div>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <label><input class="form-check-input" type="radio" name="men" > Kobieta </label> <br>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0">
                                                        <label><input class="form-check-input" type="radio" name="other" > Kobieta </label> <br>
                                                    </div>

                                                </div>
-->
                                                <div class="pt-1 mb-4">
                                                    <button class="btn btn-info btn-lg btn-block" type="submit">Zarejestruj się</button>
                                                </div>

                                            </form>

                                        </div>


                                    </div>
                                    <div class="col-sm-6 px-0 d-none d-sm-block">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                                             alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                                    </div>
                                </div>
                            </div>
                        </section>
                        </br></br></br></br></br></br></br></br></br></br>
                        </body>
                        </br></br></br></br></br></br>

                        <footer class="text-center text-lg-start bg-light text-muted">

                            <section
                                    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
                            >

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



                            <section class="">
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
                                                Useful links
                                            </h6>
                                            <p>
                                                <a href="#!" class="text-reset">Pricing</a>
                                            </p>
                                            <p>
                                                <a href="#!" class="text-reset">Settings</a>
                                            </p>
                                            <p>
                                                <a href="#!" class="text-reset">Orders</a>
                                            </p>
                                            <p>
                                                <a href="#!" class="text-reset">Help</a>
                                            </p>
                                        </div>

                                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                            <h6 class="text-uppercase fw-bold mb-4">
                                                Contact
                                            </h6>
                                            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                                            <p>
                                                <i class="fas fa-envelope me-3"></i>
                                                info@example.com
                                            </p>
                                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
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