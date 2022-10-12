<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php and mysql</title>
</head>
<body>

<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "suman";

    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // die if connection was not successful
    if(!$conn){
        die("sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "connection was successful<br>";
    }

    // show all the tables in the database
    $sql = "SHOW TABLES FROM $database";
    $result = mysqli_query($conn, $sql);
    
    echo "<b>Tables in $database database:</b><br>";
    while($row = mysqli_fetch_row($result)){
        echo "$row[0]<br>";
        echo "<br>";
    }







?>

</body>
</html>