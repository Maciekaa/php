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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";
        //Connect to database
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        //Check connect
        if(!$conn)
        {
            die("Nieudane polaczenie: " . mysqli_connect_error());
        }
        //Insert to table
        $sql = "INSERT INTO myusers(username, firstname, lastname, email) VALUES ('XSebaX','Sebastian','Wu','Seba@Witkowski.pl');";
        $sql .="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('MultiImie','Andrzej','Krzysiek','Maciej@Jakub.pl');";
        $sql .="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('KowalskiKonrad','Konrad','Kowalski','Konrad@kowalski.pl');";
        $sql .="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('WojcikMaciej','Maciej','Wojcik','Maciek@Wojcik.pl');";
        if (mysqli_multi_query($conn,$sql))
        {
            echo("Dodano");
        }else echo("Error " . $sql . "<br>" . mysqli_error($conn));
        mysqli_close($conn);
    ?>
</body>
</html>