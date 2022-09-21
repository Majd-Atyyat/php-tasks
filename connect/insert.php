<?php
// connect to database 
$conn=mysqli_connect('localhost','root','','pharmacy');

//check connection 
if(!$conn){
    echo 'connection error'. mysqli_connect_error();
}
// else 
// echo ' connection is done';


$sql = "INSERT INTO orders (Order_ID, Drug_ID, Date,Quantity,Discount,Payment_Method)
VALUES ('', '3', '2022-09-08','1','0','visa')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
    <title> insert</title>
</html>