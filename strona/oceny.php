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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="border border border-10 border-secondary rounded  ">
<?php
include ("nav.php");
?>
<form method="POST" action="insert.php">
    <div class="container">
        <br>
        <div class="form-group">
            <span  class="display-3" itemprop="headline">Opinie</span>
        </div>
        <label for="exampleFormControlTextarea1">Napisz opinię</label>
        <textarea name="opinia" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <br>
        <div class="form-outline mb-4">
            <label class="form-la">Nick</label>
            <input style="width: 200px;" type="text" name="nick" class="form-control form-control-lg" />
        </div>
        <button class="btn btn-primary" name="submit" type="submit">Wyślij ocene</button>
        <br><br>
    </div>
</form>
<br>
<div class="container">
    <?php

    include("databse.php");

    $db = new Database();

    $sql = "SELECT opina, data, nick FROM opinie ORDER BY DATE(data) DESC, data DESC;";

    $result = $db->get($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {


            echo "<div class='container'>
            <div class='row'>
                <div class='col-md-8'>
                    <div class='media g-mb-30 media-comment'>
                        <img style='width: 50px;height: 50px;' class='d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15' src='https://bootdey.com/img/Content/avatar/avatar7.png' alt='Image Description'>
                        <div class='media-body u-shadow-v18 g-bg-secondary g-pa-30'>
                            <div class='g-mb-15'>
                                <h5 class='h5 g-color-gray-dark-v1 mb-0'>".$row["nick"]."</h5>
                                <span class='g-color-gray-dark-v4 g-font-size-12'>". $row["data"] ."</span>
                            </div>
            
                            <p>". $row["opina"] ."</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>";
        }
    } else {
        echo "Brak komntarzy";
    }
    ?>
</div>
</body>
<?php
include("footer.php");
?>
</html>