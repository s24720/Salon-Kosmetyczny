<div id="carouselExampleIndicators" class="carousel slide" >
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <br><br><br><br><br>
                    <table class="table">
                        <thead>

                        <tr>
                            <th scope="col" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                </svg>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col" style="font-size: 30px; " >
                                <?php
                                echo date("Y F");
                                ?>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <?php
                    $sql = 'SELECT day(czas) as d ,hour(czas) as h FROM wizyta WHERE month(czas) = month(current_date());';
                    $result = $db->get($sql);
                    $dates = array();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $dates[] = $row;
                        }
                    }
                    $maxDays = date('t');
                    foreach(range(1,$maxDays) as $i){
                        echo " <table class='table'>
                                     <tbody>
                                    <tr>
                                     <th>".$i."</th>";
                        foreach(range(8,18) as $j){
                            $rezerwacja = false;
                            foreach ($dates as $d){
                                if ($d["d"] == $i && $d["h"] == $j){
                                    $rezerwacja = true;
                                    break;
                                }
                            }
                            if ($rezerwacja) {
                                echo "<td>".$j.":00<br><span style='color: red'>rezerwacja</span>"."<br>"."</td>";
                            }
                            else{

                                echo "<td>".$j.":00<br><span style='color: green'>wolny</span>"."<br>"."</td>";
                            }
                        }
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <br><br><br><br><br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                </svg>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col" style="font-size: 30px; " >
                                <?php
                                echo date("Y F", strtotime('+1 months'));
                                ?>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <?php
                    $sql = 'SELECT day(czas) as d ,hour(czas) as h FROM wizyta WHERE month(czas) = month(current_date())+1;';
                    $result = $db->get($sql);
                    $dates = array();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $dates[] = $row;
                        }
                    }
                    $maxDays = date('t');
                    foreach(range(1,$maxDays) as $i){
                        echo " <table class='table'>
                                        <tbody>
                                         <tr>
                                         <th>".$i."</th>";
                        foreach(range(8,18) as $j){

                            $rezerwacja = false;
                            foreach ($dates as $d){
                                if ($d["d"] == $i && $d["h"] == $j){
                                    $rezerwacja = true;
                                    break;
                                }
                            }
                            if ($rezerwacja) {
                                echo "<td>".$j.":00<br><span style='color: red'>rezerwacja</span>"."<br>"."</td>";
                            }
                            else{
                                echo "<td>".$j.":00<br><span style='color: green'>wolny</span>"."<br>"."</td>";
                            }
                        }
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>
            </div>        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <br><br><br><br><br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                </svg>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col" style="font-size: 30px; " >
                                <?php
                                echo date("Y F", strtotime('+2 months'));
                                ?>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            <th scope="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <?php
                    $sql = 'SELECT day(czas) as d ,hour(czas) as h FROM wizyta WHERE month(czas) = month(current_date())+2;';
                    $result = $db->get($sql);

                    $dates = array();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $dates[] = $row;
                        }
                    }
                    $maxDays = date('t');
                    foreach(range(1,$maxDays) as $i){
                        echo " <table class='table'>
                                          <tbody>
                                            <tr>
                                            <th>".$i."</th>";
                        foreach(range(8,18) as $j){
                            $rezerwacja = false;
                            foreach ($dates as $d){
                                if ($d["d"] == $i && $d["h"] == $j){
                                    $rezerwacja = true;
                                    break;
                                }
                            }
                            if ($rezerwacja) {
                                echo "<td>".$j.":00<br><span style='color: red'>rezerwacja</span>"."<br>"."</td>";
                            }
                            else{
                                echo "<td>".$j.":00<br><span style='color: green'>wolny</span>"."<br>"."</td>";
                            }
                        }
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>
            </div>        </div>
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
