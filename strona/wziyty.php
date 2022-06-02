<?php
session_start();
if($_SESSION['rola'] != ("klient" || "administrator")){

    header("Location: wziyty.php 401 Unauthorized");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
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
<?php
include ("nav.php");
?>
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

                    $sql = "SELECT czas, Zabieg_id,id FROM wizyta WHERE Klient_id = '$klient' AND czas >= '$date' AND potwierdzoneA = false AND potwierdzoneK = false;";
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
    <form action="usuwanie_rezerwacji.php" method="POST" onsubmit="return confirm('Na pewno usunąć rezerwację?');">
        <div class="form-outline mb-4">
            <select  class="form-control form-control-lg" name="usuwanie" id="cars">
                <optgroup label="Wybierz rezerwację">
                    <?php

                    $klient = $_SESSION['klient_id'];

                    $date = date('Y-m-d H:i:s');

                    $sql = "SELECT czas, Zabieg_id,id FROM wizyta WHERE Klient_id = '$klient'AND czas >= '$date' AND potwierdzoneA = false AND potwierdzoneK = false;";
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
            <button class="btn btn-info btn-lg btn-block" type="submit" name="completeYes" value="Complete Transaction">Usuń</button>
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
<?php
include("kalendarz.php");
?>
</body>
<br><br><br><br>
<?php
include("footer.php");
?>
</html>