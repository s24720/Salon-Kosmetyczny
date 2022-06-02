<?php
session_start();
if($_SESSION['rola'] != ("administrator")){

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="border border border-10 border-secondary rounded  ">
<?php
include ("nav.php");
?>
<br>
<div style="text-align: center;"><h1 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Panel administratora</h1></div>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <form style="width: 23rem;"
                  method="POST"
                  action="dodawanie_uslugi.php">
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Dodaj zabieg</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?=$_GET['error']?>
                    </div>
                    <?php
                }
                ?>
                <div class="form-outline mb-4">
                    <input type="text" name="nazwa" pattern="[A-Za-z0-9]+" class="form-control form-control-lg" />
                    <label class="form-label">Nazwa zabiegu</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" name="cena" class="form-control form-control-lg" />
                    <label class="form-label" >Cena zabiegu (zl.gr)</label>
                </div>
                <div class="form-outline mb-4">
                    <input class="form-control form-control-lg" type="time" name="czas" step="2">
                    <label class="form-label" >Czas trwania zabiegu</label>
                </div>
                <div class="form-outline mb-4">
                    <select  class="form-control form-control-lg" name="rodzaj">
                        <optgroup label="Wybierz rodzaj zabiegu">
                            <option value="1">1 - Zabiegi pielęgnacyjno-złuszczające</option>
                            <option value="2">2 - Zabiegi na ciało z użyciem apatatury</option>
                            <option value="3">3 - Oprawa oka</option>
                            <option value="4">4 - Masaż twarzy</option>
                            <option value="5">5 - Makijaż permanentny</option>
                            <option value="6">6 - Pielęgnacja dłoni i stóp</option>
                            <option value="7">7 - Zabiegi na twarz z użyciem aparatury</option>
                            <option value="8">8 - Mezoterapia</option>
                        </optgroup>
                    </select>
                    <label class="form-label" >Wybierz zabieg do usunięcia</label>
                </div>
                <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">dodaj</button>
                </div>
            </form>
        </div>
        <div class="col-sm">
            <form style="width: 23rem;"
                  method="POST"
                  action="edytowanie_uslugiA.php">
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Edytuj zabieg</h3>
                <?php if (isset($_GET['error10'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?=$_GET['error10']?>
                    </div>
                    <?php
                }
                ?>
                <div class="form-outline mb-4">
                        <div class="form-group">
                            <div class="select">
                                <select id="select" name="zabiegE" class="form-control">
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
                            <label class="control-label required" for="select">Wybierz Zabieg</label>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" name="nazwaE" pattern="[A-Za-z0-9]+" class="form-control form-control-lg" />
                    <label class="form-label">Nowa nazwa zabiegu</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" name="cenaE" class="form-control form-control-lg" />
                    <label class="form-label" >Nowa cena zabiegu (zl.gr)</label>
                </div>
                <div class="form-outline mb-4">
                    <input class="form-control form-control-lg" type="time" name="czasE" step="2">
                    <label class="form-label" >Nowy czas trwania zabiegu</label>
                </div>
                <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">edytuj</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="usuwanie_uslugi.php" method="POST" onsubmit="return confirm('Na pewno usunąć usługę?');">

                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Usuń zabieg</h3>
                                <?php if (isset($_GET['error2'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?=$_GET['error2']?>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="form-outline mb-4">
                                    <select  class="form-control form-control-lg" name="usuwanie" id="cars">
                                        <optgroup label="Wybierz zabieg">
                                            <?php

                                            $sql = "SELECT nazwa, id FROM zabieg;";
                                            $result = $db->get($sql);

                                            while($row = $result->fetch_assoc()) {
                                                echo "<option value = '".$row["id"]."' >".$row["nazwa"]."</option>";

                                            }
                                            ?>
                                        </optgroup>
                                    </select>
                                    <label class="form-label" >Nazwa zabiegu</label>
                                </div>
                                <div class="pt-1 mb-4">

                                    <button class="btn btn-info btn-lg btn-block" type="submit" name="completeYes" value="Complete Transaction">Usuń</button>
                                </div>
                            </form>

            </div>
            <div class="col">
                <div class="col">
                    <form method="POST" action="potwierdzenieA.php">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Potwierdzenie rezerwacji</h3>
                        <?php if (isset($_GET['error3'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?=$_GET['error3']?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-outline mb-4">
                            <select  class="form-control form-control-lg" name="potwierdzenieA" id="cars">
                                <optgroup label="Wybierz datę rezerwacji">
                                    <?php
                                    $date = date('Y-m-d H:i:s');


                                    $sql = "SELECT w.czas, w.Zabieg_id,w.id, k.imie, k.nazwisko FROM wizyta as w INNER JOIN klient k on w.Klient_id = k.id WHERE czas >= '$date' AND potwierdzoneK = true AND  potwierdzoneA = false;";
                                    $result = $db->get($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {

                                            echo "<option value = '" . $row["id"] . "' >" . $row["czas"] ." - ".$row["imie"]." ".$row["nazwisko"]."</option>";

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
            </div>
            <div class="container">
            <div class="row">
                <div class="col-sm">

                    <form method="POST" action="edycja_rezerwacjaA.php">
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Edycja rezerwacji</h3>
                        <?php if (isset($_GET['error4'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?=$_GET['error4']?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-outline mb-4">
                            <select  class="form-control form-control-lg" name="dataE" id="cars">
                                <optgroup label="Wybierz rezerwację">
                                    <?php


                                    $date = date('Y-m-d H:i:s');

                                    $sql = "SELECT w.czas, w.Zabieg_id,w.id, k.imie, k.nazwisko FROM wizyta as w INNER JOIN klient k on w.Klient_id = k.id WHERE czas >= '$date' AND potwierdzoneK = true AND potwierdzoneA = false;";
                                    $result = $db->get($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {


                                            echo "<option value = '" . $row["id"] . "' >" . $row["czas"] ." - ".$row["imie"]." ".$row["nazwisko"]."</option>";
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
                <div class="col-sm">
                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Usunięcie rezerwacji</h3>
                    <?php if (isset($_GET['error11'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$_GET['error11']?>
                        </div>
                        <?php
                    }
                    ?>
                    <form action="usuwanie_rezerwacjaA.php" method="POST" onsubmit="return confirm('Na pewno usunąć rezerwację?');">
                        <div class="form-outline mb-4">
                            <select  class="form-control form-control-lg" name="usuwanie" id="cars">
                                <optgroup label="Wybierz rezerwację">
                                    <?php

                                    $klient = $_SESSION['klient_id'];

                                    $date = date('Y-m-d H:i:s');

                                    $sql = "SELECT w.czas, w.Zabieg_id,w.id, k.imie, k.nazwisko FROM wizyta as w INNER JOIN klient k on w.Klient_id = k.id WHERE czas >= '$date' AND potwierdzoneK = true AND potwierdzoneA = false;";
                                    $result = $db->get($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {

                                            echo "<option value = '" . $row["id"] . "' >" . $row["czas"] ." - ".$row["imie"]." ".$row["nazwisko"]."</option>";

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
            </div>
        </div>
        <div class="row">
            <div class="col">
               <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Statystyki</h3>
                  <table class="table">
                      <thead>
                        <tr>
                         <th scope="col">Pracownik</th>
                         <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           Średnia cena zabiegów</th>
                            <th scope="col">Średni czas zabiegów</th>
                            </tr>
                            </thead>
                            </table>
                            <?php
                            $sql = "SELECT k.nazwisko, k.imie, w.Klient_id, avg(z.cena) as c,avg(z.czas ) as cz from wizyta as w Join zabieg as z on z.id = w.zabieg_id INNER JOIN
                                            klient k on w.Klient_id = k.id GROUP BY w.klient_id;";
                            $result = $db->get($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {

                                        echo '<table class="table"><tbody><tr><th>'.$row["imie"].' '.$row["nazwisko"].'</th><th>'.$row["c"].'</th><th>'.$row["cz"].'</th></tr></tbody></table>';
                                    }
                                }
                                ?>
                            </div>
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