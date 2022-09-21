<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>inner join</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Majd's pharmacy sales</h2>
<table class='table table-bordered'>
<tr>
<th>Date</th><th>Order_ID</th><th>Drug_Name</th><th>Dosage</th><th>Type</th><th>Quantity</th><th>price</th><th>expiry_date</th><th>sub_name</th>
</tr>
<?php
// connect to database
$hostname="localhost";
$username="root";
$password="";
$db = "pharmacy";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

foreach($dbh->query('SELECT orders.Date,orders.Order_ID, Drug_Name, Dosage , Type, orders.Quantity,  public_price , expiry_date ,  sub_name
FROM product
INNER JOIN supplier
ON product.supplier_ID = supplier.supplier_ID
INNER JOIN orders
ON orders.Drug_ID = product.Drug_ID
') as $row) {
echo "<tr>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Order_ID'] . "</td>"; 
echo "<td>" . $row['Drug_Name'] . "</td>";
echo "<td>" . $row['Dosage'] . "</td>";
echo "<td>" . $row['Type'] . "</td>"; 
echo "<td>" . $row['Quantity'] . "</td>";
echo "<td>" . $row['public_price'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>"; 
echo "<td>" . $row['sub_name'] . "</td>"; 

echo "</tr>";
}
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>
