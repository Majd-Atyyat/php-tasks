<?php
if (isset($_POST['submit'])){
    //cookie for name
    setcookie('name',$_POST['name'],time()+86400,"/",false,false);
   
}
// get cookie
$name=$_COOKIE['name'] ?? 'unknown';
?>




<!DOCTYPE html>
<html>
<body>

<h2>cookies</h2>

<form action="cookies.php" method="post">
  First name:<br>
  <input type="text" placeholder=" your first name" name="name">
  <br>
  <input type="submit" value="Submit"name="submit" >
</form> 

<p>Hello <?php  echo  ($name);?> </p>




</body>
</html>