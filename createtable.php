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
        //SQL table to db
        $sql = "CREATE TABLE myusers(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP 
        )";
        if (mysqli_query($conn,$sql)) {
            echo ("Tabela myusers została utworzona");
        }else echo("Bład przy tworzeniu tabeli: " . mysqli_error($conn));
        mysqli_close($conn);
    ?>
</body>
</html>