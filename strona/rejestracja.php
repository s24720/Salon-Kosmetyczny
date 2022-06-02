<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>LooKreacja</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script>
        function ValidateInput(ctrl) {
            if (event.keyCode == 8 ||event.keyCode == 46) {
=                if (ctrl.selectionStart <= 4) return false;
            }

            return true;
        }
    </script>
</head>
<body class="border border border-10 border-secondary rounded  ">
<?php
include ("nav.php");
?>
<br><br>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">
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
                            <input type="text" name="name"  class="form-control form-control-lg" />
                            <label class="form-label">Imię</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="surname"  class="form-control form-control-lg" />
                            <label class="form-label" >Nazwisko</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="telephone" pattern="[0-9]+" value="48" onkeydown="return ValidateInput(this)" class="form-control form-control-lg" />
                            <label class="form-label" >Numer telefonu</label>
                        </div>
                        <div class="form-outline mb-4">
                           <input type="text" name="email" class="form-control form-control-lg" />
                            <label class="form-label" >E-mail</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control form-control-lg" />
                            <label class="form-label">Hasło <br>(Małe i duże litery, cyfry, znaki specjalne,<br> min. 8 znaków)</label>
                        </div>
                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Zarejestruj się</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img  class="border border border-10 border-secondary rounded" width="900" height="700" src="https://www.gravitan.pl/gfx/oferta/oferta-beauty-clinics.jpg"
                      alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br>
</body>
<?php
include("footer.php");
?>
</html>