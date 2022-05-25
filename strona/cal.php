<?php

$sql = 'SELECT day(czas) as d ,hour(czas) as h FROM wizyta WHERE month(czas) = month(current_date());';

$conn = new mysqli("localhost", "szymon", "haslo", "loki");

$result = $conn->query($sql);

$dates = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $dates[] = $row;
    }
}

$conn->close();


$maxDays=date('t');

foreach(range(1,$maxDays) as $i){
    echo $i."<br>";

    foreach(range(8,18) as $j){

        $rezerwacja = false;
        foreach ($dates as $d){
            if ($d["d"] == $i && $d["h"] == $j){
                $rezerwacja = true;
                break;
            }
        }

        echo $j.":00".$rezerwacja."<br>";
        if ($rezerwacja) {
            echo "-rezerwacja<br>";
        }
        else{
            echo "-wolny<br>";
        }
        }
}

?>