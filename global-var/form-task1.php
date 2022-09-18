<?php
if(isset($_POST['submit'])){
echo "email is: ". $_POST['email'] ."<br>";

echo "password is: ". $_POST['password'];

}
?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign in </title>
        <link rel="stylesheet" href="style3.css">
    </head>
<head>
	<title>ToDo List Application </title>
    <link rel="stylesheet" type="text/css" href="style1.css" >
</head>
<body>
<div class="login">
  <div class="form">
    <form class="login-form" action="form-task1.php" method="POST" autocomplete="off" >
      <input type="text" placeholder="email" name="email">
      <input type="password" placeholder="password" name="password">
      <div class="button">
        <input type="submit" name="submit"value="submit">
      </div>
    </form>  
  </div>
</div>
</body>
</html>