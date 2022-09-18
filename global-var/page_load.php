<?php
// i put true as an argument so the output will be float instead of string : float its a number with decimal.
$start_time = microtime(TRUE);
?>

<?php 
    
// To Get the path of the current script
$currentPage = $_SERVER['SCRIPT_NAME'];
echo $currentPage; 
echo "<br>";
//	To Get filename of the currently executing script
$currentfile = $_SERVER['PHP_SELF'];
echo $currentfile; 
?>

<html>
<body>
<div id="wrapper">
<h1>Get Page Loading Time Using PHP</h1>



</div>
</body>
</html>

<?php
$end_time = microtime(TRUE);
// because it's micro we multiply it with 1000 to conver it to seconds
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
 
echo 'Page generated in '.$time_taken.' seconds.';
?>

