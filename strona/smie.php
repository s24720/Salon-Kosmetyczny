<h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Zabiegi pielęgnacyjno-złuszczające<span class="i-mark"></span></a></h3>
<section class="type-of-treatment">
    <div class="table-and-explication">
        <table class="list-of-tasks">

            <?php
            $conn = new mysqli("localhost", "szymon", "haslo", "loki");;
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT nazwa, cena, czas FROM zabieg WHERE Rodzaj_id = '1';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<table class='list-of-tasks'><tbody><tr><td class='taske-name'>" . $row["nazwa"] . "</td>" . "<td class='duration'>" . $row["czas"] . "</td>" . "<td class='price'>"
                        . $row["cena"] . "</td>" . "<td class='price-sale'></td></tr></tbody></table>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>


    </div>

</section>

<br>
<section class="type-of-treatment">
    <h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Zabiegi na ciało z użyciem aparatury<span class="i-mark"></span></a></h3>
    <span class="slidetoggle-trigger"></span>

    <div class="table-and-explication">
        <table class="list-of-tasks">
            <tbody><tr>
                <td class="task-name">Twarz</td>
                <td class="duration">30-40min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Twarz+dekolt</td>
                <td class="duration">40-50min.</td>
                <td class="price">250zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (górna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (dolna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            </tbody></table>

    </div>

</section>

<br>
<section class="type-of-treatment">
    <h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Oprawa oka<span class="i-mark"></span></a></h3>
    <span class="slidetoggle-trigger"></span>

    <div class="table-and-explication">
        <table class="list-of-tasks">
            <tbody><tr>
                <td class="task-name">Twarz</td>
                <td class="duration">30-40min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Twarz+dekolt</td>
                <td class="duration">40-50min.</td>
                <td class="price">250zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (górna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (dolna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            </tbody></table>

    </div>

</section>

<br>
<section class="type-of-treatment">
    <h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Masaż twarzy<span class="i-mark"></span></a></h3>
    <span class="slidetoggle-trigger"></span>

    <div class="table-and-explication">
        <table class="list-of-tasks">
            <tbody><tr>
                <td class="task-name">Twarz</td>
                <td class="duration">30-40min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Twarz+dekolt</td>
                <td class="duration">40-50min.</td>
                <td class="price">250zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (górna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (dolna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            </tbody></table>

    </div>

</section>

<br>
<section class="type-of-treatment">
    <h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#"> Makijaż permanentny<span class="i-mark"></span></a></h3>
    <span class="slidetoggle-trigger"></span>

    <div class="table-and-explication">
        <table class="list-of-tasks">
            <tbody><tr>
                <td class="task-name">Twarz</td>
                <td class="duration">30-40min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Twarz+dekolt</td>
                <td class="duration">40-50min.</td>
                <td class="price">250zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (górna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (dolna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            </tbody></table>

    </div>

</section>

<br>
<section class="type-of-treatment">
    <h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Pielęgnacja dłoni i stóp<span class="i-mark"></span></a></h3>
    <span class="slidetoggle-trigger"></span>

    <div class="table-and-explication">
        <table class="list-of-tasks">
            <tbody><tr>
                <td class="task-name">Twarz</td>
                <td class="duration">30-40min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Twarz+dekolt</td>
                <td class="duration">40-50min.</td>
                <td class="price">250zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (górna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (dolna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            </tbody></table>

    </div>

</section>

<br>
<section class="type-of-treatment">
    <h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Zabiegi na twarz z użyciem aparatury<span class="i-mark"></span></a></h3>
    <span class="slidetoggle-trigger"></span>

    <div class="table-and-explication">
        <table class="list-of-tasks">
            <tbody><tr>
                <td class="task-name">Twarz</td>
                <td class="duration">30-40min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Twarz+dekolt</td>
                <td class="duration">40-50min.</td>
                <td class="price">250zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (górna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (dolna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            </tbody></table>

    </div>

</section>

<br>
<section class="type-of-treatment">
    <h3 style="text-indent: 5%;" class="name-of-treatment" ><a style=" text-decoration: none; color:#e4c9c4; " href="#">Mezoterapia<span class="i-mark"></span></a></h3>
    <span class="slidetoggle-trigger"></span>

    <div class="table-and-explication">
        <table class="list-of-tasks">
            <tbody><tr>
                <td class="task-name">Twarz</td>
                <td class="duration">30-40min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Twarz+dekolt</td>
                <td class="duration">40-50min.</td>
                <td class="price">250zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (górna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            <tr>
                <td class="task-name">Plecy (dolna część)</td>
                <td class="duration">40-50min.</td>
                <td class="price">180zł</td>
                <td class="price-sale"></td>
            </tr>
            </tbody></table>

    </div>

</section>