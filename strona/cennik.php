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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/styl2.css" type="text/css" media="screen">
</head>
<body class="border border border-10 border-secondary rounded  ">
<?php
include ("nav.php");
?>
<br>

<section>
    <div>
        <table class='list-of-tasks''>
        <tbody><tr>
            <td class='task-name'><strong>nazwa zabiegu</strong></td>
            <td class='duration'><strong>czas trwania</strong></td>
            <td class='price'><strong>cena</strong></td>
            <td class='price-sale'></td>
        </tr></tbody>
        </table>
    </div>
</section>;

<?php

function display($row){
    echo "<section class='type-of-treatment'> <span class='slidetoggle-trigger''></span>
                                      <div class='table-and-explication'>
                                         <table class='list-of-tasks''>
                                             <tbody>
                                             <tr>
                                                 <td class='task-name'>".$row["nazwa"]."</td>
                                                 <td class='duration'>".$row["czas"]."</td>
                                                 <td class='price'>".$row["cena"]."</td>
                                                 <td class='price-sale'>"."</td>
                                             </tr></tbody>
                                         </table>
                                     </div>
                                 </section>";
}

function result($result){
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo display($row);
        }
    }
}

include ("databse.php");
$db= new Database();

$sql = "Select id, nazwa FROM rodzaj";
$result = $db ->get($sql);

while($row = $result->fetch_assoc()) {
    $sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = ".$row['id'].";";
echo "<h3 style='text-indent: 5%;' class='name-of-treatment' ><a style=' text-decoration: none; color:#e4c9c4; ' href='#'>$row[nazwa]</a></h3>";
    $result1 = $db->get($sql);
    result($result1);
}

?>
</body>
<?php
include("footer.php");
?>
</html>