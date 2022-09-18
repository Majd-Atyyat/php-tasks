<!-- 1 -->
<?php
echo"<h3>Q1</h3>";
echo "<br>";
?>
<!-- 1 starts here -->
<!-- // PHP code to check whether a number is prime or Not -->
<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>


<!-- 2 -->
<?php
echo "<br>";
echo"<h3>Q2</h3>";
echo "<br>";
?>

<!-- 2 starts here -->
<?php
// PHP program to reverse a string using strrev()

function Reverse($str){
    return strrev($str);
}

$str = "WhatEver!";
echo Reverse($str)
?>

<!-- 3 -->
<?php
echo "<br>";
echo"<h3>Q3</h3>";
echo "<br>";
?>
<!-- 3 starts here -->
<!-- // PHP code to check string is lowercase or not -->
<?php
function is_str_lowercase($string)
{
    foreach ($string as $test) {
        if (ctype_lower($test)) {
    echo "$test : consists of all lowercase letters.". "<br>";
    }else {
    echo "$test : does not have all lowercase letters.". "<br>";
    }
}
}
$string = array('aac', 'testing', "testin IS Done");
is_str_lowercase($string);

?>

<!-- 4 -->
<?php
echo "<br>";
echo"<h3>Q4</h3>";
echo "<br>";
?>
<!-- 4 starts here -->
<!-- // PHP code to swap variables -->
<?php

function swap($x, $y) {
  echo "Before Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";

  //Swap technique
$swap = $x;
$x = $y;
$y = $swap;

  echo "After Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";
}

echo swap(11, 2);
?>

<!-- 6 -->

<?php
echo "<br>";
echo"<h3>Q6</h3>";
echo "<br>";
?>
<!-- 6 starts here -->
<?php
// PHP code to check whether a number is
// armstrong number or not
 
// function to check whether the number is
// armstrong number or not
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    // if true then armstrong number
    if ($number == $sum)
        return 1;
     
    // not an armstrong number   
    return 0;   
}
 
// Driver Code
$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "Yes";
else
    echo "No"
?>

<!-- 7 -->
<?php
echo "<br>";
echo"<h3>Q7</h3>";
echo "<br>";
?>
<!-- 7 starts here -->
<?php
// PHP code to check for Palindrome number in PHP
// Function to check for Palindrome
function Palindrome($number){ 
    $swap = $number; 
    $new = 0; 
    while (floor($swap)) { 
        $d = $swap % 10; 
        $new = $new * 10 + $d; 
        $swap = $swap/10; 
    } 
    if ($new == $number){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
// Driver Code
$number = 1442;
if (Palindrome($number)){ 
    echo "Palindrome"; 
}
else { 
echo "Not a Palindrome"; 
}
 
?> 

<!-- 8 -->
<?php
echo "<br>";
echo"<h3>Q8</h3>";
echo "<br>";
?>
<!-- 8 starts here -->
<!-- PHP code to remove duplicates -->
<?php
function removeDuplicates($arr){
  echo print_r(array_unique($arr));
  }
  
  removeDuplicates([1,3,4,2,1,4,5,4,5]);
?>

