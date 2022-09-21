<?php
// connect to database 
$conn=mysqli_connect('localhost','root','','pharmacy');

//check connection 
if(!$conn){
    echo 'connection error'. mysqli_connect_error();
}
// else 
// echo ' connection is done';


// sql to delete a record
$sql = "DELETE FROM orders WHERE Order_ID=14";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
    <title> delete</title>
</html>