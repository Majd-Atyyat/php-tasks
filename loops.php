<!-- Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position. -->

<?php
echo"<h3>Q1</h3>";
echo "<br>";
?>
<!-- 1 starts here -->
<?php
for($x=1; $x<=10; $x++)
{
if($x< 10)
{
echo "$x-";
}
else
  {
echo "$x"."\n";
  }
}
?>

<!-- Create a script using a for loop to add all the integers between 0 and 30 and display the sum. -->
<?php
echo"<h3>Q2</h3>";
echo "<br>";
?>
<!-- 2 starts here -->
<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
?>
<!--  3  -->
<?php
echo"<h3>Q3</h3>";
echo "<br>";
?>
<!-- 3 starts here -->
<?php
for ($i=0; $i < 5; $i++) { 
  for ($j=4; $j >=0; $j--) { 
      if ($j <= $i) {
          echo  chr(ord('A')+$i)." ";
      }else{
          echo "A"." ";
      }
  }
  echo "<br>";
}
?>



<!--  4  -->
<?php
echo"<h3>Q4</h3>";
echo "<br>";
?>
<!-- 4 starts here -->
<?php
for ($i=0; $i < 5; $i++) { 
  for ($j=4; $j >=0; $j--) { 
      if ($j <= $i) {
          echo  (1+$i)." ";
      }else{
          echo "1"." ";
      }
  }
  echo "<br>";
}
?>
<!--  5  -->
<?php
echo"<h3>Q5</h3>";
echo "<br>";
?>
<!-- 5 starts here -->
<?php
for($i=1;$i<6;$i++){
  for($j=1;$j<6;$j++){
      if($i==$j){
          echo $j." ";
      }
      else{
          echo "0"." ";
      }

  }
  echo "<br>";
}
?>

<!-- Write a program to calculate and print the factorial of a number using a for loop. -->

<?php
echo"<h3>Q6</h3>";
echo "<br>";
?>
<!-- 6 starts here -->
<?php
// PHP Program to Find Factorial of a Number using For loop

$x = 5;
$f = 1;
// $x - To store the input number
// $f - To store the factorial value

if ($x > 0) {
    for ($i = 1; $i <= $x; $i++) {
        $f *= $i;
    }
    echo "Factorial of " . $x . " = " . $f . "\n";
} else {
    echo "Sorry, The input number should be positive number& it's greater than 0!\n";
}

?>
<!-- Fibonacci Series Program in PHP using For Loop -->
<?php
echo"<h3>Q7</h3>";
echo "<br>";
?>
<!-- 7 starts here -->
<?php
    $f1 = 0;  //first number
    $f2 = 1; // second number
    $n = 10; //total Fibonacci series number count.
    echo $f1;
    echo '<br/>';
    echo $f2;
    echo '<br/>';
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3 ."<br />"; 
    }
?>

<!-- Write a program which will count the "c" characters in the text "orange coding academy". -->
<?php
echo"<h3>Q8</h3>";
echo "<br>";
?>
<!-- 8 starts here -->
<?php

    $text="Orange Coding Academy";
    $count="0";
    for($x="0"; $x< strlen($text); $x++)
      { 
        if(substr($text,$x,1)=="o"||substr($text,$x,1)=="O")
        {
        $count=$count+1;
       }
      }
    echo $count."\n";
    ?>
    <!-- PHP script that creates table as asked in the task (use for loops).-->
    <?php
echo"<h3>Q9</h3>";
echo "<br>";
?>
<!--9 starts here-->
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
		echo "</table>";
?>

<!-- Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz"
 instead of the number and for the multiples of five print "Buzz". 
 For numbers which are multiples of both three and five print "FizzBuzz". -->
 <?php
echo"<h3>Q10</h3>";
echo "<br>";
?>
<!--10 starts here-->
<?php
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo " FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo " Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo " Buzz"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }
?>
<!-- Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).
According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers,
used in computer science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle 
with consecutive numbers, starting with a 1 in the top left corner: -->
<?php
echo"<h3>Q11</h3>";
echo "<br>";
?>
<!--11 starts here-->
<?php
// PHP code to print Floyd's Triangle
 
// Function to display Floyd's Triangle
function FloydsTriangle($n)
{
    $value = 1;
     
    // loop for number of lines
    for($i = 1; $i <= $n; $i++)
    {
        // loop for number of elements
        // in each line
        for($j = 1; $j <= $i; $j++)
        {
            print($value." ");
            $value++;
        }
      echo("<br>");
    }
}
 
// Driver's Code
$n = 6;
FloydsTriangle($n);

?>

<?php
echo"<h3>task</h3>";
echo "<br>";
?>
<!--11 starts here-->

<?php
$arr=["abcd","abc","hello world","ma","j","aty"];
$min=1;
$max=0;

for($i=1;$i<count($arr);$i++){

    if( strlen($arr[$i])<$min ) {
        $min = strlen($arr[$i]);
    }

    if(strlen($arr[$i])>$max  ) {
        $max =strlen($arr[$i]);
    }
}


echo "the The shortest array length is ". $min. "The longest array length is ".$max;

?>

