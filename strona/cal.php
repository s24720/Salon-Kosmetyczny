<?php
$maxDays=date('t');

foreach(range(1,$maxDays) as $i){
    echo $i."<br>";

    foreach(range(8,18) as $j){
        echo $j.":00<br>";
    }
}

?>