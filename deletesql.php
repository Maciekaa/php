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
        $sql = "DELETE FROM myusers WHERE id = 6";
        if (mysqli_query($conn, $sql)) {
            echo ("Wyszło");
        }
        mysqli_close($conn);
    ?>
</body>
</html>