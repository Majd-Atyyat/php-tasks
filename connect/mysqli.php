
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>

<body style="margin:50px;">
    <h1>List of students</h1>
<table class="table border">
  <tr>
    <th>StudentID</th>
    <th>first name</th>
    <th>Middle name</th>
    <th>family name</th>
    <th>Date of birth</th>
    <th>degree</th>
    <th>Major</th>
    <th>Address</th>
    <th>Age</th>
    <th>Tell-number</th>
  </tr>
  <?php
// connect to database 
$conn=mysqli_connect('localhost','root','','students');

//check connection 
if(!$conn){
    echo 'connection error'. mysqli_connect_error();
}
else 
echo ' connection is done';
?>
  <?php


  $sql = "SELECT * FROM students";
  $result =$conn->query($sql);
  if(!$result){
    die("Invalid query: ". $conn->error);
  }
  while($row=$result->fetch_assoc()){

    echo" <tr>
    <td>".$row["studentID"] ."</td>
    <td>".$row["first name"]."</td>
    <td>".$row["middle name"]."</td>
    <td>".$row["family name"]."</td>
    <td>".$row["date of birth"]."</td>
    <td>".$row["degree"]."</td>
    <td>".$row["major"]."</td>
    <td>".$row["address"]."</td>
    <td>".$row["age"]."</td>
    <td>".$row["tell-number"]."</td>
  </tr>";
  }
 
 ?>
</table>

    
</body>
</html>

























<!-- <?php
$sql = "SELECT studenID , 'first name', 'middle name' FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> -->
