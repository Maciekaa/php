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
    $link = mysqli_connect("localhost", "root", "", "szturo");
    
    if(!$link) {
       echo "Error: Unable to connect to MySQL." . PHP_EOL;
       echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
       echo "Debugging error: " . mysqli_connect_error() . PHP.EOL;
       exit();
    }else echo "działa se"
    mysql_close($link);
   
    ?>
</body>
</html>