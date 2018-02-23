<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if($link = mysqli_connect("localhost","root","","testowa")) :
            echo ("Udalo sie polaczyc z baza");
            $query = 'SELECT * from testowa';
            if($result = mysqli_query($link,$query))
            echo ("Udalo sie wykonac zapytanie");
    ?>
    <table>
        <tr>
            <th>IMIĘ</th>
            <th>NAZWISKO</th>
            <?php
                //odczytanie i wyświetlenie danych pobranych z tabeli
                while($row = mysqli_fetch_row(""))
                {

                }
            ?>
    </table>
</body>
</html>