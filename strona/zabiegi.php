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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="border border border-10 border-secondary rounded  ">
<?php
include ("nav.php");
?>
<br><br>
<div style="text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Zabiegi pielęgnacyjno-złuszczające</a>
                    <?php
                    function display($row){
                        echo "<a href='#' class='list-group-item list-group-item-action'>" . $row["nazwa"] . "</a>";
                    }
                    function result($result){

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo display($row);
                            }
                        }
                    }
                    include("databse.php");

                    $db = new Database();
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '1';";
                    $result = $db->get($sql);
                    result($result);
                    ?>
                </div>
                <br>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Zabiegi na ciało z użyciem aparatury</a>
                    <?php
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '2';";
                    $result = $db->get($sql);
                    result($result);
                    ?>
                </div>
                <br>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Oprawa oka</a>
                    <?php
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '3';";
                    $result = $db->get($sql);
                    result($result);

                    ?>
                </div>
                <br>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Masaż twarzy</a>
                    <?php
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '4';";
                    $result = $db->get($sql);
                    result($result);
                    ?>
                </div>
                <br>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Makijaż permanentny</a>
                    <?php
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '5';";
                    $result = $db->get($sql);
                    result($result);
                    ?>
                </div>
                <br>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Pielęgnacja dłoni i stóp</a>
                    <?php
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '6';";
                    $result = $db->get($sql);
                    result($result);
                    ?>
                </div>
                <br>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Zabiegi na twarz z użyciem aparatury</a>
                    <?php
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '7';";
                    $result = $db->get($sql);
                    result($result);
                    ?>
                </div>
                <br>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" style="background-color:  #e4c9c4;  border-color:  #e4c9c4";  class="list-group-item list-group-item-action active">Mezoterapia</a>
                    <?php
                    $sql = "SELECT nazwa FROM zabieg WHERE Rodzaj_id = '8';";
                    $result = $db->get($sql);
                    result($result);
                    ?>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include("footer.php");
?>
</html>