
<div class="container">
<div class="row">
<div class="col-md-12">
<h4 >sales:</h4>
<table class='table table-bordered'>
<tr>
<th>Date</th><th>Drug Name</th><th>Dosage</th><th>Type</th><th>Quantity</th><th>price</th><th>expiry_date</th><th>sub_name</th>
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
ORDER BY order_ID ASC;
') as $row) {
echo "<tr>";
echo "<td>" . $row['Date'] . "</td>";
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