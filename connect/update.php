<?php
// connect to database 
$conn=mysqli_connect('localhost','root','','pharmacy');

//check connection 
if(!$conn){
    echo 'connection error'. mysqli_connect_error();
}
// else 
// echo ' connection is done';


$sql = "UPDATE orders SET Discount='0' WHERE Order_ID=5";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
    <title> update</title>
</html>