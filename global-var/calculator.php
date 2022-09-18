<?php
$start_time = microtime(TRUE);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>calculator </title>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <div class="root">
            <div class="cal">
                <div class="body">
                    <div class="caption">
                        <h1>PhP Calculator</h1>
                    </div>
                    <div class="int">
                        <form action="calculator.php" method="POST" autocomplete="off" >
                            <input type="number" name="num1" placeholder="enter number">
                            <input type="number" name="num2" placeholder="enter number">
                            <select name= "oparetor">
                                <option value="add">Add</option>
                                <option value="sub">Subtract</option>
                                <option value="multi">Multiply </option>
                                <option value="div">Divide</option>
                            </select>
                            <input type="submit" name="submit" value="Calculate" autocomplete="off" class="edit">
                        </form>
                    </div>
                </div>
                <div class="">
                    <h3> the result is :
<?php

if(isset($_POST['submit'])){
$num1= $_POST['num1'];
$num2= $_POST['num2'];
$operation= $_POST['oparetor'];
if($operation=="add")
echo $num1+$num2;

if($operation=="sub")
echo $num1-$num2;

if($operation=="multi")
echo $num1*$num2;

if($operation=="div")
echo $num1/$num2;

}
?>
                  </h3>
                </div>
            </div>
        </div>

<div id="wrapper">
<h1>Get Page Loading Time Using PHP</h1>

</div>
<?php
$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
 
echo 'Page generated in '.$time_taken.' seconds.';
?>
    </body>