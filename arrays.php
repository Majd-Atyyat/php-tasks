<!-- 1.	Write a script to generate the following paragraph 
 
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
The words 'red', 'green' and 'white' should come from $colors array. -->

<?php
echo"<h3>Q1</h3>";
echo "<br>";
?>
<!-- 1 starts here -->
<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
?>

<!-- 2.	$colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list :
Expected Output:  
•	green
•	red
•	white -->

<?php
echo"<h3>Q2</h3>";
echo "<br>";
?>
<!-- 2 starts here -->
<?php
$colors = array('white', 'green', 'red');
echo "<ul>";
echo "<li>$colors[0]</li>";
echo "<li>$colors[1]</li>";
echo "<li>$colors[2]</li>";;
echo "</ul>";
?>
<!-- 2 in dif way -->
<?php
echo"<h3>Q2 but using foreach</h3>";
echo "<br>";
?>
<!-- 2 starts here -->
<?php
$colors = array('white', 'green', 'red');
echo "<ul>";
foreach ($colors as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>
<!-- 
3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
 "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country.  -->

<?php
echo"<h3>Q3</h3>";
echo "<br>";
?>
<!-- 3 starts here -->
<?php
$countryAndCapital = [  "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
 "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
 "Portugal"=>"Lisbon", "Spain"=>"Madrid" ] ;

asort($countryAndCapital) ;
foreach($countryAndCapital as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
?>

<!-- 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

Write a PHP script to display the first element of the above array. 
Expected Output:  white -->

<?php
echo"<h3>Q4</h3>";
echo "<br>";
?>
<!-- 4 starts here -->
<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
echo "<br>";
echo $color[4];
?>

<!-- 5.	Write a PHP script that inserts a specific new item in an array in any position.
Sample Input:

Array 1 2 3 4 5   
Location: 4
New Item: $
 -->

<?php
echo"<h3>Q5</h3>";
echo "<br>";
?>
<!-- 5 starts here -->
<?php
$array=[1,2,3,4,5,6];
$insertarry=["$"];
array_splice($array, 3, 0, $insertarry);
echo implode(", ", $array); 

?>
<!-- 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange -->

<?php
echo"<h3>Q6</h3>";
echo "<br>";
?>
<!-- 6 starts here -->
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
 krsort($fruits);
foreach($fruits as $fru => $fru_value) {
    echo $fru." = " .$fru_value;
    echo "<br>";
  }

?>

<!-- 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, 
also the script should display the list of the five lowest and the five highest temperatures 
Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85, -->

<?php
echo"<h3>Q7</h3>";
echo "<br>";
?>
<!-- 7 starts here -->
<?php
$temprature=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,  65, 64, 68, 73, 75, 79, 73];
$avg= array_sum($temprature)/count($temprature);
$temp_array_length = count($temprature);
echo "Average Temperature is : ".$avg."<br>";

sort($temprature);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temprature[$i].", ";
}

rsort($temprature);
echo "<br>"." List of five highest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temprature[$i].", ";
}
?>
<!-- 8.	Write a PHP program to merge the following two arrays. 

Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

Expected Output:
Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
) -->
<?php
echo"<h3>Q8</h3>";
echo "<br>";
?>
<!-- 8 starts here -->
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$joinedArray= $array1 + $array2;
print_r(array_merge($array1,$array2));

?>
<!-- 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

Sample Input:

$colors = array("red","blue", "white","yellow"); -->

<?php
echo"<h3>Q9</h3>";
echo "<br>";
?>
<!-- 9 starts here -->
<?php
$colors = array("red","blue", "white","yellow");

foreach($colors as $clr) {
    echo strtoupper($clr);
   echo "<br>";
 }
?>
<!-- 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

Sample Input:

$colors = array("RED","BLUE", "WHITE","YELLOW"); -->

<?php
echo"<h3>Q10</h3>";
echo "<br>";
?>
<!-- 10 starts here -->
<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");

foreach($colors as $clr) {
    echo strtolower($clr);
   echo "<br>";
 }
?>

<!-- 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.  -->
<?php
echo"<h3>Q11</h3>";
echo "<br>";
?>
<!-- 11 starts here -->
<?php
for($i = 200; $i <= 250; $i ++)
{
    if ($i % 4==0){
        print($i."\n");
    }
    
}
?>

<!-- 12.	Write a PHP script to get the shortest/longest string length from an array.  -->
<?php
echo"<h3>Q12</h3>";
echo "<br>";
?>
<!-- 12 starts here -->
<?php
 $words =  ["abcd","abc","de","hjjj","g","wer"];
$lengths = array_map('strlen', $words);

// Show min and max string length
echo "The shortest array length is " . min($lengths) .  ". The longest array length is " . max($lengths);

?>

<?php

$data = array('163','630','43','42','999','31');
//Will return the longest element that is nearest to the end of the array (999)
//That's why we use strlen() on the result.
$max_l = strlen(array_reduce($data,'maxlen'));
//Will return the shortest element that is nearest to the end of the array (31)
$min_l = strlen(array_reduce($data,'minlen'));

echo "The longest word is $max_l characters, while the shortest is $min_l\n";

function maxlen($k,$v) {
        if (strlen($k) > strlen($v)) return $k;
        return $v;
}
function minlen($k,$v) {
        if ($k == '') return PHP_INT_MAX;
        if (strlen($k) < strlen($v)) return $k;
        return $v;
}
?>

<!-- 13.	Write a PHP script to generate unique random 10 numbers within a specific range.  -->
<?php
echo"<h3>Q13</h3>";
echo "<br>";
?>
<!-- 13 starts here -->
<?php
$number=range(11,20);
shuffle($number);
for ($x=0; $x< 10; $x++)
{
echo $number[$x]."\n";
}

?>

<!-- 14.	Write a PHP script that returns the lowest integer in the array  that is not 0.  -->
<?php
echo"<h3>Q14</h3>";
echo "<br>";
?>
<!-- 14 starts here -->

<?php
// Returns minimum in array
function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}
 
// Driver code
$array = array(7, 2, 3, 4, 9);
echo(getMin($array));
?>





