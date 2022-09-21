<?php
$host ="localhost";
$databaseName="pharmacy";
$username="root";
$password="";
$dsn="mysql:host=$host;dbname=$databaseName"; // data source name **mysql=name of the database driver

//creat connection 
$databaseConnection= new PDO($dsn,$username,$password);

//check connection

// try something 
try {
    $databaseConnection= new PDO($dsn,$username,$password);
    echo "connection is succsseful ";
}  catch (PDOException $error){
echo $error;
}
//for catching errors : catch pode exceptions and store it in $eroor var
?>

<?php

?>