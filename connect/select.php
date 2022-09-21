<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>select | order</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>orders</h2>
<table class='table table-bordered'>
<tr>
<th>Order_ID</th><th>Drug_ID</th><th>Date</th><th>Quantity</th><th>Discount</th><th>Payment Method</th>
</tr>
<?php
// connect to database 
$conn=mysqli_connect('localhost','root','','pharmacy');

//check connection 
if(!$conn){
    echo 'connection error'. mysqli_connect_error();
}
// else 
// echo ' connection is done';


$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

echo "<tr>";
echo "<td>" . $row['Order_ID'] . "</td>";
echo "<td>" . $row['Drug_ID'] . "</td>";
echo "<td>" . $row['Date'] . "</td>"; 
echo "<td>" . $row['Quantity'] . "</td>";
echo "<td>" . $row['Discount'] . "</td>";
echo "<td>" . $row['Payment_Method'] . "</td>";

echo "</tr>";

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</tbody></table>
</div>
</div>
</div>
</body>
</html>