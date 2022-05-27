   $sql = "Select imie ,nazwisko, zabieg.nazwa, wizyta.czas from pracownik Inner join wizyta on pracownik.id=wizyta.Pracownik_id Inner join zabieg on zabieg.id=wizyta.Zabieg_id where wizyta.Klient_id='$klient';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            echo '<table class="table"><tbody><tr><th>'.$row["imie"]." ".$row["nazwisko"].'</th><th>'.$row["czas"].'</th><th>'.$row["nazwa"].'</th></tr></tbody></table>';

        }
        
        
        
        
            $sql = "Select pracownik.imie ,pracownik.nazwisko, zabieg.nazwa, wizyta.czas , klient.imie as ki, klient.nazwisko as kn from pracownik Inner join wizyta on pracownik.id=wizyta.Pracownik_id Inner join zabieg on zabieg.id=wizyta.Zabieg_id inner join klient on klient.id=wizyta.Klient_id;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            echo '<table class="table"><tbody><tr><th>'.$row["imie"].' '.$row["nazwisko"].'</th><th>'.$row["czas"].'</th><th>'.$row["nazwa"].'</th><th>'.$row["ki"].' '.$row["kn"].'</th></tr></tbody></table>';

                        }


SPECJAL CHAR PHP, żeby nie pobierało skryptu 


       $sql = "SELECT * , klient.id as KiD , rola.nazwa as Rola FROM dane_logowanie  Inner join klient on klient.id=dane_logowanie.id   inner join rola on rola.id=Rola_id where haslo='".$password."' and email='".$username."'; 
