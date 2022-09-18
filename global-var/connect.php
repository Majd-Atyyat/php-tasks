 <?php
//connect to database
$conn= mysqli_connect('localhost','root','','students');

//cheack connection_aborted
if(!$conn){
echo ' connection error' . mysqli_connect_error();
}
else 
echo 'connection is done';
?> 






















<!-- <?php
//connect to database
$conn= mysqli_connect('localhost','root','','students');

//cheack connection_aborted
if(!$conn){
echo ' connection error' . mysqli_connect_error();
}
else 
echo 'connection is done';
?> -->